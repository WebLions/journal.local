
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Группы
                        </h1>
						<button style="float:right;" type="submit" class="btn btn-success">Добавить студента</button>
						
						
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab"  href="#student_add">Добавление студента</a></li>
		<li><a data-toggle="tab" href="#subject_add">Добавление дисциплины</a></li>
    </ul>					
  

  <div class="tab-content">
    <div id="student_add" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						
						<form action="/admin/edit_group" method="post">
						<div class="col-md-4">
						
						<h3>Данные о студенте</h3>
							
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Фамилия" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Имя" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Отчество" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Дата рождения" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Адресс" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="PIN код" aria-describedby="basic-addon1"> 
							</div>
									
						</div>
						<div class="col-md-4">
						<h3>Данные о матери</h3>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="ФИО" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Сотовый телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Рабочий телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						</div>
						<div class="col-md-4">
						<h3>Данные о матери</h3>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="ФИО" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Сотовый телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Рабочий телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						</div>
					</form>
					
			</div>
			
		</div>							
	</div>
	<div id="subject_add" class="tab-pane fade">
		<div class = "row">
			<div class = "col-md-12">
			<br>
				<form action="/admin/edit_group" method="post">
						<div class="col-md-12">
												
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Дисциплина" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Преподаватель" aria-describedby="basic-addon1"> 
							</div>
						<br>
						
						<button style="float:right;" type="submit" class="btn btn-success">Добавить новость</button>			
						</div>
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