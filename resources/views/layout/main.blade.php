@include('components.head')


    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('components.header')
    @include('components.slider')
    @include('components.popular_category')


          @yield('content')


    @include('components.footer')
 </body>
</html>
