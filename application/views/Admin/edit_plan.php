
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Учебный план
                        </h1>
						
						
						
  



   <div class="tab-content">
    <div id="subjects" class="tab-pane fade in active">
		<div class = "row">
		   <div class = "col-md-10">
			<br>
			<form action = "edit_plan?id=<?=$plan[0]['id']?>" method = "post">
						
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Название</span>
								<input name="name" type="text" value = "<?=$plan[0]['name']?>" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Начало</span>
								<input name="first" type="text" value = "<?=$plan[0]['first']?>" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">Окончание</span>
								<input name="second" type="text" value = "<?=$plan[0]['second']?>" class="form-control datepicker"  aria-describedby="basic-addon1"> 
						</div>
						<br>
						<input type="checkbox" checked = "<?=($plan[0]['now']==1)?'checked':'';?>" name = "now" checked>Текущий</input>
						
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