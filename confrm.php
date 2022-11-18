<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  if($name !=''||$email !='')
  {
    $sql2="Insert into contact(name,email,contact)
    values('$name','$email','$contact')";
    if(mysqli_query($conn,$sql2))
    {
        echo "<script>alert('New Customer Added');window.location = 'index.html';  </script>";
    }
    else{
        echo "error";
    }
   }
}
$conn->close();
?>