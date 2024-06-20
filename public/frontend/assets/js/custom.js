const loaderEl = document.getElementsByClassName('fullpage-loader')[0];
document.addEventListener('readystatechange', (event) => {
	// const readyState = "interactive";
	const readyState = "complete";
    
	if(document.readyState == readyState) {
		// when document ready add lass to fadeout loader
		loaderEl.classList.add('fullpage-loader--invisible');
		
		// when loader is invisible remove it from the DOM
		setTimeout(()=>{
			loaderEl.parentNode.removeChild(loaderEl);
		}, 1000)
	}
});
/*  home pages time and clock code  */
function updateTime() {
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, '0');
  const minutes = now.getMinutes().toString().padStart(2, '0');
  const seconds = now.getSeconds().toString().padStart(2, '0');
  document.getElementById('time').textContent = `${hours}:${minutes}:${seconds}`;
}
setInterval(updateTime, 1000);
function updateTime() {
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, '0');
  const minutes = now.getMinutes().toString().padStart(2, '0');
  const seconds = now.getSeconds().toString().padStart(2, '0');
  const month = (now.getMonth() + 1).toString().padStart(2, '0');
  const day = now.getDate().toString().padStart(2, '0');
  const year = now.getFullYear();

  document.getElementById('time').textContent = `${hours}:${minutes}:${seconds}`;
  document.getElementById('date').textContent = `${month}/${day}/${year}`;
}
setInterval(updateTime, 1000);


$(document).ready(function(){
  $('#switch').change(function(){
      $('#hiddenSection').slideToggle();
  });

  $('.edit-save-btn').click(function(){
      $('.one-click-bet, .edit-section').toggleClass('hidden');
      $(this).text($(this).text() === 'Edit' ? 'Save' : 'Edit');
  });

  $('.save-btn').click(function(){
      var values = $('.edit-input').map(function() {
          return $(this).val();
      }).get();
      $('.one-click-bet .selected').text(values[0]);
      $('.one-click-bet button:nth-child(2)').text(values[1]);
      $('.one-click-bet button:nth-child(3)').text(values[2]);
      $('.one-click-bet, .edit-section').removeClass('hidden');
      $('.edit-section').addClass('hidden');
      $('.edit-save-btn').text('Edit');
  });
});


$(document).ready(function() {
  $("#editButton").click(function() {
    $(".edit-stakes-buttons").show();
    $(".input-table-value").hide();
  });

  $("#cancelButton").click(function() {
    $(".edit-stakes-buttons").hide();
    $(".input-table-value").show();
  });

  $("#saveButton").click(function() {
    // Perform your save operation here
    // For demonstration purposes, just show the success message
    $("#successMessage").show();
  });
});

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


// document.addEventListener("DOMContentLoaded", function() {
//   const menuLinks = document.querySelectorAll('.menu-lvl-0 li a');
//   const subMenu = document.querySelector('.menu-prev.sport-type-Cricket');

//   menuLinks.forEach(link => {
//     link.addEventListener('click', function(event) {
//       event.preventDefault();
//       // Hide all menu items
//       const allMenus = document.querySelectorAll('.menu-column');
//       allMenus.forEach(menu => {
//         menu.style.display = 'none';
//       });
      
//       // Show the appropriate submenu
//       subMenu.style.display = 'block';
//     });
//   });

//   const backButton = document.querySelector('.link-lvl-prev');
//   backButton.addEventListener('click', function(event) {
//     event.preventDefault();
//     // Hide the submenu when the back button is clicked
//     subMenu.style.display = 'none';
    
//     // Show the main menu again
//     const mainMenu = document.querySelector('.menu-lvl-0');
//     mainMenu.style.display = 'block';
//   });
// });


    // Get the current date in the format YYYY-MM-DD
    const today = new Date().toISOString().split('T')[0];

    // Set the input fields' values to the current date
    document.getElementById('fromDatepicker').value = today;
    document.getElementById('toDatepicker').value = today;

/*  My Bets tab code =======================*/
var pastItem = document.getElementById('pastItem');
var selectionMU = document.getElementById('selectionMU');
var currentItem = document.getElementById('currentItem');
var unmatchedItem = document.getElementById('unmatchedItem');
var matchedItem = document.getElementById('matchedItem');
var currentTable = document.querySelector('.cuttent_table');
var pastTable = document.querySelector('.past_table');
var unmatchedTable = document.querySelector('.Unmatched');

pastItem.addEventListener('click', function() {
  selectionMU.style.display = 'none';
  currentTable.style.display = 'none';
  pastTable.style.display = 'block';
  pastItem.classList.add('selected');
  currentItem.classList.remove('selected');
  unmatchedItem.classList.remove('selected');
  matchedItem.classList.remove('selected');
});

currentItem.addEventListener('click', function() {
  selectionMU.style.display = 'block';
  pastTable.style.display = 'none';
  currentTable.style.display = 'block';
  currentItem.classList.add('selected');
  pastItem.classList.remove('selected');
  unmatchedItem.classList.remove('selected');
  matchedItem.classList.remove('selected');
});

unmatchedItem.addEventListener('click', function() {
  selectionMU.style.display = 'block';
  currentTable.style.display = 'none';
  unmatchedTable.style.display = 'block';
  unmatchedItem.classList.add('selected');
  pastItem.classList.remove('selected');
  matchedItem.classList.remove('selected');
  currentItem.classList.remove('selected');
});

matchedItem.addEventListener('click', function() {
  selectionMU.style.display = 'block';
  unmatchedTable.style.display = 'none';
  currentTable.style.display = 'block';
  matchedItem.classList.add('selected');
  pastItem.classList.remove('selected');
  unmatchedItem.classList.remove('selected');
  currentItem.classList.remove('selected');
});







