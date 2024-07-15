<?php

namespace App\Http\Controllers\admin;

use App\Helpers\QueryHelper;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BalanceLog;
use App\Models\BankingHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TransferController extends Controller
{
  public function management_transfer(Request $request)
  {

    $ids = QueryHelper::adminids();
    $data = Admin::whereIn('id', $ids);

    if ($request->search != '') {
      $data = $data->where('username', 'like', '%' . $request->search . '%');
    }

    $data = $data->paginate(10);

    if ($request->search != '') {
      return view('agent.agency-management-transfer-search', compact('data'));
    }

    

    return view('agent.agency-management-transfer', compact('data'));
  }



  public function allmemberlist(Request $request)
  {
    try {

      $ids = explode(',', $request->id);
      // DB::enableQueryLog();
      $data['member_list'] = Admin::whereIn('id', $ids)->get();
      // dd(DB::getQueryLog());       

      return view('agent.transfer-user-list', $data);
    } catch (\Throwable $th) {
      // return $th->getMessage();
      return '';
      // return redirect()->back()->with('success','Something went Wrong');
    }
  }

  public function bulktransferAmount(Request $request)
  {
    try {


      $data = Admin::where('id', Auth::guard('agent')->user()->id)->first();
      if (Hash::check($request->agent_password, $data->password)) {

        $id = explode(',', $request->all_ids);
        $amount = $request->tranfer_amount;

        $ownid = QueryHelper::ownid();


        for ($i = 0; $i < count($id); $i++) {

          if ($amount[$i] >= 0) {
            $type = 'D';
          } else {
            $type = 'W';
          }
          if ($amount[$i] != '') {
            if (Auth::guard('agent')->user()->role_id != 1) {

              $checkadminbalance = Admin::where('id', $ownid)->first();
              if ($type == 'D') {
                if ($amount[$i] > $checkadminbalance->balance) {
                  return redirect()->back()->with('success', 'You Do Not Have Sufficient Balance, Because Your Own Balance is : ' . $checkadminbalance->balance);
                  //   return 'Insufficient Balance';
                }
              }
            }
            if ($type == 'W') {

              $checkuserbalance = Admin::where('id', $id[$i])->first();

              if ($amount[$i] < $checkuserbalance->balance) {
                return redirect()->back()->with('success', 'Your Client Does Not Have Sufficient Balance, Because Client Balance is : ' . $checkuserbalance->balance);
                //   return 'Insufficient Balance';
              }
            }



            BankingHistory::insert(
              [
                'type' => $type,
                'amount' => str_replace('-', '', $amount[$i]),
                'remarks' => $request->note,
                'parent_id' => Auth::guard('agent')->user()->id,
                'user_id' => $id[$i],
                'ip_address' => $request->ip()
              ]
            );


            BalanceLog::insert([
              'balance_amount' => str_replace('-', '', $amount[$i]),
              'balance_given_by' => Auth::guard('agent')->user()->id,
              'balance_given_to' => $id[$i],
              'note' => $request->note
            ]);

            // DB::enableQueryLog();
            if ($type == 'D') {
              Admin::where('id', $id[$i])->update(['balance' => DB::raw('balance + ' . $amount[$i])]);
            } else {
              Admin::where('id', $id[$i])->update(['balance' => DB::raw('balance - ' . $amount[$i])]);
            }

            // dd(DB::getQueryLog());        
            if (Auth::guard('agent')->user()->role_id != 1) {
              if ($type == 'D') {
                Admin::where('id', $ownid)->update(['balance' => DB::raw('balance - ' . $amount[$i])]);
              }
            }
          }
        }

        return redirect()->back()->with('success', 'Success !!');
      } else {
        return redirect()->back()->with('success', 'Wrong Password !!');
      }
      //   return 'Success !!';

    } catch (\Throwable $th) {

      //return 'Something went Wrong';
      // return $th->getMessage();
      return redirect()->back()->with('success', 'Something went Wrong');
    }
  }

  public function transferAmount(Request $request)
  {

    try {

      $ownid = QueryHelper::ownid();
      $withdrawAmount = $request->input('withdraw_amount');
      if ($withdrawAmount > 0) {
        $withdrawAmount = -$withdrawAmount;
      }

      // Update the request with the modified value
      $request->merge(['withdraw_amount' => $withdrawAmount]);
      // if ($request->amount >= 0) {
      //   $type = 'D';
      // } else {
      //   $type = 'W';
      // }


      if (!empty($request->amount)) {
        $type = 'D';
      } else {
        $type = 'W';
      }

      $data = Admin::where('id', Auth::guard('agent')->user()->id)->first();

      // if(Hash::check($request->agent_password,$data->password)){   
      if (Auth::guard('agent')->user()->role_id != 1) {
        $checkadminbalance = Admin::where('id', $ownid)->first();

        if ($type == 'D') {
          if ($request->withdraw_amount > $checkadminbalance->balance) {
            return redirect()->back()->with('success', 'You Do Not Have Sufficient Balance, Because Your Own Balance is : ' . $checkadminbalance->balance);
          }
        }
      }



      if ($type == 'W') {
        $checkuserbalance = Admin::where('id', $request->id)->first();

        if ($request->amount > $checkuserbalance->balance) {
          //   return $checkuserbalance;
          return redirect()->back()->with('success', 'Your Client Does Not Have Sufficient Balance, Because Client Balance is : ' . $checkuserbalance->balance);
          //   return 'Insufficient Balance';
        }
      }


      $total_user_balance = Admin::where('id', $request->id)->first();
      // echo '<pre>';
      // print_r($total_user_balance);
      // echo '</pre>';
      // die();
      if ($type == 'W') {
        $balance = $total_user_balance->balance + $request->withdraw_amount;
        $amount_check = $request->withdraw_amount;
      } else {
        $balance = $total_user_balance->balance + $request->amount;
        $amount_check = $request->amount;
      }


      BankingHistory::insert(
        [
          'type' => $type,
          'amount' => str_replace('-', '', $amount_check),
          'remarks' => $request->note,
          'parent_id' => Auth::guard('agent')->user()->id,
          'user_id' => $request->id,
          'balance' => $balance,
          'ip_address' => $request->ip()
        ]
      );
      if ($type != 'W') {
        BalanceLog::insert([
          'balance_amount' => str_replace('-', '', $amount_check),
          'balance_given_by' => Auth::guard('agent')->user()->id,
          'balance_given_to' => $request->id,
          'note' => $request->note
        ]);
      }
      // DB::enableQueryLog();
      if ($type == 'D') {
        Admin::where('id', $request->id)->update(['balance' => DB::raw('balance + ' . $request->amount)]);
      } else {
        Admin::where('id', $request->id)->update(['balance' => DB::raw('balance + ' . $request->withdraw_amount)]);
      }
      // dd(DB::getQueryLog());

      if (Auth::guard('agent')->user()->role_id != 1) {
        if ($type == 'D') {
          Admin::where('id', $ownid)->update(['balance' => DB::raw('balance - ' . $request->amount)]);
        }
      }
      return redirect()->back()->with('success', 'Successfully Transfer !!');

      // }else{
      //     return redirect()->back()->with('success','Wrong Password !!');
      // }

    } catch (\Throwable $th) {

      // return $th->getMessage();
      return redirect()->back()->with('success', 'Something went Wrong');
    }
  }
}
