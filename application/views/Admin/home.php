

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Главная страница 
                        </h1>
						
						
						
  <ul class="nav nav-tabs">
	<li class = "active"><a data-toggle="tab" href="#posts">Новости</a></li>
	<li><a data-toggle="tab" href="#teachers">Преподаватели</a></li>
    <li><a data-toggle="tab" href="#students">Студенты</a></li>
    <li><a data-toggle="tab" href="#subjects">Дисциплины</a></li>
	<li><a data-toggle="tab" href="#lessons">Уроки</a></li>
  </ul>

  <div class="tab-content">
  <div id="posts" class="tab-pane fade in active">
      <h3>
                            Список новостей
                        </h3>
						<table width = "100%">
							<tr>
								<th style = "width: 30%">Наименование</th>
								<th style = "width: 20%;text-align:right">Функции</th>
							</tr>
							
						<?php foreach($posts as $post):?>
						
							<tr>
								
									<td><?=$post['title']?></td>
									<td>
										<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" style="float:right;" href="delete_post?id=<?=$post['id']?>"></a>
										<a class="glyphicon glyphicon-pencil btn btn-success btn-xs" style="float:right;" href="edit_post?id=<?=$post['id']?>"></a>
										<a class="glyphicon glyphicon-eye-open btn btn-info btn-xs" style="float:right;" href="preview_post?id=<?=$post['id']?>"></a>
									</td>
								
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
						</table>
						<br>
						<div class="row">
                    <form action="/admin/add_post" method="post">
						<div class="col-md-12">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">!</span>
								<input name="title" type="text" class="form-control" placeholder="Заголовок" aria-describedby="basic-addon1">
							</div>
						<br>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"></span>
								<textarea name="description" type="text" class="form-control" placeholder="Текст новости" aria-describedby="basic-addon1"> </textarea>
							</div>
						<br>
						
						<button style="float:right;" type="submit" class="btn btn-success">Добавить новость</button>			
						</div>
					</form>
							</div>
						
					
    </div>
    <div id="teachers" class="tab-pane fade ">
		<div class = "row">
			<div class = "col-md-12">
						<h3>Список преподавателей </h3>
						<br>
						<table width = "100%">
							<tr>
								<th style = "width: 30%">ФИО</th>
								<th style = "width: 30%">Логин</th>
								
							</tr>
                        
						<?php foreach($teachers as $teacher):?>
						
							<tr>								
									<td><?=$teacher['surname'].' '.$teacher['name'].' '.$teacher['subname']?></td>
									<td><?=$teacher['login']?></td>																	
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
				</table>
			</div>
		</div>				
					
    </div>
    
    <div id="students" class="tab-pane fade">
      <h3>
                            Список студентов
                        </h3>
						<table width = "100%">
							<tr>
								<th style = "width: 30%">ФИО</th>
								<th style = "width: 30%">Пинкод</th>
							</tr>
							
						<?php foreach($student as $students):?>
						
							<tr>								
									<td><?=$students['fio']?></td>
									<td></td>									
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
						</table>
    </div>
    <div id="subjects" class="tab-pane fade">
      <h3>
                            Список дисциплин
                        </h3>
						<table width = "100%">
							<tr>
								<th style = "width: 80%">Название</th>								
							</tr>
							
						<?php foreach($subject as $subjects):?>
						
							<tr>							
									<td><?=$subjects['name']?></td>
							</tr>
						
						<?php endforeach; echo '<br>';?>
                        
						</table>
    </div>
	
	<div id="lessons" class="tab-pane fade ">
		<div class = "row">
			<div class = "col-md-12">
						<h3>Список уроков </h3>
						<br>
						<table width = "100%">
							<tr>
								<th style = "width: 20%">Дата</th>
								<th style = "width: 20%">Тема</th>
								<th style = "width: 20%">Дисциплина</th>
								<th style = "width: 20%">Группа</th>
								<th style = "width: 20%">Преподаватель</th>
							</tr>
                        
						<?php foreach($teacher as $teachers):?>
						
							<tr>								
									<td><?=$teachers['fio']?></td>
									<td></td>																	
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

  