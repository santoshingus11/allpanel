<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function create_withdraw()
    {
        return view('client.bank.withdraw_create');
    }

    public function submit_withdraw(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'email' => 'required',
            'bank_name' => 'required',
            'account_holder_name' => 'required',
            'account_number' => 'required',
            'account_type' => 'required',
            'branch' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $withdraw = new Withdraw();
        $withdraw->amount = $request->amount;
        $withdraw->email = $request->email;
        $withdraw->bank_name = $request->bank_name;
        $withdraw->account_holder_name = $request->account_holder_name;
        $withdraw->account_number = $request->account_number;
        $withdraw->account_type = $request->account_type;
        $withdraw->ifsc_code = $request->ifsc_code;
        $withdraw->branch = $request->branch;
        $withdraw->status = 'pending';
        $withdraw->user_id = Auth::guard('client')->user()->id;
        $withdraw->username = Auth::guard('client')->user()->username;

        $withdraw->save();

        return redirect()->route('withdraw.create')->with('message', 'Withdraw requested successfully');
    }

    public function withdraw_list()
    {
        $id = Auth::guard('client')->user()->id;
        $withdraws = Withdraw::where('user_id', $id)->paginate(1);
        return view('client.withdraw_list', compact('withdraws'));
    }
}
