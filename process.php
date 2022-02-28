<?php
require('config.php');
?>
<?php
require_once('config.php');
if(isset($_POST["create"])){

	$productname 		= $_POST['productname'];
	$productid 			= $_POST['productid'];
	$category 			= $_POST['category'];
	$purchaselink		= $_POST['purchaselink'];
	$texture 			= $_FILES['image']['name'];
	$image				= $_FILES['image1']['name'];
	$models 			= $_FILES['image2']['name'];
	// echo "<script type='text/javascript'>alert('check message: $productname :- $productid :- $category :- $purchaselink :- $texture :- $image :- $models ');</script>";
	
  // print_r($image);
  //die;
   // $image=$_FILES["images"]["tmp_name"];
    // $file=$_FILES["images"]["name"];
    // print_r($file);
   // if (file_exists("uploads/" . $_POST["images"]["name"]))
   //      {
   //          echo $_POST["image"]["name"] . " already exists. ";
   //      }
   //      else
   //      {
            // mkdir("uploads/".$image, 0700);
            // move_uploaded_file($_POST["images"]["name"],
            // "uploads/".$image . $_POST["images"]["name"]);
            // echo "Stored in: " ."upload/".$image . $_POST["images"]["name"];
      //   }
   // $targetFile = 'uploads/' . basename($_POST["images"]["name"]);

   //  if (move_uploaded_file($_FILES["images"]["tmp_name"], $targetFile)) {
   //    //file was successfully uploaded
   //  }

    // define('UPLOAD_DIR', 'uploads/');
    // $image_parts = explode(";base64,", $_POST['image']);
    // $image_type_aux = explode("uploads/", $image_parts[0]);
	// // echo $image_type_aux;
    // $image_type = $image_type_aux[1];
    // $image_base64 = base64_decode($image_parts[1]);
    // $image =  uniqid() . '.jpg';
    // file_put_contents($image, $image_base64);
	// $file_path='http://'.$_SERVER['HTTP_HOST']. '/'.$productid .$image;
	// if($_FILES['image']['name']){

	// 	$allow=array('jpeg' => 'image/jpeg',
	// 	'jpg' => 'image/jpeg','png' => 'image/png');
	

	
   $image_folder = "texture/";
   $image =  $image_folder.$_FILES['image']['name'];
   $image_loc =  $_FILES['image']['tmp_name'];
//    $ext   =pathinfo($image,PATHINFO_EXTENSION);
//    echo $image_loc;
   $texture='http://'.$_SERVER['HTTP_HOST']. '/connection/texture/' .$_FILES['image']['name'];
//    echo $file_path;
$image2= move_uploaded_file($image_loc,$image);
// if(!array_key_exists($ext,$allow)) die("please select valid format");
// if(in_array($image_loc,$allow)){
	// if(file_exists($_FILES['image']['name']))
	// {
		// echo "this file is already exists";

	// }
	// else
	// {
		// echo "your file uploaded successfully";
	// }
// }
	// }
   



   $image_folder = "image/";
   $image1 =  $image_folder.$_FILES['image1']['name'];
   $image_loc =  $_FILES['image1']['tmp_name'];
//    echo $image_loc;
   $image='http://'.$_SERVER['HTTP_HOST']. '/connection/image/' .$_FILES['image1']['name'];
//    echo $file_path;
   $image3= move_uploaded_file($image_loc,$image1);



   $image_folder = "models/";
   $image2 =  $image_folder.$_FILES['image2']['name'];
   $image_loc =  $_FILES['image2']['tmp_name'];
   
//    echo $file_path;
		// $zip = new ZipArchive();
		// if($zip->open($image2, ZipArchive::CREATE) !==TRUE){
		// 	$error .="sorry zip creation is not working currently.<br/>";
		// }
	// 	$output= 'image2.zip';
	// $input= 'models.fbx';
	// $zip= new ZipArchive;
	// if($zip -> open($output,ZipArchive::CREATE)==TRUE){
	// 	$data8= $zip->addFile($input);
	// 	// echo $zip;
	// $zip->close();
	// }
		
$pathdir = "models/"; 
//   $path = 'http/hpst/test.zip'
// Enter the name to creating zipped directory
$zipcreated = $productname.'.zip';
  
// Create new zip class
$zip = new ZipArchive;
   
if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) {
      
    // Store the path into the variable
    $dir = opendir($pathdir);
       
    while($file = readdir($dir)) {
        if(is_file($pathdir.$file)) {
            $zip -> addFile($pathdir.$file, $file);
        }
    }
    $zip ->close();
}
$models='http://'.$_SERVER['HTTP_HOST']. '/connection/' .$zipcreated;
$image4= move_uploaded_file($image_loc,$image2);
		

