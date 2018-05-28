<!doctype html>
<html lang="en">
    @include('partials/_head')
    <body>
        @include('partials/_nav')

        <div class="container">
            @include('partials._messages')
            <br>
            @yield('content')        

        </div> <!-- end of container -->
            
        @include('partials/_footer')
        @include('partials._scripts')

    </body>
</html>