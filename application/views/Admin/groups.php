
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Группы
                        </h1>
						
						
						
  

  <div class="tab-content">
    <div id="groups" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						<h3>Список групп </h3>
						<br>
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
  </div>
		</div>
					
					
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->