//    $file_path2 = new ZipArchive();
//    $file_path2->open('',  ZipArchive::CREATE);
//    $srcDir = "models/";
//    $files= scandir($srcDir);
//    //var_dump($files);
//    unset($files[0],$files[1]);
//    foreach ($files as $file) {
//     $file_path2->addFile("{$file}");    
//    }
//    $file_path2->close();
//    if($_FILES['image2']['name']){
// 	if(!empty($_FILES['image2']['name'][0])){
// 		$zip = new ZipArchive();
// 		$zip_name = getcwd() . '/connection/models/' . time() . ".zip";	
// 		if($zip->open($zip_name, ZipArchive::CREATE) !==TRUE){
// 			$error .="sorry zip creation is not working currently.<br/>";
// 		}
// 		$imagecount = count($_FILES['image2']['name']);
// 		for($i=0;$i<$imagecount;$i++){
// 			if($_FILES['image2']['tmp_name'][$i] ==''){
// 				continue;
// 			}
// 			$newname = date('YmdHis',time()) .mt_rand() . '.fbx';
// 			$zip->addFormString($_FILES['image2']['name'][$i], file_get_contents($_FILES['image2']['tmp_name'][$i]));
// 			move_uploaded_file($_FILES['image2']['tmp_name'][$i], './models/' .$newname);
// 		}
// 		$zip->close();
// 		$success = basename($zip_name);
// 	}
// 		else{
// 			error = '<strong>Error!! </strong> please select a file.';
// 		}
// }

   
//    echo preg_replace($productid,$image);
//    $image = $productid. rand(10000, 990000). '_'. time().'.'.$image;
   	// if(in_array($image)=== false){
	// $errors[]="extension not allowed, please choose a JPEG or PNG file.";
 	// }
 	// $image= array("jpeg","jpg","png");
// 	 $errors = [];
// $path = 'MealImg/';
// $extensions = ['jpg', 'jpeg', 'png', 'gif'];
// $all_files = count($_FILES['files']['tmp_name']);  
// $file_tmp = $_FILES['files']['tmp_name'][0];
// $file_type = $_FILES['files']['type'][0];
// $file_size = $_FILES['files']['size'][0];
// $file_parts =explode('.',$_FILES['files']['name'][0]);
// $file_ext=strtolower(end($file_parts));
// $file_name = uniqid().".".$file_ext;
// $tmp = explode('.', $file_name);
// $file_extension = end($tmp);
// $file = $path . $file_name;
// if (!file_exists($file)) {
// if(move_uploaded_file($file_tmp, $fil
   

   
 //$uploadimage="upload/".$image;
   

   // $info = pathinfo($_FILES['userFile']['name']);
   // $image = $image['extension'];
   // $productid = "$productid.".$image;
   // $image = 'uploads/'.$image;
   // move_uploaded_file( $_FILES['file'], $image); 
     
   $sql = "INSERT INTO mobile1 (`productname`, `productid`, `category`, `purchaselink`, `texture`,`image`,`models` ) VALUES(?,?,?,?,?,?,?)";
   $stmtinsert = $conn->prepare($sql);
   $result = $stmtinsert->execute([$productname, $productid, $category, $purchaselink, $texture,$image,$models]);
   
	
		// $result =	mysqli_query($conn, $sql);


		

		// header('Location: '.$_SERVER['PHP_SELF'].'?success');
		// exit;
		
		// $data = array($category);


	
		// 	$sql = "SELECT * FROM mobile1";

		// 	$query = $conn->query($sql);
		// 	while($row = $query->fetch_assoc()){
		// 		$data[] = $row;
		// 	}
		// 	// echo '<pre>';
		// 	// print_r($data);
		// 	// exit;
		// 	//convert to json
		// 	$data = json_encode($data);
			
		// 	//create json file
		// 	$filename = 'mobile1.json';
		// 	if(file_put_contents($filename, $data)){
		// 		// echo 'Json file created';
		// 	} 
		// 	else{
		// 		// echo 'An error occured in creating the file';
		// 	}

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

