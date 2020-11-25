<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.includes.single.head')
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                @yield('login')
            </div>
            <div id="layoutAuthentication_footer">
                @include('admin.includes.single.footer')
            </div>
        </div>
        
    </body>
</html>
