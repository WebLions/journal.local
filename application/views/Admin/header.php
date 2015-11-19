<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Административная панель</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!--Date picker -->
	
	<link href="/datepicker/css/datepicker.css" rel="stylesheet">
	<script src="/js/jquery.js"></script>
    <script src="/datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/js/js.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Административная панель</a>
            </div>
            <!-- Top Menu Items -->
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/admin/index">Главная</a>
                    </li>
                    <li>
                        <a href="/admin/groups">Группы</a>
                    </li>
                    <li>
                        <a href="/admin/teachers">Преподаватели</a>
                    </li>
                    <li>
                        <a href="/admin/subjects">Дисциплины</a>
                    </li>
                    <li>
                        <a href="/admin/users" class = "active">Пользователи</a>
                    </li>
					<li>
                        <a href="/admin/plans">Учебный план</a>
                    </li>
					<li>
                        <a href="/admin/services">Сервисные операции</a>
                    </li>
                    <li>
                        <a href="/admin/logout">Выход</a>
                    </li>
                   
            </div>
            <!-- /.navbar-collapse -->
        </nav>
