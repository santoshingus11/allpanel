  <!-- core:js -->
  <script src="{{asset('admin/assets/js/core.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('admin/assets/js/flatpickr.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/apexcharts.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('admin/assets/js/feather.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/template.js')}}"></script>
  <script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/select2.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="{{asset('admin/assets/js/dashboard-dark.js')}}"></script>
  <script src="{{asset('admin/assets/js/custom.js')}}"></script>
  <script src="{{asset('admin/assets/js/dropify.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/dropify.js')}}"></script>

  <script>
    /*  home pages time and clock code  */
    function updateTime() {
      const now = new Date();
      const hours = now.getHours().toString().padStart(2, '0');
      const minutes = now.getMinutes().toString().padStart(2, '0');
      const seconds = now.getSeconds().toString().padStart(2, '0');
      const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      const month = monthNames[now.getMonth()];
      const day = now.getDate().toString().padStart(2, '0');
      const year = now.getFullYear();

      document.getElementById('time').textContent = `${hours}:${minutes}:${seconds}`;
      document.getElementById('date').textContent = `${month} ${day}, ${year}`;
    }

    // Update the time and date every second
    setInterval(updateTime, 1000);

    // Initial call to display the time and date immediately
    updateTime();
  </script>
  </body>

  </html>