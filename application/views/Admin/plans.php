
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Учебный план
                        </h1>
						
						
						
	<ul class="nav nav-tabs">
		<li class = "active"><a data-toggle="tab" href="#plan">Список годов</a></li>
		<li><a data-toggle="tab" href="#add_plan">Добавление учебного года</a></li>    
    </ul>					
  

  <div class="tab-content">
    <div id="plan" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
			<br>
						<table width = "100%">
							<tr>
								<th style = "width: 20%">Учебный год</th>
								<th style = "width: 20%">Текущий</th>
								<th style = "width: 20%">Начало</th>
								<th style = "width: 20%">Окончание</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
                        
						<?php foreach($plans as $plan):?>
						
							<tr>
								
									<td><?=$plan['name']?></td>
									<td><?=$plan['first']?></td>
									<td><?=$plan['second']?></td>
									<td><?=$plan['now']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_plan?id=<?=$plan['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="edit_plan?id=<?=$plan['id']?>"></a>
				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>							
	</div>
	
	<div id="add_plan" class="tab-pane fade ">
		<div class = "row">
			<div class = "col-md-10">
			<br>
			<form action = "add_plan" method = "post">
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Название</span>
								<input name="name" type="text" class="form-control"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Начало</span>
								<input name="name" type="text" class="form-control"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Окончание</span>
								<input name="name" type="text" class="form-control"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<input type="checkbox" name = "now" checked>Текущий</input>
							
						<button style="float:right;" type="submit" class="btn btn-success">Добавить учебный год</button>
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