<?php 
require 'header.php';
if($isadmin==0){
    alert("Błąd uwierzytelnienia!", "Treść tylko dla administratora!", "error", "Streaming Zalewki", "index.php");
}else{

$editid = $_POST['id'];
$edytowany = $db->query('SELECT * FROM movies WHERE id=?', $editid)->FetchArray();
$edittitle = $edytowany['title'];

?>


                <div class="container">
	<div class="d-flex justify-content-center h-20">
		<div class="card">
			<div class="card-header">
				<h3>Edycja filmu <?php echo $edittitle; echo " (ID: $editid)"?> </h3>
			</div>
			<div class="card-body">
				<form method="POST" action="editmoviesc.php">
                                    <?php echo"<input type='hidden' name='id' readonly='readonly' value='$editid'>";?>

                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-video"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Tytuł" name="etitle">
                                        </div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-video"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Ścieżka miniatury" name="eminsrc">
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-video"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Ścieżka filmu" name="evidsrc">
					</div>
					<div class="form-group">
						<input type="submit" value="Aktualizuj" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a href="managemovies.php">Powrót do panelu zarządzania filmami</a>
				</div>
			</div>
		</div>
	</div>
</div>
                </div>

  <!-- /.container -->       


<?php
}
require '../footer.php';
?>
