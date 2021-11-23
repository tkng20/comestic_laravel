<!-----------------------KIT_TEMPLATE------------------------->
<!-- Required Js -->
<script src="{{ asset('backend/Kit_Template/assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('backend/Kit_Template/assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/Kit_Template/assets/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('backend/Kit_Template/assets/js/pcoded.min.js') }}"></script>
<!-- Apex Chart -->
<script src="{{ asset('backend/Kit_Template/assets/js/plugins/apexcharts.min.js') }}"></script>

<!-- custom-chart js -->
<script src="{{ asset('backend/Kit_Template/assets/js/pages/dashboard-sale.js') }}"></script>


<!-----------------------GM_TEMPLATE------------------------->
<!-- jQuery -->
<script src="{{ asset('backend/GM_Template/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/GM_Template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('backend/GM_Template/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('backend/GM_Template/vendors/nprogress/nprogress.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('backend/GM_Template/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('backend/GM_Template/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
</script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}">
</script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}">
</script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}">
</script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
</script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}">
</script>
<script src="{{ asset('backend/GM_Template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}">
</script>
<script src="{{ asset('backend/GM_Template/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('backend/GM_Template/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/GM_Template/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
<!-------------------------Switch Button Bootstrap------------------------->
{{-- <script src="{{ asset('backend/bootstrap-switch-button/src/bootstrap-switch-button.js') }}"></script> --}}
<script src="{{ asset('backend/bootstrap4-toggle/js/bootstrap4-toggle.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('backend/GM_Template/build/js/custom.min.js') }}"></script>

<!-------------------------Summernote------------------------->
@yield('scripts')


<!-------------------------Alert------------------------->
<script>
    setTimeout(function() {
        $('#alert').slideUp();
    }, 2000);
</script>
