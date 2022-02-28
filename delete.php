<?php
require_once "conn.php";
$Count = count($_POST["mobile1"]);
for($i=0;$i<$Count;$i++) {
	$id = $Count[$i];
	$query = $conn->prepare("DELETE from `mobile1` WHERE `id`='" . $_POST["mobile1"][$i] . "'");
	$query->execute();
}
// for($i=0;$i<$Count;$i++) {
// mysqli_query($conn, "DELETE FROM mobile1 WHERE id='" . $_POST["mobile1"][$i] . "'");
// }
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

?>