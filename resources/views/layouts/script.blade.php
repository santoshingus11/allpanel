<script>
function searchdetails(value,url,messageid){
    if(value!=''){
        $.ajax({
      type: 'GET',
      url: url,
      data:{search:value},
      success: function (data) {
        document.getElementById(messageid).innerHTML=data;   
            },
            error: function (error) {
                console.error('Error fetching admin details:', error);
            }
        });
    }
 
}
function submituser() {
         var formData = $('#useraccessupdate').serialize();
         $.ajax({
             type: 'POST',
             url: $('#useraccessupdate').attr('action'),
             data: formData,
             dataType: 'json',
             success: function (response) {
              $('.invalid-feedback').text('');
              document.getElementById('usersuccessMessage').innerHTML = response.message;
              $('#usersuccessMessage').show().addClass('errorActive').delay(3000).fadeOut('slow');
  
              $('#editModal').modal('hide');
          },
          error: function (error) {
              // Clear any previous error messages
              $('.invalid-feedback').text('');
              document.getElementById('agenterrorMessage').innerHTML = '';
  
              if (error.status === 422) { // Assuming 422 is the HTTP status for validation errors
                  var errors = error.responseJSON.errors;
  
                  // Display errors in their corresponding fields
                  $.each(errors, function (key, value) {
                      // For each error, display it in the corresponding error field
                      var errorField = $('[name="' + key + '"]').siblings('.invalid-feedback');
                    
                      errorField.text(value[0]).show();
                      
                     
                  });
              } else if (error.status === 401) {
                  var errorMessage = error.responseJSON.error;
                  document.getElementById('adminpassworderror').innerHTML = errorMessage;
              } else {
                
              }
          }
      });
  }
// $("#selectAll").change(function(){

// if (! $('input:checkbox').is('checked')) {
//     $('input:checkbox').attr('checked','checked');

//     const checkboxes = document.querySelectorAll('input[name="admin_id[]"]');
//             const selectedValues = [];

//             checkboxes.forEach(function (checkbox) {
//                 if (checkbox.checked) {
//                     selectedValues.push(checkbox.value);
//                 }
//             });

//             alert(selectedValues);

// } else {
//     $('input:checkbox').removeAttr('checked');
//     const selectedValues = [];
//     alert('no');

// }       
// });

$(document).ready(function() {
      // When the "selectAll" checkbox is changed
      $("#selectAll").change(function() {
        // Get the checked status of "selectAll"
        var isChecked = $(this).prop("checked");
        // Set the same checked status to all checkboxes with class "form-check-input"
        $(".form-check-input").prop("checked", isChecked);
        const checkboxes = document.querySelectorAll('input[name="admin_id[]"]');
            const selectedValues = [];
            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    selectedValues.push(checkbox.value);
                }
            });
            document.getElementById("all_ids").value = selectedValues.join(",");       
            
            if(document.getElementById("bulk_transfer_id")){
            memberlist(selectedValues.join(","));
            }

            if(document.getElementById("total_member")){
                document.getElementById("total_member").innerHTML = selectedValues.length + ' Member selected';
            }
         
      });
    });

   

$(document).on("click", ".position", function () {
    const checkboxes = document.querySelectorAll('input[name="admin_id[]"]');
            const selectedValues = [];
            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    selectedValues.push(checkbox.value);
                }
            });       
            document.getElementById("all_ids").value = selectedValues.join(",");
            if(document.getElementById("bulk_transfer_id")){
            memberlist(selectedValues.join(","));
            }

            if(document.getElementById("total_member")){
                document.getElementById("total_member").innerHTML = selectedValues.length + ' Member selected';
            }
          
});

function deletemember(deleteid){

 var allids=document.getElementById('all_ids').value;
 var idsArray = allids.split(',');
 var index = idsArray.indexOf(deleteid.toString());
 // Check if index is found at the beginning
if (index === 0) {
    // Shift the array to remove the first element
    idsArray.shift();
} else if (index > 0) {
    // Remove the deleteid from the array
    idsArray.splice(index, 1);
}
// Join the array back into a string
var newAllIds = idsArray.join(',');
// alert(newAllIds);

document.getElementById('all_ids').value= newAllIds ;

 memberlist(newAllIds);
 
}

function totaltranfercount(){
    var inputs = document.getElementsByName('tranfer_amount[]');

var total = 0;

// Loop through each input element
for (var i = 0; i < inputs.length; i++) {
    // Parse the value to a float (assuming the input value is numeric)
    var value = parseFloat(inputs[i].value);

    // Add the parsed value to the total
    if (!isNaN(value)) {
        total += value;
    }
}

// Display the total in an element with id "total_amount"
document.getElementById('total_transfer').innerHTML = ` <h5>Total</h5><h5>${total}</h5>`; 
}

function  memberlist(ids){
   // alert(ids);
    $.ajax({
      type: 'GET',
      url: '{{route("all-member-list")}}',
      data:{id:ids},
      success: function (data) {
            //alert(data);
            document.getElementById("bulk_transfer_id").innerHTML=data;         
            },
            error: function (error) {
                console.error('Error fetching admin details:', error);
            }
        });
}

function clearall(){
    var inputFields = document.querySelectorAll('input[type="text"]');    
    // Loop through each input field and clear its value
    inputFields.forEach(function(input) {
        input.value = '';
    });
}

function checkselectedmember(modelid){
    var member =  document.getElementById("all_ids").value ;
if (member == '') {
    // If no member is selected, hide the modal backdrop and show the error message
    document.getElementById('emptymember').classList.add('p3');
    document.getElementById('emptymember').innerHTML = 'Select at least one member';
} else {
    $('#'+modelid).modal('show');
    document.getElementById('emptymember').classList.remove('p3');
    document.getElementById('emptymember').innerHTML = '';
}
}

