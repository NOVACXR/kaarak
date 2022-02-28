<?php
require_once "conn.php";
error_reporting(0);
if(isset($_POST["create"]) && $_POST["create"]!="") {
		$productname 		= $_POST['productname'];
		$productid 			= $_POST['productid'];
		$category 			= $_POST['category'];
		$purchaselink		= $_POST['purchaselink'];
		$texture 			= $_FILES['image']['name'];
		$image				= $_FILES['image1']['name'];
		$models 			= $_FILES['image2']['name'];
		// $texture1			=$_FILES['old_image']['name'];
		
$membersCount = count($_POST["id"]);
for($i=0;$i<$membersCount;$i++) {
    $sql = "UPDATE `mobile1` SET `productname`=?, `purchaselink`=?, `productid`=?, `category`=? WHERE id=?";
    $sth = $conn->prepare($sql);
    $sth->execute(array($productname[$i],$purchaselink[$i],$productid[$i],$category[$i],$_POST["id"][$i]));
    // echo $productname,$purchaselink,$productid,$category;
// mysqli_query($conn, "UPDATE mobile1 set productname='" . $_POST["productname"][$i] . "',purchaselink='" . $_POST["purchaselink"][$i] . "' WHERE ID='" . $_POST["id"][$i] . "'");
// echo "UPDATE mobile1 set productname='" . $_POST["productname"][$i] . "', productid='" . $_POST["productid"][$i] . "', category='" . $_POST["category"][$i] . "', purchaselink='" . $_POST["purchaselink"][$i] . "',texture='" .'http://'.$_SERVER['HTTP_HOST']. '/connection/texture/' . $_POST["texture"][$i] . "',image='" . $_POST["image"][$i] . "',models='" . $_POST["models"][$i] . "' WHERE ID='" . $_POST["id"][$i] . "'";
}
header("Location:index.php");
if(isset($_POST["create"]) && $_POST["create"]!="") {

	$texture 			= $_FILES['image']['name'];
	$image				= $_FILES['image1']['name'];
	$models 			= $_FILES['image2']['name'];
	// $texture1			=$_FILES['old_image']['name'];
	$image_folder = "texture/";
	$image =  $image_folder.$_FILES['image']['name'];
	$image_loc =  $_FILES['image']['tmp_name'];
 //    $ext   =pathinfo($image,PATHINFO_EXTENSION);
 //    echo $image_loc;
	$texture='http://'.$_SERVER['HTTP_HOST']. '/connection/texture/' .$texture;
 //    echo $file_path;
 $image2= move_uploaded_file($image_loc,$image);

// $membersCount = count($_POST["id"]);
// for($i=0;$i<$membersCount;$i++) {
$sql = "UPDATE `mobile1` SET `texture`=?, `image`=?, `models`=? WHERE id=?";
$sth = $conn->prepare($sql);
$sth->execute(array($texture,$image[$i],$models[$i],$_POST["id"][$i]));
// echo $productname,$purchaselink,$productid,$category;
// mysqli_query($conn, "UPDATE mobile1 set productname='" . $_POST["productname"][$i] . "',purchaselink='" . $_POST["purchaselink"][$i] . "' WHERE ID='" . $_POST["id"][$i] . "'");
// echo "UPDATE mobile1 set productname='" . $_POST["productname"][$i] . "', productid='" . $_POST["productid"][$i] . "', category='" . $_POST["category"][$i] . "', purchaselink='" . $_POST["purchaselink"][$i] . "',texture='" .'http://'.$_SERVER['HTTP_HOST']. '/connection/texture/' . $_POST["texture"][$i] . "',image='" . $_POST["image"][$i] . "',models='" . $_POST["models"][$i] . "' WHERE ID='" . $_POST["id"][$i] . "'";

header("Location:index.php");

$sql = "SELECT * FROM mobile1 where category = 'Table Cloth'";
$result = $conn->query($sql);
$results_array =array();
if ($result->rowCount() > 0) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $results_array['Table Cloth'][] = array(
                        'productname'	=>$row['productname'],
                        'productid'		=>$row['productid'],
						'category'		=>$row['category'],
                        'purchaselink'	=>$row['purchaselink'],
						'texture'		=>$row['texture'],
                        'image'			=>$row['image'],
						'models'		=>$row['models']
                        
                                );

    }
}
// else {
//     echo "0 results";
// }

