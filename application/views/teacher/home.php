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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" >Административная панель</a>
            </div>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/"><i class="fa fa-fw fa-dashboard"></i>Главная</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i>Опция 2</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i>Опция 3</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Опция 4</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-desktop"></i> Опция 5</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> Опция 6</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Главная страница <small> Добавление новости</small>
                        </h1>
						<h3>
                            Список новостей
                        </h3>
						
                        <ol class="breadcrumb">
						<?php foreach($posts as $post):?>
                            <li class="active">
                               <?=$post['title']?>
							   <a style="float:right;"href="admin/delete_post?id=<?=$post['id']?>">Удалить новость</a>
                            </li>
							<br>
						<?php endforeach;?>
                        </ol>
					</div>
					<form action="admin/add_post" method="post">
					<div class="col-md-12">
                        <div class="input-group">
						<span class="input-group-addon" id="basic-addon1">!</span>
						<input name="title" type="text" class="form-control" placeholder="Заголовок" aria-describedby="basic-addon1">
					</div>
						<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"></span>
						<textarea name="description" type="text" class="form-control" placeholder="Текст новости" aria-describedby="basic-addon1"> </textarea>
					</div>
					<br>
					<button style="float:right;"type="button" class="btn btn-success">Добавить новость</button>
					
					</div>
					</form>
					
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
