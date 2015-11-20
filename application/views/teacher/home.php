

<div id="page-wrapper">

	<div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                        <h1 class="page-header">
                            Главная страница 
                        </h1>
				<div class="tab-content">
					<div id="teachers" class="tab-pane fade in active">
						<div class = "row">
							<div class = "col-md-12">
							
							<table width = "100%">
								<tr>
									<th style = "width: 20%">Группа</th>
									<th style = "width: 30%">Дисциплина</th>
									<th style = "width: 20%;text-align:right">Функции</th>
								</tr>
                        
							<?php foreach($groups as $group):?>
						
								<tr>								
									<td><?=$group['name']?></td>
									<td><?=$group['subject']?></td>
									<td><a href ="<?='class_lesson/'.$plan['id']?>"><?=$plan['name']?></a></td> -->
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
							</table>
						
							</div>
						</div>
					</div>
				</div>
                <!-- /.row -->
			</div>
		</div>
                
    </div>
            <!-- /.container-fluid -->
</div>
        <!-- /#page-wrapper -->

  