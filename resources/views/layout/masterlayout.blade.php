<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ali Therapy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script> 
    
</head>

<body>

<!-- ================= HEADER ================= -->
<header class="site-header">
    <div class="container">
        <div class="logo">
            <span class="logo-icon">🧠</span>
            <span class="logo-text">Ali Therapy</span>
        </div>

        <nav class="nav">
            <a href="/">Home</a>
            <a href="/therapies">Therapies</a>
            <a href="/therapiest">Therapists</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/Admin">Admin</a>
        </nav>

       <a href="{{ route('book.appointment') }}" class="btn-appointment">
    Book Appointment
</a>
    </div>
</header>

<!-- ================= PAGE CONTENT ================= -->
<main>
    @yield('content')
</main>

<!-- ================= FOOTER ================= -->
<footer class="bg-blue-900 text-white py-8">
    <div class="max-w-6xl mx-auto text-center">
        <p>&copy; {{ date('Y') }} Ali Therapy. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