$(document).ready(function(){
        setTimeout(function(){
            $(".flash-message").fadeOut("slow");
        }, 3000); // 3000 milliseconds = 3 seconds (adjust as needed)
    });

function downloadfunction(route){

  var sport_name=document.getElementById('sports_name').value;
  var market_name=document.getElementById('market_name').value;
  var event_name=document.getElementById('event_name').value;
  var member_name=document.getElementById('member_name').value;
  var url=document.getElementById('url').value;
  
window.location.href=url+'/'+route+'?sports_name='+sport_name+'&market_name='+market_name+'&event_name='+event_name+'&member_name='+member_name;

}

function downloadfunctionforagent(route){

var from_date=document.getElementById('from_date').value;
var to_date=document.getElementById('to_date').value;
var url=document.getElementById('url').value;

window.location.href=url+'/'+route+'?from_date='+from_date+'&to_date='+to_date;

}

    function functionsubmit(){
      var formData = new FormData($('#credit_history_form')[0]);   
    $.ajax({
    url: '{{ route("account-statement") }}',
    method: 'POST',
    data: formData,
    processData: false,  // Important! Don't process the data
    contentType: false,  // Important! Don't set content type
    success: function (data) {     
     
        document.getElementById('credit_history_id').innerHTML = data;
      
    },
    error: function (xhr, status, error) {
     console.error('Error:', error);
    }
    });
    }

    function clickdiv(id_value){
    document.getElementById('type').value= id_value;
    }

    function downloadaccountstatement(route){

 var type=document.getElementById('type').value;

var credit_from_date=document.getElementById('credit_from_date').value;
var credit_end_date=document.getElementById('credit_end_date').value;
var credit_username=document.getElementById('credit_username').value;

var balance_type=document.getElementById('balance_type').value;
var username=document.getElementById('username').value;
var from_date=document.getElementById('from_date').value;
var to_date=document.getElementById('to_date').value;
var url=document.getElementById('url').value;

 window.location.href=url+'/'+route+'?type='+type+'&from_date='+from_date+'&to_date='+to_date+'&username='+username+'&balance_type='+balance_type+'&credit_from_date='+credit_from_date+'&credit_end_date='+credit_end_date+'&credit_username='+credit_username;

    }

    
function  searchbdetlist(value,typevalue=null){

var checkedRadioButton = document.querySelector('input[name="type"]:checked');
if (checkedRadioButton !== null) {
  var typevalue = checkedRadioButton.value;
} else {
  var typevalue = '';
}

var sports_button = document.querySelector('input[name="sports_name"]:checked');
if (sports_button !== null) {
  var sportsname = sports_button.value;
} else {
  var sportsname = '';
}

var bet_list=document.getElementById('bet_list').value;

  //alert(typevalue);
  $.ajax({
    type: 'GET',
    url: '{{route("bet-list")}}',
    data:{sports_name:sportsname,type:typevalue,bet_list:bet_list},
    success: function (data) {
          //alert(data);
          document.getElementById("bet_list_id").innerHTML=data;         
          },
          error: function (error) {
              console.error('Error fetching admin details:', error);
          }
      });
}




function downloadbetlist(route){

var sports_button = document.querySelector('input[name="sports_name"]:checked');
if (sports_button !== null) {
  var sports_name = sports_button.value;
}else{
  var sports_name = '';
}

var checkedRadioButton = document.querySelector('input[name="type"]:checked');
if (checkedRadioButton !== null) {
  var type = checkedRadioButton.value;
}else{
  var type = '';
}

var from_date=document.getElementById('from_date').value;
var to_date=document.getElementById('to_date').value;
var bet_list=document.getElementById('bet_list').value;
var url=document.getElementById('url').value;

window.location.href=url+'/'+route+'?from_date='+from_date+'&to_date='+to_date+'&bet_list='+bet_list+'&sports_name='+sports_name+'&type='+type;
}

function changebetlisttype(typevalue){
document.getElementById('bet_list').value=typevalue
}

function updatebetlimit(id){
   // alert(id);

var sports_bet=document.getElementById('sports_bet'+id).value;
var casino_bet=document.getElementById('casino_bet'+id).value;

    $.ajax({
    type: 'GET',
    url: '{{route("bet-limit-update")}}',
    data:{sports_bet:sports_bet,casino_bet:casino_bet,id:id},
    success: function (data) {
          //alert(data);
          document.getElementById("message_bet_limit").innerHTML='<div class="flash-message p6">Successfully Update</div>';        
          location.reload(); 
          },
          error: function (error) {
              console.error('Error fetching admin details:', error);
          }
      });
}

  function changemarketsettings(){
      if (document.getElementById('match_name').value !== null) {
        var match_name = document.getElementById('match_name').value;
      } else {
        var match_name = '';
      }

      if (document.getElementById('series_name').value !== null) {
        var series_name = document.getElementById('series_name').value;
      } else {
        var series_name = '';
      }


      if (document.getElementById('sports_name').value !== null) {
        var sports_name = document.getElementById('sports_name').value;
      } else {
        var sports_name = '';
      }


      $.ajax({
        type: 'GET',
        url: '{{url()->current()}}',
        data: {
          sports_name: sports_name,
          series_name: series_name,
          match_name: match_name,
        },
        success: function(data) {
          //alert(data);
          document.getElementById("market_settings_id").innerHTML = data;
          //   location.reload(); 
        },
        error: function(error) {
          console.error('Error fetching admin details:', error);
        }
      });
      

      
  }

  </script>
