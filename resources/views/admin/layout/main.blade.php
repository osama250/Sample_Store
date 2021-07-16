@include('admin.components.head');
@include('admin.components.navbar');
@include('admin.components.sldebar');

<div class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


           @yield('content')

    </div>
</div>

@include('admin.components.footer');
