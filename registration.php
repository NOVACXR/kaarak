<?php
require_once('config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
	<script>
	function ddlselect()
	{
		var d=document.getElementById("category");
		var displaytext=d.options[d.selectedIndex].value;
		document.getElementById("productid").value=Math.floor(Math.random() * 100);
	
	
	}
</script>
<style>	
.navtop {
	background-color: #2f3947;
	height: 60px;
	width: 100%;
	border: 0;
}
.navtop div {
	display: flex;
	margin: 0 auto;
	width: 1000px;
	height: 100%;
}
.navtop div h1, .navtop div a {
	display: inline-flex;
	align-items: center;
}
.navtop div h1 {
	flex: 1;
	font-size: 24px;
	padding: 0;
	margin: 0;
	color: #eaebed;
	font-weight: normal;
}
.navtop div a {
	padding: 0 20px;
	text-decoration: none;
	color: #c1c4c8;
	font-weight: bold;
}
.navtop div a i {
	padding: 2px 8px 0 0;
}
.navtop div a:hover {
	color: #eaebed;
}
body.loggedin {
	background-color: #f3f4f7;
}
.content {
	width: 1000px;
	margin: 0 auto;
}
.content h2 {
	margin: 0;
	padding: 25px 0;
	font-size: 22px;
	border-bottom: 1px solid #e0e0e3;
	color: #4a536e;
}
.content > p, .content > div {
	box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
	margin: 25px 0;
	padding: 25px;
	background-color: #fff;
}
.content > p table td, .content > div table td {
	padding: 5px;
}
.content > p table td:first-child, .content > div table td:first-child {
	font-weight: bold;
	color: #4a536e;
	padding-right: 15px;
}
.content > div p {
	padding: 5px;
	margin: 0 0 10px 0;
}
.container{
	margin: auto;
	width: 60%;
	
	background-color: bisque;
	 
	padding: 10px;
	box-shadow: 0px 3px 10px 3px rgba(0, 0, 0, 0.5), 0px 0px 5px 1px rgba(0, 0, 0, 0.6);
	border-radius: 25px;
}
.col-sm-3{
	text-align: center;
}

</style>
</head>
<!-- <input id="create" style="width:150px;" type="button" name="homepage" value="logout"  onClick="window.location.href='logout.php';" /> -->


<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>ADMIN FORM</h1>
            <a href="index.php"><i class="fas fa-user-circle"></i>update</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">
        <h2>Home Page</h2>
<div>
	<form action="process.php" method="post" enctype="multipart/form-data">
		<div class="container">
		<link type="text/css" href="" rel="stylesheet" />
			<div class="row">
				<div class="col-sm-3" >
					
					
					<hr class="mb-3">
					<label for="productname"><b>Product name</b></label><br><br>
					
					<input style="border-radius: 25px; height:30px" class="form-control" id="productname" name="productname" type="text" required><br><br>

					<label for="productid"><b>Product ID</b></label><br><br>

					<input style="border-radius: 25px; height:30px" type="text" name="productid" id="productid" required><br><br>

					<label for="category"><b>category</b></label><br><br>
	
					<select id="category" name="category" class="form-control" onchange="ddlselect();" required>  
					<option selected="selected">Choose one</option>
						<option > Table Cloth  
							</option>  
					<option> Coushions   
							</option>  
					<option> Bedsheet
							</option>  
					<option> Rugus
							</option>  
							<option> Throws
							</option> 
							<option> Placements
							</option> 
							<option> Runner
							</option> 		
					
					</select>  <br><br>
					

					<label for="purchaselink"><b>Purchase link</b></label><br><br>

					<input style="border-radius: 25px;  height:30px" class="form-control" id="purchaselink"  name="purchaselink" type="text"required><br><br>

					<label for="texture"><b>texture</b></label><br><br>
					
					
					
         			<input type="file" action="edit.php" id ="texture" name="image" accept=".jpg, .jpeg" required><br><br>

					 <label for="image"><b>image</b></label><br><br>
					
					 <input type="file" id ="image" name="image1" accept=".png" required><br><br>

					 <label for="models"><b>Models</b></label><br><br>

					 <input type="file" id ="models" name="image2" accept=" .fbx" required><br><br>

					<hr class="mb-3">
					<input style="border-radius: 25px; width:150px" class="btn btn-primary" type="submit" id="register" name="create" value="Submit">
					<!-- <button style="border-radius: 25px; width:167px; height:30px" onclick="window.location.href='index.php';"> Update </button> -->

				</div>
			</div>
		</div>
	</form>
</div>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var productname 	= $('#productname').val();
			var productid	= $('#productid').val();
			var category 		= $('#category').val();
			var link = $('#link').val();
			var image 	= $('#image').val();
			console.log(image);

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {productname: productname,productid: productid,category: category,link: link,image: image},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}
		});		

		
	});
	
</script> -->


</body>




</html>