$(document).ready(function() {
    // Check initial width on page load
    checkWidth();

    // Check width on window resize
    $(window).resize(function() {
      checkWidth();
    });

    function checkWidth() {
      var $customResponsive = $('.customResponsive');
      var windowWidth = $(window).width();

      // Add or remove the class based on the window width
      if (windowWidth <= 991) {
        $customResponsive.addClass('mobile-responsive');
      } else {
        $customResponsive.removeClass('mobile-responsive');
      }
    }
  });



var scrollbarExample = new PerfectScrollbar(".perfect-scrollbar-example");

// Wait for the DOM to be ready format "YYYY-MM-DD
document.addEventListener("DOMContentLoaded", function () {
  var startDateInput = document.getElementById("start-date");
  var endDateInput = document.getElementById("end-date");

  // Get today's date in the format "YYYY-MM-DD"
  var today = new Date().toISOString().split("T")[0];

  // Set initial values for date inputs
  startDateInput.value = today;
  endDateInput.value = today;

  // Initialize date picker for start date
  flatpickr(startDateInput, {
    dateFormat: "Y-m-d",
    onChange: function (selectedDates, dateStr) {
      endDatePicker.set("minDate", dateStr);
    },
  });

  // Initialize date picker for end date
  var endDatePicker = flatpickr(endDateInput, {
    dateFormat: "Y-m-d",
    onChange: function (selectedDates, dateStr) {
      startDatePicker.set("maxDate", dateStr);
    },
  });
});

// Wait for the DOM to be ready format "YYYY-MM-DD
document.addEventListener("DOMContentLoaded", function () {
 var startDateInput1 = document.getElementById("start-date-Betting");
  var endDateInput1 = document.getElementById("end-date-Betting");

  // Get today's date in the format "YYYY-MM-DD"
  var today = new Date().toISOString().split("T")[0];

  // Set initial values for date inputs
  startDateInput1.value = today;
  endDateInput1.value = today;

  // Initialize date picker for start date
  flatpickr(startDateInput1, {
    dateFormat: "Y-m-d",
    onChange: function (selectedDates, dateStr) {
      endDatePicker1.set("minDate", dateStr);
    },
  });

  // Initialize date picker for end date
  var endDatePicker1 = flatpickr(endDateInput1, {
    dateFormat: "Y-m-d",
    onChange: function (selectedDates, dateStr) {
      startDatePicker1.set("maxDate", dateStr);
    },
  });
});

$(document).ready(function() {
    $("#toggleFilterSection").click(function() {
      $("#filterSection").toggle();
    });
  });


/*===================== Deposit / Withdraw	Deposit / Withdraw	===========*/
var dBtn = document.getElementById("dBtn");
var wBtn = document.getElementById("wBtn");

dBtn.addEventListener("click", function () {
  var btnListDW = document.querySelector(".btn_list-DW");
  btnListDW.classList.add("dBtn-select");
  btnListDW.classList.remove("wBtn-select");
});

wBtn.addEventListener("click", function () {
  var btnListDW = document.querySelector(".btn_list-DW");
  btnListDW.classList.add("wBtn-select");
  btnListDW.classList.remove("dBtn-select");
});

var wBtn = document.getElementById("wBtn");
var fullBtn = document.getElementById("fullBtn");

wBtn.addEventListener("click", function () {
  // Check if the fullBtn element has the 'disable' class
  if (fullBtn.classList.contains("disable")) {
    // Remove the 'disable' class
    fullBtn.classList.remove("disable");
  }
});

/*===================== Deposit / Withdraw end	Deposit / Withdraw	===========*/

/*===================== Credit Reference	Credit Reference	===========*/
var editBtn = document.getElementById("editCreditReferenceBtn");
var cancelBtn = document.getElementById("cancelCreditReferenceBtn");
var userCreditReference = document.getElementById("userCreditReference");
var editCreditReference = document.getElementById("editCreditReference");

// Edit button click event
editBtn.addEventListener("click", function () {
  // Hide userCreditReference and show editCreditReference
  userCreditReference.style.display = "none";
  editCreditReference.style.display = "inline-block";
  // Show cancel button and hide edit button
  cancelBtn.style.display = "inline-block";
  editBtn.style.display = "none";
});

// Cancel button click event
cancelBtn.addEventListener("click", function () {
  // Show userCreditReference and hide editCreditReference
  userCreditReference.style.display = "inline-block";
  editCreditReference.style.display = "none";
  // Show edit button and hide cancel button
  editBtn.style.display = "inline-block";
  cancelBtn.style.display = "none";
});
/*===================== Credit Reference end	Credit Reference	===========*/


 
