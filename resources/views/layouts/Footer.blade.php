 <!--begin::Global Javascript Bundle(mandatory for all pages)-->
 <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
 <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
 <!--end::Global Javascript Bundle-->
 <!--begin::Custom Javascript(used for this page only)-->
 <script src="{{ asset('backend/assets/js/custom/authentication/sign-in/general.js') }}"></script>
 @yield('jsurl')


 @yield('js')

 @if($errors->any())
 @foreach($errors->all() as $error)
 <script>
     toastr.error('{{ $error }}');
 </script>
 @endforeach
 @endif