
        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="{{asset('dashboard/assets/js/oneui.core.min.js')}}"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->
        <script src="{{ asset('dashboard/assets/js/oneui.app.min.js') }}"></script>

        <!-- start datatables JS Plugins -->
            <!-- Page JS Plugins -->
            <script src="{{asset('dashboard/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

            <!-- Page JS Code -->
            <script src="{{asset('dashboard/assets/js/pages/be_tables_datatables.min.js')}}"></script>
        <!-- END datatables JS Plugins -->

        <!-- Page JS Plugins -->
        <script src="{{asset('dashboard/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('dashboard/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{asset('dashboard/assets/js/pages/be_pages_dashboard.min.js')}}"></script>


        <!-- Custom Script Code -->
        @yield('scripts')


        <!-- Page JS Helpers (jQuery Sparkline Plugins) -->
        <script>
            jQuery(function () {
                One.helpers(['sparkline', 'table-tools-checkable', 'table-tools-sections', 'easy-pie-chart', 'datepicker', 'flatpickr', 'summernote', 'magnific-popup']);
            });
        </script>
    </body>
</html>
