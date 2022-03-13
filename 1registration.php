<?php
$host = "localhost";
$dbname = "esti";
$username = "esi";
$password = "obelisk7";
$db_table_name="table1";

    $conn = mysqli_connect ($host,$username,$password,$dbname);
   // if ($conn) {
   //     echo "todo ok";
   // }else{
 //       echo "no ok";
//}

if (isset($_POST['register'])) {
//echo "ok";
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);
    $password = password_hash($password, PASSWORD_BCRYPT);



    $query = "INSERT INTO table1 (nombre, apellido, email, pass) VALUES ('$nombre','$apellido','$email','$password')";

    $result = mysqli_query($conn,$query);


        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
            header("location:loginpage.php");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }

}