$sql1 = "SELECT * FROM mobile1 where category = 'Coushions'";
$result1 = $conn->query($sql1);
$results_array1 =array();
if ($result1->rowCount() > 0) {
    while($row1 = $result1->fetch(PDO::FETCH_ASSOC)) {
        $results_array1['Coushions'][] = array(
			'productname'	=>$row1['productname'],
			'productid'		=>$row1['productid'],
			'category'		=>$row1['category'],
			'purchaselink'	=>$row1['purchaselink'],
			'texture'		=>$row1['texture'],
			'image'			=>$row1['image'],
			'models'		=>$row1['models']
                        
                                );

    }
}
// else {
//     echo "0 results";
// }
$sql2 = "SELECT * FROM mobile1 where category = 'Bedsheet'";
$result2 = $conn->query($sql2);
$results_array2 =array();
if ($result2->rowCount() > 0) {
    while($row2 = $result2->fetch(PDO::FETCH_ASSOC)) {
        $results_array2['Bedsheet'][] = array(
			'productname'	=>$row2['productname'],
			'productid'		=>$row2['productid'],
			'category'		=>$row2['category'],
			'purchaselink'	=>$row2['purchaselink'],
			'texture'		=>$row2['texture'],
			'image'			=>$row2['image'],
			'models'		=>$row2['models']
                        
                                );

    }
}
// else {
//     echo "0 results";
// }
$sql3 = "SELECT * FROM mobile1 where category = 'Rugus'";
$result3 = $conn->query($sql3);
$results_array3 =array();
if ($result3->rowCount() > 0) {
    while($row3 = $result3->fetch(PDO::FETCH_ASSOC)) {
        $results_array3['Rugus'][] = array(
			'productname'	=>$row3['productname'],
			'productid'		=>$row3['productid'],
			'category'		=>$row3['category'],
			'purchaselink'	=>$row3['purchaselink'],
			'texture'		=>$row3['texture'],
			'image'			=>$row3['image'],
			'models'		=>$row3['models']
                        
                                );

    }
}
// else {
//     echo "0 results";
// }
$sql4 = "SELECT * FROM mobile1 where category = 'Throws'";
$result4 = $conn->query($sql4);
$results_array4 =array();
if ($result4->rowCount() > 0) {
    while($row4 = $result4->fetch(PDO::FETCH_ASSOC)) {
        $results_array4['Throws'][] = array(
			'productname'	=>$row4['productname'],
			'productid'		=>$row4['productid'],
			'category'		=>$row4['category'],
			'purchaselink'	=>$row4['purchaselink'],
			'texture'		=>$row4['texture'],
			'image'			=>$row4['image'],
			'models'		=>$row4['models']
                        
                                );

    }
}
// else {
//     echo "0 results";
// }
$sql5 = "SELECT * FROM mobile1 where category = 'Placements'";
$result5 = $conn->query($sql5);
$results_array5 =array();
if ($result5->rowCount() > 0) {
    while($row5 = $result5->fetch(PDO::FETCH_ASSOC)) {
        $results_array5['Placements'][] = array(
			'productname'	=>$row5['productname'],
			'productid'		=>$row5['productid'],
			'category'		=>$row5['category'],
			'purchaselink'	=>$row5['purchaselink'],
			'texture'		=>$row5['texture'],
			'image'			=>$row5['image'],
			'models'		=>$row5['models']
                        
                                );

    }
}
// else {
//     echo "0 results";
// }
$sql6 = "SELECT * FROM mobile1 where category = 'Runner'";
$result6 = $conn->query($sql6);
$results_array6 =array();
if ($result6->rowCount() > 0) {
    while($row6 = $result6->fetch(PDO::FETCH_ASSOC)) {
        $results_array6['Runner'][] = array(
			'productname'	=>$row6['productname'],
			'productid'		=>$row6['productid'],
			'category'		=>$row6['category'],
			'purchaselink'	=>$row6['purchaselink'],
			'texture'		=>$row6['texture'],
			'image'			=>$row6['image'],
			'models'		=>$row6['models']
                        
                                );

    }
}
// else {
//     echo "0 results";
// }

    
			$datamerged = array_merge($results_array, $results_array1, $results_array2, $results_array3, $results_array4, $results_array5, $results_array6);
$json_array = json_encode($datamerged, JSON_PRETTY_PRINT);
// $json_object=json_encode($json);
$json_decode=json_decode($json_array);
// echo $json_array;
$filename = 'mobile1.json';
			if(file_put_contents($filename, $json_array)){
				// echo 'Json file created';
			} 

			else{
						// echo 'An error occured in creating the file';
					}
				}
			}
