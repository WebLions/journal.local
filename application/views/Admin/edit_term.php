
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Учебные планы
                        </h1>
						
						
						
  



   <div class="tab-content">
    <div id="terms" class="tab-pane fade in active">
		<div class = "row">
		   <div class = "col-md-10">
			<br>
			<form action = "edit_term?id=<?=$term[0]['id']?>&plan=<?=$id_term?>" method = "post">
						
						
						
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Название</span>
								<input name="name" type="text" value = "<?=$term[0]['name']?>" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Начало</span>
								<input name="first" type="text" value = "<?=$term[0]['first']?>" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Окончание</span>
								<input name="second" type="text" value = "<?=$term[0]['second']?>" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<input type="checkbox" checked = "<?=($term[0]['now']==1)?'checked':'';?>" name = "now" checked>Текущий
						
						<a style="float:right;" href = "plans" class="btn btn-success">Вернуться</a>	
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