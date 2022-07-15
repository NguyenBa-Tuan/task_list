<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>@yield('Title')</title>

            <!-- CSS And JavaScript -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Navbar Contents -->
                    @if (Auth::check())
                        <a href="{{route('login.logout')}}">Đăng xuất</a>
                    @else
                        <a href="{{route('login.index')}}">Đăng nhập</a>
                        <a href="{{route('register.index')}}">Đăng Ký</a>
                    @endif
                </nav>
            </div>

            @yield('content')
        </body>
    </html>