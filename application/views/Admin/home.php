<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Электронный журнал</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

   
<div class="container">
	<div class="row">
		<div class="col-md-12 alert alert-success">
		
			<span>Header</span>
			
		</div>
			
	</div>
	
	<div class="row box first">  
		<div class="col-md-8 content-border-right ">
				
				
			<?php foreach($posts as $post):?>
				<div class="row">
					 <div class="col-md-12">		
						<h3><?php echo $post['title'];?></h3>
						<br>
						<p><?php echo $post['description'];?></p>
						<br>
						<span class="date-float"><?php echo $post['date'];?></span>
					</div>
				</div>
				<hr>
				<?php endforeach;?>
									
				
		
		</div>
		
		<div class="col-md-4">
		
		
			<div class="row">
			
				<div class="col-md-12">
				
				<form action="user/login" method="post">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">!</span>
						<input name="login" type="text" class="form-control" placeholder="Логин" aria-describedby="basic-addon1">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">!</span>
						<input name="login" type="text" class="form-control" placeholder="Пароль" aria-describedby="basic-addon1">
					</div>
					<br>
					<button  style="float:right;" type="submit" class="btn btn-success">Войти</button>
				
				</div>
			</form>
			
			</div>
			<hr>
			<div class="row">
			
				<div class="col-md-12">
				
				<div class="alert alert-success">
				<span>Последнее обновление сайта:</span><br>
				<span style="float:right;">09.11.2015</span><br></div>
					
				
				</div>
			
			</div>
		
		</div>
	
	</div>


			
	<div class="row">
        <div class="col-sm-12 alert alert-info">
		
            <span>Free MEME</span>
        
		</div>
    </div>
			
</div><!--/.container-->
    

           
     

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>