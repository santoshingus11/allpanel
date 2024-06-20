
<div class="modal-content Change-Password">
    <div class="modal-header pb-0">
      <h4 class="modal-title  text-white" id="staticBackdropLabel">Access</h4>
      <button type="button" class="btn-close extra-hight" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="userdatadisplay">
            
        </div>
    </div>
</div>


<script>
    function toggleVisibility(sectionId) {
       var icon = document.querySelector('#' + sectionId + ' .toggle-icon');
       var section = document.getElementById(sectionId + '_content');

       if (section.style.display === "none") {
           section.style.display = "block";
           icon.textContent = "▼"; // Change icon to indicate collapse
       } else {
           section.style.display = "none";
           icon.textContent = "▶"; // Change icon to indicate expand
       }
   }
</script>
