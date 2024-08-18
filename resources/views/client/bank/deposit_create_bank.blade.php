@extends('web_layout.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')

<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-list>

        <div class="events p-4" >
            <!-- <h1 class="event_Cricket">Deposit
                <span class="starts-in-label">Bank Transfer</span>
            </h1> -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                <h3 class="text-left" style="font-weight: bolder;">Transfer Details</h3>
                <div class="mybets-date-picker">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <h5><span style="font-weight:600">Bank Name :</span> <span id="bank_name">Axis bank</span></h5>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <button class="btn btn-warning" id="bank_name_copy_btn" onclick="copyText('bank_name','bank_name_copy_btn')">Copy Text</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <h5><span style="font-weight:600">Bank Name :</span> <span id="account_holder_name">Nashin Khan</span></h5>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <button class="btn btn-warning" id="account_holder_name_copy_btn" onclick="copyText('account_holder_name','account_holder_name_copy_btn')">Copy Text</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <h5><span style="font-weight:600">Bank Name :</span> <span id="account_number">923010055346578</span></h5>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <button class="btn btn-warning" id="account_number_copy_btn" onclick="copyText('account_number','account_number_copy_btn')">Copy Text</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <h5><span style="font-weight:600">Bank Name :</span> <span id="account_type">Saving</span></h5>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <button class="btn btn-warning" id="account_type_copy_btn" onclick="copyText('account_type','account_type_copy_btn')">Copy Text</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <h5><span style="font-weight:600">Bank Name :</span> <span id="ifsc_code">UTIB0004525</span></h5>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <button class="btn btn-warning" id="ifsc_code_copy_btn" onclick="copyText('ifsc_code','ifsc_code_copy_btn')">Copy Text</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <h5><span style="font-weight:600">Bank Name :</span> <span id="branch">Raipur</span></h5>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <button class="btn btn-warning" id="branch_copy_btn" onclick="copyText('branch','branch_copy_btn')">Copy Text</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
        $('#amount1').click(function(){
            $('#amountField').val($('#amount1').text());
        });
        $('#amount2').click(function(){
            $('#amountField').val($('#amount2').text());
        });
        $('#amount3').click(function(){
            $('#amountField').val($('#amount3').text());
        });
        $('#amount4').click(function(){
            $('#amountField').val($('#amount4').text());
        });
        $('#amount5').click(function(){
            $('#amountField').val($('#amount5').text());
        });
        $('#amount6').click(function(){
            $('#amountField').val($('#amount6').text());
        });

        // validation error msg
        $('.alert').delay(3000).fadeOut('slow');
        
        //swiper promo code
        $( ".apply_code" ).on( "click", function() {
            var promoCode = $(this).attr("data-promo");
            $('#bonus_code_id').val(promoCode);
        });
        
       
    });
    
     //copy text info buttons
        function copyText(id_name,copy_btn_id) {
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