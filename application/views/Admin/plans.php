
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Учебный план
                        </h1>
						
						
						
  

  <div class="tab-content">
    <div id="groups" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						<h3>Список годов </h3>
						<br>
						<table width = "100%">
							<tr>
								<th style = "width: 50%">Учебный год</th>
								<th style = "width: 50%">Начало</th>
								<th style = "width: 50%">Окончание</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
                        
						<?php foreach($plans as $plan):?>
						
							<tr>
								
									<td><?=$plan['name']?></td>
									<td><?=$plan['first']?></td>
									<td><?=$plan['second']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="admin/delete_plan?id=<?=$plan['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="admin/edit_plan?id=<?=$plan['id']?>"></a>
				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
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