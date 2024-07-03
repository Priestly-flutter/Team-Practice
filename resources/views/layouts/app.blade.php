<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - My Application</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>My Application</h1>
        </header>

        <nav>
            <!-- Navigation links -->
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
