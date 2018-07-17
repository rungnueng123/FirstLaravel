<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Main styles for this application-->
    <link href="{{url('bb/src/css/style.css')}}" rel="stylesheet">
    <link href="{{url('bb/src/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
</head>
<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{url('bb/js/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('bb/js/bootstrap/assets/javascripts/bootstrap.min.js')}}"></script>
</body>
</html>