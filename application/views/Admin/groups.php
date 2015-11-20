
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Группы
                        </h1>
						
		
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab"  href="#groups">Список групп</a></li>		
		<li><a data-toggle="tab"  href="#subject_add">Добавление группы</a></li>		
    </ul>		
						
  

  <div class="tab-content">
    <div id="groups" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						
						<table width = "100%">
							<tr>
								<th style = "width: 50%">Группа</th>
								<th style = "width: 30%">Куратор</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
						<?php foreach($groups as $group):?>
						
							<tr>
								
									<td><?=$group['number']?></td>
									<td><?=$group['name']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="/admin/delete_group?id=<?=$group['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="/admin/edit_group?id=<?=$group['id']?>"></a>
				
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
				<form action="/admin/add_group" method="post">
						<div class="col-md-12">
												
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<input name="number" type="text" class="form-control" placeholder="Шифр группы" aria-describedby="basic-addon1"> 
						</div>
						<br>
						<select name="id_teacher">	
						<?php foreach($teachers as $teacher):?>							
									<option value="<?=$teacher['id']?>"><?=$teacher['surname'].' '.$teacher['name'].' '.$teacher['subname']?></option>							
						<?php endforeach;?>
						</select>	
						<br>
						<select name="id_plan">
						<?php foreach($plans as $plan):?>							
									<option value="<?=$plan['id']?>"><?=$plan['name']?></option>							
						<?php endforeach;?>
						</select>
						
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