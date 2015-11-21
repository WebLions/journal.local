
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            дисциплины
                        </h1>
						
						
						
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab"  href="#subject">Список дисциплины</a></li>		
		<li><a data-toggle="tab"  href="#edit_subject">Редактирование дисциплины</a></li>
		
    </ul>					
  

  <div class="tab-content">
	<div id="subject" class="tab-pane fade">
		<div class = "row">
			<div class = "col-md-12">
			<table width = "100%">
							<tr>
								<th style = "width: 25%">Дисциплина</th>
								<th style = "width: 30%">Преподаватель</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
                        
						<?php foreach($teachers as $teacher):?>
						
							<tr>
								
									<td><?=$teacher['subject']?></td>
									<td><?=$$teacher['surname'].' '.$$teacher['name'].' '.$$teacher['subname']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="admin/delete_teacher[?id=<?=$teacher[['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="admin/edit_teacher[?id=<?=$teacher[['id']?>"></a>
				
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
				<form action="/admin/edit_group" method="post">
						<div class="col-md-12">
												
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="subject" type="text"  value = "<?=$subject[0]['subject']?>" class="form-control" placeholder="Дисциплина" aria-describedby="basic-addon1"> 
							</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="teacher" type="text" value = "<?=$subject[0]['teacher']?>" class="form-control" placeholder="Преподаватель" aria-describedby="basic-addon1"> 
							</div>
						<br>
						
						<button style="float:right;" type="submit"  class="btn btn-success">Сохранить</button>			
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