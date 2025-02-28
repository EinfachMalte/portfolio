<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Sidebar Menu</title>
</head>

<body class="collapsed">
<aside>
    <button class="menu-btn fa fa-chevron-left"></button>
    <a href="/" class="logo-wrapper">
        <span class="fa-brands fa-uikit"></span>
        <span class="brand-name">Malte Brussmann</span>
    </a>
    <div class="separator"></div>
    <ul class="menu-items">
        <li>
            <a href="{{ route('index') }}">
                <span class="icon fa fa-house"></span>
                <span class="item-name">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>
        <li>
            <a href="{{ route('about_me') }}">
                <span class="icon fa fa-user"></span>
                <span class="item-name">About me</span>
            </a>
            <span class="tooltip">Account</span>
        </li>
        <li>
            <a href="{{ route('projects') }}">
                <span class="icon fa fa-list-check"></span>
                <span class="item-name">Projects</span>
            </a>
            <span class="tooltip">Projects</span>
        </li>
        <li>
            <a href="{{ route('contact') }}">
                <span class="icon fa fa-comment-dots"></span>
                <span class="item-name">Contact</span>
            </a>
            <span class="tooltip">Contact</span>
        </li>
    </ul>
</aside>

<main>
    @yield('content')
</main>
<script src="js/jquery.min.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/controller.js"></script>
<script src="js/main.js"></script>
</body>

</html>
