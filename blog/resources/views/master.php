<!DOCTYPE html>
<html ng-app="blogApp">
<head>
    <title>Laravel</title>
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.js"></script> <!-- load angular -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script src="js/service/blogService.js"></script>
    <script src="js/controller/mainCtrl.js"></script>
    <script src="js/main.js"></script>
</head>
<body class="container" >



<!-- HEADER AND NAVBAR -->
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Angular Routing Example</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#about"><i class="fa fa-shield"></i> About</a></li>
                <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="col-md-8 col-md-offset-2">

    <!-- angular templating -->
    <!-- this is where content will be injected -->
    <div ng-view></div>

</div>
</body>
</html>