<?php
require_once "conn.php";
// $result = mysqli_query($conn, "SELECT * FROM mobile1");
$query = $conn->prepare("SELECT * FROM mobile1");
$query->execute();
$result = $query;
?>
<html>
<head>
<title>List of category</title>
<style type="text/css">
	body {
font-family:Times New Roman;
background: linear-gradient(45deg, #49a09d, #5f2c82);
}
input {
font-family:sans-serif;
font-size:20px;
}
#del{
width: 20%;
color: white;
padding: 10px 16px;
border: none;
border-radius: 4px;
cursor: pointer;
background-color:green;
opacity: 0.9;
}
#del:hover{
background-color:red;
opacity: 0.8;
}
#update:hover{
background-color:black;
opacity: 0.8;
}
#update{
width: 20%;
color: white;
padding: 10px 16px;
border: none;
border-radius: 4px;
cursor: pointer;
background-color: green;
opacity: 0.9;
}
#create{
width: 20%;
color: white;
padding: 10px 16px;
border: none;
border-radius: 4px;
cursor: pointer;
background-color: green;
opacity: 0.9;
}
#create:hover{
background-color: blue;
opacity: 0.8;
}
label{
font-family:sans-serif;
font-size:14px;
color:#999999;
}
.tblSaveForm {
border-top:2px #999999 solid;
background-color: #f8f8f8;
}
.tableheader {
background-color: green;
}
.tablerow {
background-color: #A7D6F1;
color:white;
}
.Rows {
background-color: #E2EDF9;
font-size:14px;
color:#101010;
}
.Rows:hover {
background-color: lightblue;

}
.tblListForm {
border-top:2px #999999 solid;
}
.head {
background-color: lightgreen;
font-size:12px;
font-weight:bold;
}
</style>
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<div style="width:500px ;">
<form name="frmUser" method="post">
<table border="0" cellpadding="10" cellspacing="2" width="500" class="tblListForm">
<tr class="head">
<td></td>
<td><h2>productname</h2></td>
<td><h2>productid</h2></td>
<td><h2>category</h2></td>
<td><h2>purchaselink</h2></td>
<td><h2>texture</h2></td>
<td><h2>image</h2></td>
<td><h2>models</h2></td>
</tr>

<?php
// $str_data = file_get_contents("emp-records.json");
// $data = json_decode($str_data, true);
 
// /*Initializing temp variable to design table dynamically*/
// $temp = "<table>";
 
// /*Defining table Column headers depending upon JSON records*/
// $temp .= "<tr><th>Employee Name</th>";
// $temp .= "<th>Designation</th>";
// $temp .= "<th>Company</th>";
// $temp .= "<th>Mobile Number</th></tr>";
 
// /*Dynamically generating rows & columns*/
// for($i = 0; $i < sizeof($data["employees"]); $i++)
// {
// $temp .= "<tr>";
// $temp .= "<td>" . $data["employees"][$i]["empName"] . "</td>";
// $temp .= "<td>" . $data["employees"][$i]["designation"] . "</td>";
// $temp .= "<td>" . $data["employees"][$i]["company"] . "</td>";
// $temp .= "<td>" . $data["employees"][$i]["mob"] . "</td>";
// $temp .= "</tr>";
// }
 
// /*End tag of table*/
// $temp .= "</table>";
 
// /*Printing temp variable which holds table*/
// echo $temp
$i=0;
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
?>
<script>
	function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}

	</script>
<tr class="rows">
<td><input type="checkbox" name="mobile1[]" value="<?php echo $row["id"]; ?>" ></td>
<td><?php echo $row["productname"]; ?></td>
<td><?php echo $row["productid"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["purchaselink"]; ?></td>
<td><?php echo $row["texture"]; ?></td>
<td><?php echo $row["image"]; ?></td>
<td><?php echo $row["models"]; ?></td>
</tr>
<?php
$i++;
}

?>

<tr class="head">
<td colspan="5"><input id="update" style="width:100px;" type="button" name="Edit" value="Edit" onClick="setUpdateAction();" /> 
				<input id="del" style="width:100px;" type="button" name="delete" value="Delete"  onClick="setDeleteAction();" />
				<input id="create" style="width:150px;" type="button" name="homepage" value="Homepage"  onClick="window.location.href='registration.php';" /></br></br></br>
				<input type="checkbox" onclick="toggle(this);" />select all</br>

</td>
</tr>
</table>
</form>
</div>
</body></html>                        