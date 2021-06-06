<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@0;900&display=swap" rel="stylesheet">
    <title>Dailydaily</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .navbar .nav-link {
            color: black !important;
        }

        .navbar .nav-link.active span {
            font-weight: bold;
            border-bottom: 3px #00C46F solid;
        }

        .title-hero {
            z-index: 99;
        }

        .fs-30 {
            font-size: 30px;
        }

        .fs-15 {
            font-size: 15px;
        }

        .fs-45 {
            font-size: 45px;
        }

        .continue-button{
            transform : translate(-0,50%);
        }

        .order-services{
            transform : translate(0,-50%)
        }

        .hero {
            background-image: url("img/hero.jpg");
            height: 1013px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
         .vertical-line{
        display: inline-block;
        border-left: 3px solid #ccc;
   
        height: 125px;
    }

        .sub-hero {
            margin: 0 0 15em 5em;
        }

        .sub-hero span {
            color: #00C46F
        }

        .icon-order .card {
            width: 118px;
            height: 118px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }


    </style>
</head>

<body>
    @include("layouts.components.navbar")

    @yield("content")
    @include("layouts.components.hero")
    @include("layouts.components.order-services")
    @include("layouts.components.our-services")
    @include("layouts.components.footer")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
