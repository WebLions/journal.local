
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Учебный период
                        </h1>
						
						
						
	<ul class="nav nav-tabs">
		<li class = "active"><a data-toggle="tab" href="#term">Список учебных периодов</a></li>
		<li><a data-toggle="tab" href="#add_term">Добавление учебного периода</a></li>    
    </ul>					
  

  <div class="tab-content">
    <div id="term" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
			<br>
						<table width = "100%">
							<tr>
								<th style = "width: 20%">Название периода</th>
								<th style = "width: 20%">Тип</th>
								<th style = "width: 20%">Текущий</th>
								<th style = "width: 20%">Начало</th>
								<th style = "width: 20%">Окончание</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
                        
						<?php foreach($terms as $term):?>
						
							<tr>
								
									<td><?=$term['name']?></td>
									<td><?=$term['type']?></td>
									<td><?=($term['now']==1)?'Да':'Нет'?></td>
									<td><?=$term['first']?></td>
									<td><?=$term['second']?></td>
									
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_term?id=<?=$term['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="edit_term?id=<?=$term['id']?>"></a>
				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>							
	</div>
	
	<div id="add_term" class="tab-pane fade ">
		<div class = "row">
			<div class = "col-md-10">
			<br>
			<form action = "add_term" method = "post">
						
						<input type = "hidden" name = "plan" value = "<?=$id_term?>">
						
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Название</span>
								<input name="name" type="text" class="form-control"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<select name = "type">
							<option>Учеба</option>
							<option>Каникулы</option>
						</select>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Начало</span>
								<input name="first" type="text" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Окончание</span>
								<input name="second" type="text" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<input type="checkbox" name = "now" checked>Текущий
							
						<button style="float:right;" type="submit" class="btn btn-success">Добавить учебный период</button>
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