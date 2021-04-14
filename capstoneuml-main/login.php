<?php 
$m_email = $_POST['field1'];
$m_password = $_POST['field2'];

$getUser = mysqli_query($myconnection, 
  "SELECT email, password FROM users 
  WHERE email = '$m_email' 
  AND password = '$m_password';") or die ('Query failed: ' . msql_error());

$row = mysqli_fetch_array ($getUser, MYSQLI_ASSOC)
$email = $row['email'];
$email = $row['password'];

if($email!='' and $password!='')
{
  //this sends the email and password info between pages
  echo "<form action='home.php' method='post'>
				<input type='hidden' name='email' value=$m_email >
				<input type='hidden' name='password' value=$m_password >
				<input type=submit class=button value='login'></form>"
  //brings you to home page
    header('location: home.html');
  
}
else
{
  echo "Invalid username and password";
}

?>
