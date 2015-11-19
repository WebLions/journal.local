
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Дисциплины
                        </h1>
						
						
						
  

 <ul class="nav nav-tabs">
	<li class = "active"><a data-toggle="tab" href="#subjects">Список дисциплин</a></li>
	<li><a data-toggle="tab" href="#add_subjects">Добавление дисциплины</a></li>    
  </ul>

  <div class="tab-content">
    <div id="subjects" class="tab-pane fade in active">
		<div class = "row">
			<div class = "col-md-12">
						
						<br>
						<table width = "100%">
							<tr>
								<th style = "width: 20%">Дисциплина</th>								
							</tr>
                        
						<?php foreach($subjects as $subject):?>
						
							<tr>
								
									<td><?=$subject['name']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_subject?id=<?=$subject['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="edit_subject?id=<?=$subject['id']?>"></a>				
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>							
	</div>
	 <div id="add_subjects" class="tab-pane fade ">
		<div class = "row">
			<div class = "col-md-10">
			<br>
			<form action = "/admin/add_subject" method = "post">
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Название</span>
								<input name="name" type="text" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
							
						<button style="float:right;" type="submit" class="btn btn-success">Добавить дисциплину</button>
					</form>
			</div>
		</div>
						
					
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->