@extends('web_layout.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-list>

        <div class="events p-4">
            <!-- <h1 class="event_Cricket">Deposit
                <span class="starts-in-label">Bank Transfer</span>
            </h1> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                <label for="transfer_type">Select Transfer Type:</label>
                <select class="form-control" id="transfer_type" onchange="showTransferDetails(this.value)">
                    <option value="">-- Select Transfer Type --</option>
                    <option value="bank" transfer_id="1">Bank Transfer</option>
                    <option value="paytm" transfer_id="3">PayTM Transfer</option>
                    <option value="upi" transfer_id="4">Upi Transfer</option>
                    <option value="qr" transfer_id="5">QR Code Transfer</option>
                    <option value="tron" transfer_id="8">USTDTRC20 Transfer</option>
                </select>
            </div>

            <div id="bank_transfer_details" class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="display:none;">
                <h3 class="text-left" style="font-weight: bolder;">Bank Transfer</h3>
                <div class="mybets-date-picker">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                        <h3 class="text-left" style="font-weight: bolder;">Bank Transfer</h3>
                        <div class="mybets-date-picker">
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Bank Name :</span> <span id="bank_name">{{$bank[0]['bank_name']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <button class="btn btn-warning" id="bank_name_copy_btn" onclick="copyText('bank_name','bank_name_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Bank Name :</span> <span id="account_holder_name">{{$bank[0]['account_holder_name']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <button class="btn btn-warning" id="account_holder_name_copy_btn" onclick="copyText('account_holder_name','account_holder_name_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Bank Name :</span> <span id="account_number">{{$bank[0]['account_number']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <button class="btn btn-warning" id="account_number_copy_btn" onclick="copyText('account_number','account_number_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Bank Name :</span> <span id="account_type">{{$bank[0]['account_type']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <button class="btn btn-warning" id="account_type_copy_btn" onclick="copyText('account_type','account_type_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Bank Name :</span> <span id="ifsc_code">{{$bank[0]['ifsc_code']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <button class="btn btn-warning" id="ifsc_code_copy_btn" onclick="copyText('ifsc_code','ifsc_code_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Bank Name :</span> <span id="branch">{{$bank[0]['branch']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <button class="btn btn-warning" id="branch_copy_btn" onclick="copyText('branch','branch_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="paytm_transfer_details" class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="display:none;">
                <h3 class="text-left" style="font-weight: bolder;">PayTM Transfer Details</h3>
                <div class="mybets-date-picker">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                        <h3 class="text-left" style="font-weight: bolder;">PayTM Transfer Details</h3>
                        <div class="mybets-date-picker">
                            <div class="row">
                                <div class="col-lg-12 pt-3">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Phone No. :</span> <span id="wallet">{{$bank[1]['wallet']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <button class="btn btn-warning" id="wallet_copy_btn" onclick="copyText('wallet','wallet_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-3">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">
                                            <h5><span style="font-weight:600">Wallet Name :</span> <span id="wallet_name">{{$bank[1]['wallet_name']}}</span></h5>
                                        </div>
                                        <div class="col-lg-6 col-6 d-flex">
                                            <button class="btn btn-warning" id="wallet_name_copy_btn" onclick="copyText('wallet_name','wallet_name_copy_btn')">Copy Text</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="paytm_transfer_details1" class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="display:none;">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                    <h3 class="text-left" style="font-weight: bolder;">UPI Transfer Details</h3>
                    <div class="mybets-date-picker">
                        <div class="row">
                            <div class="col-lg-12 pt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <h5><span style="font-weight:600">Wallet :</span> <span id="wallet">{{$bank[2]['wallet']}}</span></h5>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <button class="btn btn-warning" id="wallet_copy_btn" onclick="copyText('wallet','wallet_copy_btn')">Copy Text</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 pt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <h5><span style="font-weight:600">Wallet Name :</span> <span id="wallet_name">{{$bank[2]['wallet_name']}}</span></h5>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <button class="btn btn-warning" id="wallet_name_copy_btn" onclick="copyText('wallet_name','wallet_name_copy_btn')">Copy Text</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="paytm_transfer_details2" class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="display:none;">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                    <h3 class="text-left" style="font-weight: bolder;margin-bottom:10px !important;">QR Code Transfer Details</h3>
                    <div class="mybets-date-picker">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="col-12 col-form-label" style="font-weight: 600;">Wallet</label>
                                {{-- <input readonly type="text" autocomplete="off" value="{{$bank[4]['wallet']}}" class="mx-input w-100"> --}}
                                <img src="{{'https://tigerex.art/public/assets/'.$bank[4]['wallet']}}" width="250" alt="">
                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <h5><span style="font-weight:600;">Wallet Name :</span> <span id="wallet_name">{{$bank[4]['wallet_name']}}</span></h5>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <button class="btn btn-warning" id="wallet_name_copy_btn" onclick="copyText('wallet_name','wallet_name_copy_btn')">Copy Text</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="paytm_transfer_details21" class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="display:none;">

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                    <h3 class="text-left" style="font-weight: bolder;margin-bottom:10px !important;">Tron Transfer Details</h3>
                    <div class="mybets-date-picker">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="col-12 col-form-label" style="font-weight: 600;">Wallet</label>

                                <img src="{{'https://tigerex.art/public/assets/'.$bank[6]['wallet']}}" width="250" alt="{{$bank[6]['wallet']}}">
                            </div>
                            <div class="col-lg-6 mt-5">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-10">
                                        <h5><span style="font-weight:600;">Wallet Name :</span> <span id="wallet_name">{{$bank[6]['wallet_name']}}</span></h5>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-2">
                                        <button class="btn btn-warning" id="wallet_name_copy_btn" onclick="copyText('wallet_name','wallet_name_copy_btn')">Copy Text</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function showTransferDetails(transferType) {


                    // Update the hidden inputs with the selected transfer type and transfer_id




                    document.getElementById('bank_transfer_details').style.display = (transferType === 'bank') ? 'block' : 'none';
                    document.getElementById('paytm_transfer_details').style.display = (transferType === 'paytm') ? 'block' : 'none';
                    document.getElementById('paytm_transfer_details1').style.display = (transferType === 'upi') ? 'block' : 'none';
                    document.getElementById('paytm_transfer_details2').style.display = (transferType === 'qr') ? 'block' : 'none';
                    document.getElementById('paytm_transfer_details21').style.display = (transferType === 'tron') ? 'block' : 'none';
                }

                $(document).ready(function() {
                    $('#transfer_type').change(function() {
                        var selectedOption = $(this).find('option:selected');

                        if (selectedOption.length) {
                            var transferType = selectedOption.val();
                            var transferId = selectedOption.attr('transfer_id');
                            $('#selected_transfer_id').val(transferId);
                            // Add similar display logic for UPI, QR, and USDT TRC20 transfer sections
                        }
                    });
                });
            </script>




            <div class="events-row">
                <!-- <h4 class="text-center" style="font-weight: bolder;">SELECT AMOUNT</h4>
                <div class="text-center">
                    <button type="button" id="amount1" class="btn btn-lg btn-dark">500</button>
                    <button type="button" id="amount2" class="btn btn-lg btn-dark">5000</button>
                    <button type="button" id="amount3" class="btn btn-lg btn-dark">10000</button>
                    <button type="button" id="amount4" class="btn btn-lg btn-dark">20000</button>
                    <button type="button" id="amount5" class="btn btn-lg btn-dark">50000</button>
                    <button type="button" id="amount6" class="btn btn-lg btn-dark">1000000</button>
                </div> -->



                <form action="{{route('deposit.submit')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" id="selected_transfer_id" name="selected_transfer_id" value="">
                    <div class="row mb-4">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mybets-date-picker">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="amount" class="col-12 col-form-label" "="" style=" font-weight: bolder;">Amount</label>
                                        <input name="amount" id="amountField" type="number" autocomplete="off" placeholder="Amount" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="bonus_code" class="col-12 col-form-label" style="font-weight: bolder;">Bonus Code</label>
                                        <input name="bonus_code" id="bonus_code_id" type="text" autocomplete="off" placeholder="Bonus Code" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="username" class="col-12 col-form-label" style="font-weight: bolder;">Name</label>
                                        <input name="username" type="text" autocomplete="off" placeholder="Name" value="client" class="mx-input w-100" readonly="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email" class="col-12 col-form-label" style="font-weight: bolder;">Email</label>
                                        <input name="email" type="email" autocomplete="off" placeholder="Email" value="" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="image_name" class="col-12 col-form-label" style="font-weight: bolder;">Upload Proof Image <span style="color:red;">(*Allowed file type:JPG, JPEG, PNG)</span></label>
                                        <input name="image_name" type="file" autocomplete="off" placeholder="Image Upload" class="mx-input w-100">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <label for="toDate" class="col-12 col-form-label w-100 height-24"></label>
                                        <button class="btn btn-primary" style="height: 35px;">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </app-sport-list><!---->
</div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>

<script>
    $(function() {
        $('#amount1').click(function() {
            $('#amountField').val($('#amount1').text());
        });
        $('#amount2').click(function() {
            $('#amountField').val($('#amount2').text());
        });
        $('#amount3').click(function() {
            $('#amountField').val($('#amount3').text());
        });
        $('#amount4').click(function() {
            $('#amountField').val($('#amount4').text());
        });
        $('#amount5').click(function() {
            $('#amountField').val($('#amount5').text());
        });
        $('#amount6').click(function() {
            $('#amountField').val($('#amount6').text());
        });

        // validation error msg
        $('.alert').delay(3000).fadeOut('slow');

        //swiper promo code
        $(".apply_code").on("click", function() {
            var promoCode = $(this).attr("data-promo");
            $('#bonus_code_id').val(promoCode);
        });


    });

    //copy text info buttons
    function copyText(id_name, copy_btn_id) {
        // Select the text within the h4 element
        var text = document.getElementById(id_name).innerText;

        // Create a temporary textarea element to hold the text
        var textarea = document.createElement('textarea');
        textarea.value = text;

        // Append the textarea to the body
        document.body.appendChild(textarea);

        // Select the text within the textarea
        textarea.select();

        // Copy the selected text to the clipboard
        document.execCommand('copy');

        // Remove the temporary textarea
        document.body.removeChild(textarea);
        var copyButton = document.getElementById(copy_btn_id);
        copyButton.innerText = 'Copied';
        // Optionally provide feedback to the user

    }
</script>
@endsection