<!DOCTYPE html>
<html lang="en" class="custom-background"> <!-- Apply custom-background class here -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Include Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            /* Remove background-color property */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden; /* Prevents horizontal scrolling */
        }
        .custom-background {
            /* Keep your radial-gradient background style */
            background-image: radial-gradient(circle, rgba(63, 61, 86, 0.5), rgba(10, 0, 17, 0.7));
        }
        .navbar-custom {
            background-color: transparent; /* Transparent background */
        }
        .logo {
            transition: transform 0.3s ease; /* Smooth scale transition */
        }
        .logo:hover {
            transform: scale(1.2); /* Scale up on hover */
        }
        .navbar-text {
            color: white;
        }
        .main-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Minimum height to fill the viewport */
            text-align: center;
            opacity: 0;
            animation: fadeIn 2s forwards; /* Fade in animation */
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        h1, h2, p {
            transform: translateY(20px);
            opacity: 0;
            animation: slideIn 1s forwards; /* Slide in animation */
        }
        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .text-animation:hover {
            transform: translateY(-5px); /* Move text up slightly on hover */
            transition: transform 0.3s ease; /* Smooth transition */
        }
        .fade-in {
            opacity: 0;
            transition: opacity 2s ease-in;
        }
        .fade-in.visible {
            opacity: 1;
        }
        /* Add a scrollbar to the body for smaller screens */
        @media (max-width: 768px) {
            body {
                overflow-y: auto;
            }
        }
    </style>
</head>
<body class="text-white custom-background"> <!-- Apply custom-background class here -->

<nav class="relative px-4 py-4 flex justify-between items-center navbar-custom bg-transparent">
    <a class="text-3xl font-bold leading-none flex items-center" href="{{url('home')}}">
        <img src="{{ asset('images/hazel-logo.png') }}" alt="New Logo" class="h-20">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-white p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-sm navbar-text hover:text-gray-500 " href="{{url('home')}}">Home</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-blue-600 font-bold" href="#about">About Me</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm navbar-text hover:text-gray-500" href="{{url('services')}}">Services</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm navbar-text hover:text-gray-500" href="{{url('portfolio')}}">Portfolio</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm navbar-text hover:text-gray-500" href="{{url('contact')}}">Contact Me</a></li>
    </ul>
    <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="{{url('/case-study')}}">Case Study</a>
</nav>

<main>
    {{$slot}}
</main>

<!-- JavaScript for burger menus and smooth scrolling -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Burger menus
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // Smooth scrolling for internal links
        const aboutLink = document.querySelector('a[href="#about"]');
        if (aboutLink) {
            aboutLink.addEventListener('click', function(e) {
                e.preventDefault();
                const targetSection = document.getElementById('about');
                targetSection.scrollIntoView({ behavior: 'smooth' });
            });
        }
    });

    // Fade-in effect for the image
    window.addEventListener('load', function() {
        const fadeInElement = document.querySelector('.fade-in');
        if (fadeInElement) {
            fadeInElement.classList.add('visible');
        }
    });
</script>

</body>
</html>
