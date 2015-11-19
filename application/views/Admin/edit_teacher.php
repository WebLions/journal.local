
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Редактирование преподавателя
                        </h1>
						
						

  <div class="tab-content">
    <div id="groups" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-10">
			<br>
			<form action = "/admin/edit_teacher?id=<?=$teacher[0]['id']?>" method = "post">
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Фамилия</span>
								<input name="surname" type="text" value="<?=$teacher[0]['surname']?>" class="form-control"  aria-describedby="basic-addon1" required> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Имя</span>
								<input name="name" type="text" value="<?=$teacher[0]['name']?>" class="form-control"  aria-describedby="basic-addon1" required> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Отчество</span>
								<input name="subname" type="text" value="<?=$teacher[0]['subname']?>" class="form-control"  aria-describedby="basic-addon1" required> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Логин</span>
								<input name="login" type="text" value="<?=$teacher[0]['login']?>" class="form-control"  aria-describedby="basic-addon1" required> 
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