  <!-- General JS Scripts -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  
      <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Izi toast -->
  <script src="{{ asset('js/iziToast.min.js') }}"></script>

  <!-- Sweet Alert -->
  <script src="{{ asset('js/sweetalert2.all.js') }}"></script>

  <!-- Datatables -->
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('js/scripts.js') }}"></script>

  @stack('ajax')

  <!-- Select2 -->
	@stack('script.select2')
