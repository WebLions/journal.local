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
                <a class="navbar-brand">Административная панель</a>
            </div>
            <!-- Top Menu Items -->
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/">Главная</a>
                    </li>
                    <li>
                        <a href="#">Группы</a>
                    </li>
                    <li>
                        <a href="#">Преподаватели</a>
                    </li>
                    <li>
                        <a href="#">Дисциплины</a>
                    </li>
                    <li>
                        <a href="#">Пользователи</a>
                    </li>
					<li>
                        <a href="#">Учебный план</a>
                    </li>
					<li>
                        <a href="#">Сервисные операции</a>
                    </li>
                    <li>
                        <a href="#">Выход</a>
                    </li>
                   
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Главная страница 
                        </h1>
						
						
						
  <ul class="nav nav-tabs">
	<li><a data-toggle="tab" href="#teachers">Преподаватели</a></li>
    <li><a data-toggle="tab" href="#posts">Новости</a></li>
    <li><a data-toggle="tab" href="#students">Студенты</a></li>
    <li><a data-toggle="tab" href="#subjects">Дисциплины</a></li>
  </ul>

  <div class="tab-content">
    <div id="teachers" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						<h3>Список преподавателей </h3>
						<br>
						<table width = "100%">
							<tr>
								<th style = "width: 50%">ФИО</th>
								<th style = "width: 30%">Логин</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
                        
						<?php foreach($teacher as $teachers):?>
						
							<tr>
								
									<td><?=$teachers['fio']?></td>
									<td></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_teacher?id=<?=$teachers['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="edit_post?id=<?=$teachers['id']?>"></a>
				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>				
					
    </div>
    <div id="posts" class="tab-pane fade">
      <h3>
                            Список новостей
                        </h3>
						<table width = "100%">
							<tr>
								<th style = "width: 50%">Наименование</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
							
						<?php foreach($posts as $post):?>
						
							<tr>
								
									<td><?=$post['title']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_post?id=<?=$post['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="change_post?id=<?=$post['id']?>"></a>
										<a class="glyphicon glyphicon-eye-open btn btn-info btn-xs" style="float:right;" href="preview_post?id=<?=$post['id']?>"></a>
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
						</table>
						
					
    </div>
    <div id="students" class="tab-pane fade">
      <h3>
                            Список студентов
                        </h3>
						<table width = "100%">
							<tr>
								<th style = "width: 50%">ФИО</th>
								<th style = "width: 30%">Пинкод</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
							
						<?php foreach($student as $students):?>
						
							<tr>
								
									<td><?=$students['fio']?></td>
									<td></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_student?id=<?=$students['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="edit_student?id=<?=$students['id']?>"></a>
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
						</table>
    </div>
    <div id="subjects" class="tab-pane fade">
      <h3>
                            Список дисциплин
                        </h3>
						<table width = "100%">
							<tr>
								<th style = "width: 80%">Название</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
							
						<?php foreach($subject as $subjects):?>
						
							<tr>
								
									<td><?=$subjects['name']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_subjects?id=<?=$subjects['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="change_subjects?id=<?=$subjects['id']?>"></a>
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
						</table>
    </div>
  </div>
				
						
						
					</div>
					
					
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