// $data1 =array($category2 => array('Coushions'));
		
// 		$sql = "SELECT * FROM mobile1";
// 		$query = $conn->query($sql);
// 		while($row = $query->fetch_assoc($category)){
// 			$data1[] = $row;
// 		}
// 		//convert to json

// 		$data1 = json_encode($data1);

// 		//create json file
// 		$filename = 'mobile1.json';

// 		if(file_put_contents($filename, $data1)){
//     // echo 'Json file created';
// } 
// else{
//     // echo 'An error occured in creating the file';
// }
// 		$data2 =array($category3 => array('Bedsheet'));
// 		$sql = "SELECT * FROM mobile1";
// 		$query = $conn->query($sql);
// 		while($row = $query->fetch_assoc($category)){
// 			$data2[] = $row;
// 		}
// 		//convert to json

// 		$data2 = json_encode($data2);

// 		//create json file
// 		$filename = 'mobile1.json';

// 		if(file_put_contents($filename, $data2)){
//     // echo 'Json file created';
// } 
// else{
//     // echo 'An error occured in creating the file';
// }
// 		$data3 = array( $category4 => array('Rugus'));
// 		$sql = "SELECT * FROM mobile1";
// 		$query = $conn->query($sql);
// 		while($row = $query->fetch_assoc($category)){
// 			$data3[] = $row;
// 		}
// 		//convert to json

// 		$data3 = json_encode($data3);

// 		//create json file
// 		$filename = 'mobile1.json';

// 		if(file_put_contents($filename, $data3)){
//     // echo 'Json file created';
// } 
// else{
//     // echo 'An error occured in creating the file';
// }
// 		$data4 = array($category5 => ('Throws'));
// 		$sql = "SELECT * FROM mobile1";
// 		$query = $conn->query($sql);
// 		while($row = $query->fetch_assoc($category)){
// 			$data4[] = $row;
// 		}
// 		//convert to json

// 		$data4 = json_encode($data4);

// 		//create json file
// 		$filename = 'mobile1.json';

// 		if(file_put_contents($filename, $data4)){
//     // echo 'Json file created';
// } 
// else{
//     // echo 'An error occured in creating the file';
// }
// 		$data5 = array($category6 => ('Placements'));
// 		$sql = "SELECT * FROM mobile1";
// 		$query = $conn->query($sql);
// 		while($row = $query->fetch_assoc($category)){
// 			$data5[] = $row;
// 		}
// 		//convert to json

// 		$data5 = json_encode($data5);

// 		//create json file
// 		$filename = 'mobile1.json';

// 		if(file_put_contents($filename, $data5)){
//     // echo 'Json file created';
// } 
// else{
//     // echo 'An error occured in creating the file';
// }
// 		$data6 =array($category7 => ('Runner'));
// 		$sql = "SELECT * FROM mobile1";
// 		$query = $conn->query($sql);
// 		while($row = $query->fetch_assoc($category)){
// 			$data6[] = $row;
// 		}
// 		//convert to json

// 		$data6 = json_encode($data6);

// 		//create json file
// 		$filename = 'mobile1.json';

// 		if(file_put_contents($filename, $data6)){
//     // echo 'Json file created';
// } 
// else{
//     // echo 'An error occured in creating the file';
// }

// $dataarray1 = array('category1' => $row['category1'],'category2' => $row['category2'],'category3' => $row['category3'],'category4' => $row['category4'],'category5' => $row['category5'],'category6' => $row['category6'],'category7' => $row['category7']);
// while($row = mysqli_fetch_assoc($category))
// {
//     $dataarray1[] = $row;
// }
// $datamerged = array_merge($data,$data1,$data2,$data3,$data4,$data5,$data6,$dataarray1);
// $datamerged = json_encode($datamerged,JSON_PRETTY_PRINT);
// $filename = 'mobile1.json';
// if(file_put_contents($filename, $datamerged)){
//     // echo 'Json file created';
// } 
// else{
//     // echo 'An error occured in creating the file';
// }

		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
        
	
}
// header( "location: " . $result, true, 303 );
// // Stop any further progress
// die();
// else{
// 	echo 'No data';
// }

?>
<input id="create" style="width:150px;" type="button" name="homepage" value="Homepage"  onClick="window.location.href='registration.php';" />