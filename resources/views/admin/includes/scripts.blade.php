<!--   Core JS Files   -->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/js/perfect-scrollbar.jquery.min.js') }}"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script href="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="{{ asset('backend/assets/js/arrive.min.js') }}"></script>

<!-- Forms Validations Plugin -->
<script src="{{ asset('backend/assets/js/jquery.validate.min.js') }}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('backend/assets/js/moment.min.js') }}"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{ asset('backend/assets/js/chartist.min.js') }}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('backend/assets/js/jquery.bootstrap-wizard.js') }}"></script>

<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ asset('backend/assets/js/bootstrap-notify.js') }}"></script>

<!--   Sharrre Library    -->
<script src="{{ asset('backend/assets/js/jquery.sharrre.js') }}"></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('backend/assets/js/bootstrap-datetimepicker.js') }}"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('backend/assets/js/jquery-jvectormap.js') }}"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="{{ asset('backend/assets/js/nouislider.min.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1_8C5Xz9RpEeJSaJ3E_DeBv8i7j_p6Aw"></script>

<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('backend/assets/js/jquery.select-bootstrap.js') }}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{ asset('backend/assets/js/jquery.datatables.js') }}"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="{{ asset('backend/assets/js/sweetalert2.js') }}"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('backend/assets/js/jasny-bootstrap.min.js') }}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('backend/assets/js/fullcalendar.min.js') }}"></script>

<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('backend/assets/js/jquery.tagsinput.js') }}"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{ asset('backend/assets/js/material-dashboard.js') }}"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('backend/assets/js/demo.js') }}"></script>
@include('admin.includes.notifications')
<script type="text/javascript">
    $(document).ready(function(){

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
