<?php
    $servername = "10.10.9.171";
    $username = "Dion";
    $password = "Capping1!";
    $dbname = "cappingTest";
    $fakeUsersTable = "Users";
   $connection = mysqli_connect($servername,$username,$password);
    if(!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        mysqli_select_db($connection, $dbname);
    }


    function query($sql) {
        global $connection;
        return mysqli_query($connection,$sql);
    }

?>

<?php
if (isset($_POST['submit'])) {

  if (empty($_POST['email']) || empty($_POST['password'])) {
    echo "Username , Password or email is empty, please provide input for the fields.";
  } else {
    // Define $username and $password
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "select * from Users where password= '$password' AND email='$email'";
    $result = mysqli_query($connection,$sql);

    echo mysqli_num_rows($result). " is the number of rows";
    if (mysqli_num_rows($result) == 1) {  
        echo "Yay";
      } else { // no such login
       echo $sql;
    }

    mysqli_close($connection); // Closing Connection

  }

}
?>
