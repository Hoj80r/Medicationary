@include('layouts.admin.header')
@include('layouts.admin.sidebar')

    @yield('content')

@include('layouts.admin.footer')
@push('head')
<script src="{{ asset('js/script-admin.js')}}"></script>
@endpush
