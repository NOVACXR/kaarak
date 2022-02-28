<?php
require_once ('conn.php');
 
$get_id=$_REQUEST['tbl_image_id'];
 
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];
 
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tbl_image SET image_location ='$location1' WHERE tbl_image_id = '$get_id' ";
 
$conn->exec($sql);
echo "<script>alert('Successfully Updated!!!'); window.location='index.php'</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="updte_img<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<h3 id="myModalLabel">Update</h3>
</div>
<div class="modal-body">
<div class="alert alert-danger">
<?php if($row['image_location'] != ""): ?>
<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
<?php else: ?>
<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
<?php endif; ?>
<form action="edit_PDO.php<?php echo '?tbl_image_id='.$id; ?>" method="post" enctype="multipart/form-data">
<div style="color:blue; margin-left:150px; font-size:30px;">
	<input type="file" name="image" style="margin-top:-115px;">
</div>
</div>
<hr>
<div class="modal-footer">
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
<button type="submit" name="submit" class="btn btn-danger">Yes</button>
</form>
</div>
</div>
</div>
</body>
</html>