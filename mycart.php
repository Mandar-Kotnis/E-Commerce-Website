<html>
<head><title>cart.php</title></head>
<style type="text/css">
  body {
    padding-left: 11em;
    font-family: respective, "Times New Roman",
          Times, serif;
    color: black;
    background-color:white }
  ul.navbar {
    list-style-type: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 2em;
    left: 1em;
    width: 9em }
</style>
<body>
<h1 style="background-color:blue;text-align:center"><b><i>MyCart.com</i><b></style></h1>
<hr>
<ul class="navbar">
  <li><a href="index.php">Home</a>
  <li><a href="mycart.php">MyCart</a>
  <li><a href="login.html">Login</a>
  <li><a href="signup.html">Signup</a>
</ul>
<hr>
</body>
</html>
<?php
//$product_id=$_POST['product_id'];
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
else
{
//echo "Connected successfully"."<br>";
}
$sql="SELECT * from mycart";
$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
				//echo "<form action='addtocart.php' method='post'>"."<br>";
				//echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
				echo "Product name:".$row['product_name']."<br>";
				echo "Product type:".$row['product_type']."<br>";
				echo "Brand type:".$row['brand_type']."<br>";
				echo "Product description:".$row['product_desc']."<br>";
				echo "Price:Rs.".$row['cost']."<br>";
				echo "<img src='uploads/".$row['image']."'/>"."<br>";
				//echo '<input type="submit" value="Add to cart">'.'<br>';
				//echo '</form>';
echo "<form action='remove.php' name='form1' method='POST'>"."<br>";
echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
echo "<input type='submit' value='Remove from cart'>"."<br>";
echo "</form>";
echo "<form action='online_pay.php' name='form2' method='POST'>"."<br>";
echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
echo "<input type='submit' value='Proceed to payment'>"."<br>";
echo "</form>";
?>