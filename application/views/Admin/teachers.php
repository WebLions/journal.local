
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Преподаватели
                        </h1>
						
						
						
  <ul class="nav nav-tabs">
	<li class = "active"><a data-toggle="tab" href="#teachers">Список преподавателей</a></li>
	<li><a data-toggle="tab" href="#add_teachers">Добавление преподавателя</a></li>    
  </ul>

  <div class="tab-content">
    <div id="teachers" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						
						<br>
						<table width = "100%">
							<tr>
								<th style = "width: 20%">ФИО</th>
								<th style = "width: 20%">Логин</th>
							</tr>
                        
						<?php foreach($teachers as $teacher):?>
						
							<tr>
								
									<td><?=$teacher['surname'].' '.$teacher['subname'].' '.$teacher['name']?></td>
									<td><?=$teacher['login']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="admin/delete_teacher?id=<?=$teacher['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="admin/edit_teacher?id=<?=$teacher['id']?>"></a>				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>							
	</div>
	 <div id="add_teachers" class="tab-pane fade ">
		<div class = "row">
			<div class = "col-md-10">
			<br>
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
								<input name="description" type="text" class="form-control" placeholder="Логин" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Пароль" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="description" type="text" class="form-control" placeholder="Пароль ещё раз" aria-describedby="basic-addon1"> 
							</div>
						<br>						
						<button style="float:right;" type="submit" class="btn btn-success">Добавить преподавателя</button>
			</div>
		</div>
	</div>
					
					
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->