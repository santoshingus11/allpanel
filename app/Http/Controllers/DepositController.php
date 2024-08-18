<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\TransferDetail;
use App\Models\Bonus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class DepositController extends Controller
{
    public function create_deposit() {
        $user = Auth::guard('client')->user();
        // $bank = TransferDetail::where('transfer_name','bank')->first();
        // $bonuses = Bonus::where('status',1)->get();
        return view('client.bank.deposit_create_bank', get_defined_vars());
    }

    public function submit_deposit(Request $request) {
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'username' => 'required',
            'email' => 'required',
            'image_name' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
      
        $deposit = new Deposit();
        if(!empty($bonus)){
            $deposit->amount = $request->amount + $bonus->bonus_amount;
        }else{
            $deposit->amount = $request->amount;
        }
        $deposit->bonus_code = $request->bonus_code ?? "";
        $deposit->transfer_details_id = "1";
        $deposit->username = Auth::guard('client')->user()->username;
        $deposit->email = $request->email;
        $deposit->status = 'pending';
        $deposit->user_id = Auth::guard('client')->user()->id;

        if ($request->hasFile('image_name')) {
            $image       = $request->file('image_name');
            $filename    = time()."_".$image->getClientOriginalName();
            // $image_resize = Image::make($image->getRealPath());
            // $image_resize->save(public_path('/assets/images/Deposit/' .$filename));
            $image->move(public_path('/assets/images/Deposit/'), $filename);
            $deposit->image_name = $filename;
        }

        $deposit->save();

        return redirect()->route('deposit.create')->with('message', 'Deposit completed successfully');
    }

    public function create_deposit_paytm() {
        $user = Auth::guard('client')->user();
        $paytm = TransferDetail::where('transfer_name','paytm')->first();
        $bonuses = Bonus::where('status',1)->get();
        return view('client.deposit_create_paytm', compact('user','paytm','bonuses'));
    }

    public function submit_deposit_paytm(Request $request) {
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'image_name' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bonus = Bonus::where('bonus_code',$request->bonus_code)->first();
        $tranfer_acc_detail = TransferDetail::where('transfer_name','paytm')->first();

        $deposit = new Deposit();
        if(!empty($bonus)){
            $deposit->amount = $request->amount + $bonus->bonus_amount;
        }else{
            $deposit->amount = $request->amount;
        }
        $deposit->bonus_code = $request->bonus_code;
        $deposit->transfer_details_id = $tranfer_acc_detail->id;
        $deposit->username = Auth::guard('client')->user()->username;
        $deposit->wallet = $tranfer_acc_detail->wallet;
        $deposit->wallet_name = $tranfer_acc_detail->wallet_name;
        $deposit->status = 'pending';
        $deposit->user_id = Auth::guard('client')->user()->id;

        if ($request->hasFile('image_name')) {
            $image       = $request->file('image_name');
            $filename    = time()."_".$image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('/frontend/assets/images/Deposit/' .$filename));

            $deposit->image_name = $filename;
        }

        $deposit->save();

        return redirect()->route('deposit.create.paytm')->with('message', 'Deposit completed successfully');
    }

    public function create_deposit_upi() {
        $user = Auth::guard('client')->user();
        $upi = TransferDetail::where('transfer_name','upi')->first();
        $bonuses = Bonus::where('status',1)->get();
        return view('client.deposit_create_upi', compact('user','upi','bonuses'));
    }

    public function submit_deposit_upi(Request $request) {
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'image_name' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bonus = Bonus::where('bonus_code',$request->bonus_code)->first();
        $tranfer_acc_detail = TransferDetail::where('transfer_name','upi')->first();

        $deposit = new Deposit();
        if(!empty($bonus)){
            $deposit->amount = $request->amount + $bonus->bonus_amount;
        }else{
            $deposit->amount = $request->amount;
        }
        $deposit->bonus_code = $request->bonus_code;
        $deposit->transfer_details_id = $tranfer_acc_detail->id;
        $deposit->username = Auth::guard('client')->user()->username;
        $deposit->wallet = $tranfer_acc_detail->wallet;
        $deposit->wallet_name = $tranfer_acc_detail->wallet_name;
        $deposit->status = 'pending';
        $deposit->user_id = Auth::guard('client')->user()->id;

        if ($request->hasFile('image_name')) {
            $image       = $request->file('image_name');
            $filename    = time()."_".$image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('/frontend/assets/images/Deposit/' .$filename));

            $deposit->image_name = $filename;
        }

        $deposit->save();

        return redirect()->route('deposit.create.upi')->with('message', 'Deposit completed successfully');
    }

    public function create_deposit_qrcode() {
        $user = Auth::guard('client')->user();
        $qrcode = TransferDetail::where('transfer_name','qrcode')->first();
        $bonuses = Bonus::where('status',1)->get();
        return view('client.deposit_create_qrcode', compact('user','qrcode','bonuses'));
    }

    public function submit_deposit_qrcode(Request $request) {
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'image_name' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bonus = Bonus::where('bonus_code',$request->bonus_code)->first();
        $tranfer_acc_detail = TransferDetail::where('transfer_name','qrcode')->first();

        $deposit = new Deposit();
        if(!empty($bonus)){
            $deposit->amount = $request->amount + $bonus->bonus_amount;
        }else{
            $deposit->amount = $request->amount;
        }
        $deposit->bonus_code = $request->bonus_code;
        $deposit->transfer_details_id = $tranfer_acc_detail->id;
        $deposit->username = Auth::guard('client')->user()->username;
        $deposit->wallet = $tranfer_acc_detail->wallet;
        $deposit->wallet_name = $tranfer_acc_detail->wallet_name;
        $deposit->status = 'pending';
        $deposit->user_id = Auth::guard('client')->user()->id;

        if ($request->hasFile('image_name')) {
            $image       = $request->file('image_name');
            $filename    = time()."_".$image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('/frontend/assets/images/Deposit/' .$filename));

            $deposit->image_name = $filename;
        }

        $deposit->save();

        return redirect()->route('deposit.create.qrcode')->with('message', 'Deposit completed successfully');
    }
    
    // bitcoin deposit
    public function create_deposit_bitcoin() {
        $user = Auth::guard('client')->user();
        $bitcoin = TransferDetail::where('transfer_name','bitcoin')->first();
        $bonuses = Bonus::where('status',1)->get();
        return view('client.deposit_create_bitcoin', compact('user','bitcoin','bonuses'));
    }

    public function submit_deposit_bitcoin(Request $request) {
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'image_name' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bonus = Bonus::where('bonus_code',$request->bonus_code)->first();
        $tranfer_acc_detail = TransferDetail::where('transfer_name','bitcoin')->first();

        $deposit = new Deposit();
        if(!empty($bonus)){
            $deposit->amount = $request->amount + $bonus->bonus_amount;
        }else{
            $deposit->amount = $request->amount;
        }
        $deposit->bonus_code = $request->bonus_code;
        $deposit->transfer_details_id = $tranfer_acc_detail->id;
        $deposit->username = Auth::guard('client')->user()->username;
        $deposit->wallet = $tranfer_acc_detail->wallet;
        $deposit->wallet_name = $tranfer_acc_detail->wallet_name;
        $deposit->status = 'pending';
        $deposit->user_id = Auth::guard('client')->user()->id;

        if ($request->hasFile('image_name')) {
            $image       = $request->file('image_name');
            $filename    = time()."_".$image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('/frontend/assets/images/Deposit/' .$filename));

            $deposit->image_name = $filename;
        }

        $deposit->save();

        return redirect()->route('deposit.create.bitcoin')->with('message', 'Deposit completed successfully');
    }
    
    // tron deposit
    public function create_deposit_tron() {
        $user = Auth::guard('client')->user();
        $tron = TransferDetail::where('transfer_name','tron')->first();
        $bonuses = Bonus::where('status',1)->get();
        return view('client.deposit_create_tron', compact('user','tron','bonuses'));
    }

    public function submit_deposit_tron(Request $request) {
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'image_name' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bonus = Bonus::where('bonus_code',$request->bonus_code)->first();
        $tranfer_acc_detail = TransferDetail::where('transfer_name','tron')->first();

        $deposit = new Deposit();
        if(!empty($bonus)){
            $deposit->amount = $request->amount + $bonus->bonus_amount;
        }else{
            $deposit->amount = $request->amount;
        }
        $deposit->bonus_code = $request->bonus_code;
        $deposit->transfer_details_id = $tranfer_acc_detail->id;
        $deposit->username = Auth::guard('client')->user()->username;
        $deposit->wallet = $tranfer_acc_detail->wallet;
        $deposit->wallet_name = $tranfer_acc_detail->wallet_name;
        $deposit->status = 'pending';
        $deposit->user_id = Auth::guard('client')->user()->id;

        if ($request->hasFile('image_name')) {
            $image       = $request->file('image_name');
            $filename    = time()."_".$image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('/frontend/assets/images/Deposit/' .$filename));

            $deposit->image_name = $filename;
        }

        $deposit->save();

        return redirect()->route('deposit.create.tron')->with('message', 'Deposit completed successfully');
    }

    // usdtrc20 deposit
    public function create_deposit_usdtrc20() {
        $user = Auth::guard('client')->user();
        $usdtrc20 = TransferDetail::where('transfer_name','usdtrc20')->first();
        $bonuses = Bonus::where('status',1)->get();
        return view('client.deposit_create_usdtrc20', compact('user','usdtrc20','bonuses'));
    }

    public function submit_deposit_usdtrc20(Request $request) {
        $validator = Validator::make($request->all(),[
            'amount' => 'required',
            'image_name' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bonus = Bonus::where('bonus_code',$request->bonus_code)->first();
        $tranfer_acc_detail = TransferDetail::where('transfer_name','usdtrc20')->first();

        $deposit = new Deposit();
        if(!empty($bonus)){
            $deposit->amount = $request->amount + $bonus->bonus_amount;
        }else{
            $deposit->amount = $request->amount;
        }
        $deposit->bonus_code = $request->bonus_code;
        $deposit->transfer_details_id = $tranfer_acc_detail->id;
        $deposit->username = Auth::guard('client')->user()->username;
        $deposit->wallet = $tranfer_acc_detail->wallet;
        $deposit->wallet_name = $tranfer_acc_detail->wallet_name;
        $deposit->status = 'pending';
        $deposit->user_id = Auth::guard('client')->user()->id;

        if ($request->hasFile('image_name')) {
            $image       = $request->file('image_name');
            $filename    = time()."_".$image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('/frontend/assets/images/Deposit/' .$filename));

            $deposit->image_name = $filename;
        }

        $deposit->save();

        return redirect()->route('deposit.create.usdtrc20')->with('message', 'Deposit completed successfully');
    }
    public function deposit_list() {
        $id = Auth::guard('client')->user()->id;
        $deposits = Deposit::where('user_id', $id)->paginate(10);

        return view('client.deposit_list',compact('deposits'));
    }
}
