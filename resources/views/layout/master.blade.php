<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Template Using Skeleton</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

</head>
<body>
<!-- Primary Page Layout -->

<header id="header" class="sixteen columns module">
    <div class="bg transition"></div>
    <div id="logo"><span>Gabriel Rose</span></div>
    <nav>
        <ul class="eight columns">
            <li class="scroll transition"><a href="#">Home</a></li>
            <li class="scroll transition"><a href="#work">Work</a></li>
            <li class="scroll transition"><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<br class="clear"/>

{{-- Page inhoud --}}
@yield('content')

{{-- scripts --}}
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
@yield('scripts')

</body>
</html>
