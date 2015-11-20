
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Группы
                        </h1>
						
						
						
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab"  href="#student">Список студентов</a></li>		
		<li><a data-toggle="tab"  href="#student_add">Добавление студента</a></li>
		<li><a data-toggle="tab" href="#subjects">Список дисциплин</a></li>
		<li><a data-toggle="tab" href="#subject_add">Добавление дисциплины</a></li>
    </ul>					
  

  <div class="tab-content">
  <div id="student" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
			<table width = "100%">
							<tr>
								<th style = "width: 5%">№</th>
								<th style = "width: 30%">ФИО</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
                        
						<?php foreach($students as $student):?>
						
							<tr>
								
									<td><?=$student['id']?></td>
									<td><?=$student['surname'].' '.$student['name'].' '.$student['subname']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="admin/delete_student?id=<?=$student['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="admin/edit_student?id=<?=$student['id']?>"></a>
				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>							
	</div>
    
	
	<div id="student_add" class="tab-pane fade">
		<div class = "row">
		
			<div class = "col-md-12">
						
						<form action="/admin/add_student?group=<?=$id?>" method="post">
						<div class="col-md-4">
						
						<h3>Данные о студенте</h3>
							
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="surname" type="text" class="form-control" placeholder="Фамилия" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="name" type="text" class="form-control" placeholder="Имя" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="subname" type="text" class="form-control" placeholder="Отчество" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="birthday" type="text" class="form-control datepicker" placeholder="Дата рождения" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="tell" type="text" class="form-control" placeholder="Телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="adress" type="text" class="form-control" placeholder="Адресс" aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="pin" type="text" class="form-control" placeholder="PIN код" aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="email" type="text" class="form-control" placeholder="PIN код" aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="tell_sms" type="text" class="form-control" placeholder="PIN код" aria-describedby="basic-addon1"> 
						</div>
									
						</div>
						<div class="col-md-4">
						<h3>Данные о матери</h3>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="fio_mother" type="text" class="form-control" placeholder="ФИО" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="work_tell_mother" type="text" class="form-control" placeholder="Рабочий телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="tell_mother" type="text" class="form-control" placeholder="Сотовый телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						</div>
						<div class="col-md-4">
						<h3>Данные об отце</h3>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="fio_father" type="text" class="form-control" placeholder="ФИО" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="work_tell_father" type="text" class="form-control" placeholder="Рабочий телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="tell_father" type="text" class="form-control" placeholder="Сотовый телефон" aria-describedby="basic-addon1"> 
							</div>
						<br>
						</div>
						
						<button style="float:right;" type="submit" class="btn btn-success">Добавить студента</button>	
						
					</form>
					
			</div>
			
		</div>							
	</div>
	<div id="subjects" class="tab-pane fade">
		<div class = "row">
			<div class = "col-md-12">
			<table width = "100%">
							<tr>
								<th style = "width: 25%">Дисциплина</th>
								<th style = "width: 30%">Преподаватель</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
                        
						<?php foreach($group_subjects as $group_subject):?>
						
							<tr>
								
									<td><?=$group_subject['subject']?></td>
									<td><?=$group_subject['surname'].' '.$group_subject['name'].' '.$group_subject['subname']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="/admin/delete_group_subject?id=<?=$group_subject['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="/admin/edit_group_subject?id=<?=$group_subject['id']?>"></a>
				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>							
	</div>
	<div id="subject_add" class="tab-pane fade">
		<div class = "row">
			<div class = "col-md-12">
			<br>
				<form action="/admin/add_group_subject?group=<?=$id?>" method="post">
						<div class="col-md-12">
												
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<select name="subject" class="form-control" placeholder="Дисциплина" aria-describedby="basic-addon1"> 
								<?php foreach($subjects as $subject):?>	
									<option value="<?=$subject['id']?>"><?=$subject['name']?></option>
								<?php endforeach;?>
								</select>
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<select name="teacher" class="form-control" placeholder="Преподователи" aria-describedby="basic-addon1"> 
								<?php foreach($teachers as $teacher):?>	
									<option value="<?=$teacher['id']?>"><?=$teacher['name']?></option>
								<?php endforeach;?>
								</select>
							</div>
						<br>
						
						<button style="float:right;" type="submit" class="btn btn-success">Добавить дисциплину</button>			
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