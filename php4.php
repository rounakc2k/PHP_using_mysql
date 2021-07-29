<?php
$conn = mysqli_connect("localhost", "root", "password", "sakila");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['update'])) // when click on Update button
{
    $city_id = $_POST['city_id'];
    $city = $_POST['city'];
	
    $edit = mysqli_query($conn,"update city set city_id='$city_id', city='$city' where city_id='$city_id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("http://localhost/php%20folder/php3.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="city_id" value="<?php echo $data['city_id'] ?>" placeholder="Enter City_id" Required>
  <input type="text" name="city" value="<?php echo $data['city'] ?>" placeholder="Enter City" Required>
  <input type="submit" name="update" value="Update">
</form>