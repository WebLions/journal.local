
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Редактирование дисциплины
                        </h1>
						
						
						
  



  <div class="tab-content">
    <div id="subjects" class="tab-pane fade in active">
		<div class = "row">
		   <div class = "col-md-10">
			<br>
			<form action = "edit_subject?id=<?=$subject[0]['id']?>" method = "post">
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Название</span>
								<input name="name" type="text" value ="<?=$subject[0]['name']?>" class="form-control"  aria-describedby="basic-addon1"> 
							</div>
						<br>
							
						<button style="float:right;" type="submit" class="btn btn-success">Сохранить</button>
					</form>
			</div>
		</div>
						
					
                </div>
						
					
                </div>
                <!-- /.row -->

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->