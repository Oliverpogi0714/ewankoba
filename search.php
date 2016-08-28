<!DOCTYPE html>
<html>

<h2>Search</h2>
<form action='search.php' method='post'>
<p>Name: <input type="text" name="name" size=20
maxlength=40 /></p>
<p><input type='submit' name='search' value='Search' /></p>
</form>
<?php
if (isset($_POST['name']))
{
include('mysql_connect.php');
$nym = $_POST['name'];
$query = "Select name, location FROM users WHERE name='$nym' ";
$result = @mysql_query($query);
$row = mysql_fetch_array($result,MYSQL_NUM);
if ($row)
{
echo "Name : " . $row[0] . "<br>";
echo "location : " . $row[1] . "<br>";
}
else
echo "No record found...";

}

?>
<iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDnCTkOve2oU4q4x85344QzlqTPG4MQLrY
    &q=<? echo "".$row[1]."" ?>" allowfullscreen>
</iframe>

  
  </body>
</html>