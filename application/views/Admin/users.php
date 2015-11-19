
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Пользователи
                        </h1>
						
						
						
  <ul class="nav nav-tabs">
	<li class = "active"><a data-toggle="tab" href="#user">Список список пользователей</a></li>
	<li><a data-toggle="tab" href="#add_user">Добавление пользователя</a></li>    
  </ul>

  <div class="tab-content">
    <div id="user" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						
						<br>
						<table width = "100%">
							<tr>
								<th style = "width: 20%">ФИО</th>
								<th style = "width: 20%">Логин</th>
							</tr>
                        
						<?php foreach($users as $user):?>
						
							<tr>
								
									<td><?=$user['surname'].' '.$user['subname'].' '.$user['name']?></td>
									<td><?=$user['login']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_user?id=<?=$user['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="edit_user?id=<?=$user['id']?>"></a>				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>							
	</div>
	 <div id="add_user" class="tab-pane fade ">
		<div class = "row">
			<div class = "col-md-10">
			<br>
			<form action = "add_user" method = "post">
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Фамилия</span>
								<input name="surname" type="text" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Имя</span>
								<input name="name" type="text" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Отчество</span>
								<input name="subname" type="text" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Логин</span>
								<input name="login" type="text" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Пароль</span>
								<input name="password" type="password" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Пароль ещё раз</span>
								<input name="repassword" type="password" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
							<select name="access">
								<option selected value="1">Admin</option>
								<option>#</option>
								<option>@</option>
							</select>
						<button style="float:right;" type="submit" class="btn btn-success">Добавить пользователя</button>
					</form>
			</div>
		</div>
	</div>
					
					
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->