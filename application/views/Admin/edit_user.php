
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Пользователи
                        </h1>
						
						
						
  

 <div class="tab-content">
    <div id="user" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-10">
			<br>
			<form action = "edit_user?id=<?=$user[0]['id']?>" method = "post">
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Фамилия</span>
								<input name="surname" type="text" value="<?=$user[0]['surname']?>" class="form-control"  aria-describedby="basic-addon1" required> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Имя</span>
								<input name="name" type="text" value="<?=$user[0]['name']?>" class="form-control"  aria-describedby="basic-addon1" required> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Отчество</span>
								<input name="subname" type="text" value="<?=$user[0]['subname']?>" class="form-control"  aria-describedby="basic-addon1" required> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Логин</span>
								<input name="login" type="text" value="<?=$user[0]['login']?>" class="form-control"  aria-describedby="basic-addon1" required> 
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
						<a style="float:right;" href = "users" class="btn btn-success">Вернуться</a>	
						<button style="float:right;" type="submit" class="btn btn-success">Сохранить</button>
					</form>
			</div>
		</div>						
	</div>
  </div>
		</div>
					
					
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->