?>

<html>
<head>
<title>Edit Members</title>
<style>
	body {
font-family:Times New Roman;
}
input {
font-family:sans-serif;
font-size:14px;
}
label{
font-family:sans-serif;
font-size:14px;
color:#999999;
}
.tblSaveForm {
border-top:2px #A7D6F1 solid;
background-color: #f8f8f8;
}
.head {
background-color: #A7D6F1;
}
.btnSubmit {
background-color:#A7D6F1;
padding:5px;
border-color:#A7D6F1;
border-radius:4px;
color:black;
}
.txtField {
padding: 5px;
border:#A7D6F1 1px solid;
border-radius:4px;
}
</style>
<!-- <script src=
"https://code.jquery.com/jquery-1.12.4.min.js">
    </script> -->
</head>

<body>
<!-- <script>
        $(texture).ready(texture() {
            $('input[type="file"]').change(texture(e) {
                var texture = e.target.files[0].name;
                $("texture").text(texture + ' is the selected file.');
 
            });
        });
		
		
    </script> -->
<form name="frmUser" method="post" action="">
	<center>
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="head">
<td>Edit Form</td>
</tr>
<?php
$count = count($_POST["mobile1"]);
for($i=0;$i<$count;$i++) {
    
 $sth = $conn->prepare("SELECT `id`, `productname`, `productid`, `category`, `purchaselink`, `texture`, `image`, `models` FROM `mobile1` WHERE id='" . $_POST["mobile1"][$i] . "'");
//  echo "SELECT `id`, `productname`, `productid`, `category`, `purchaselink` FROM `mobile1` WHERE id='" . $_POST["mobile1"][$i] . "'";
//  $sth->bindParam('id',$id, PDO::PARAM_INT);
// $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
// print_r ($result);
//  $sth->setFetchMode(PDO::FETCH_OBJ);
$sth->execute();
$result = $sth->fetchAll(\PDO::FETCH_ASSOC);

// $sth->setFetchMode(PDO::FETCH_OBJ);
// print_r($result);
//  $row[$i] = $result;
//  echo $result[$i]['id'];
// $count = count($_POST["mobile1"]);
// for($i=0;$i<$count;$i++) {

// $result = mysqli_query($conn, "SELECT * FROM mobile1 WHERE id='" . $_POST["mobile1"][$i] . "'");
// $row[$i]= mysqli_fetch_array($result);
// $dataimage = file_get_contents($row[$i]['texture']);
// $dataimage = $row[$i][$texture];
?>
<tr>
<td>
<table border="0" cellpadding="20" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>Product name</label></td>
<td><input type="hidden" name="id[]" class="form-control" value="<?php echo $result[$i]['id']; ?>"><input type="text" name="productname[]" class="form-control" value="<?php echo $result[$i]['productname']; ?>"></td>
</tr>
<tr>
<td><label>Product ID</label></td>
<td><input type="text" name="productid[]" class="form-control" readonly value="<?php echo $result[$i]['productid']; ?> "></td>
</tr>
<td><label>category</label></td>
<td><input type="text" name="category[]" class="txtField" readonly value="<?php echo $result[$i]['category']; ?>"></td>
</tr>
<td><label>Purchase link</label></td>
<td><input type="text" name="purchaselink[]" class="txtField" value="<?php echo $result[$i]['purchaselink']; ?>"></td>
</tr>
</tr>
<td><label>texture</label></td>
<td><input type="file" name="texture[]" id="texture" class="txtField" accept=".jpg" >
<input type="hidden" name="texture1[]" id="texture1" accept=".jpg" value="<?php echo $result[$i]['texture']; ?>">



</td>
</tr>
</tr>
<td><label>image</label></td>
<td><input type="file" name="image[]" id="image" class="txtField" accept=".png" ><?php echo $result[$i]['image']; ?></td>
</tr>
</tr>
<td><label>models</label></td>
<td><input type="file" name="models[]" id="models" class="txtField" accept=" .fbx" ><?php echo $result[$i]['models']; ?></td>
</tr>
</table>
</td>
</tr>
<?php
}
// echo $row[0]['texture'];

?>
<tr>
<td colspan="2"><input style="border-radius: 25px;" class="btn btn-primary" type="submit" id="register" name="create" value="Upload"></td>
</tr>
</table>
</div></center>
</form>
</body></html>