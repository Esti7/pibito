<?php

$host = "localhost";
$dbname = "esti";
$username = "esi";
$password = "obelisk7";
$db_table_name="table1";


$conn = mysqli_connect ($host,$username,$password,$dbname);
//Aca recibo el parametro
session_start();
if (isset($_POST['login'])) {


    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);


    $query = "SELECT * FROM table1 WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            if(password_verify($pass, $row["pass"]))
            {
                //echo "<h1> Login successful </center></h1>";
                //$filepath= 'peron.jpg';
               // echo '<img src="'.$filepath.'">';
                $_SESSION["email"] = $email;
                header("location:entry.php");
            }
    else{
        echo "<h1> Contraseña incorrecta </center></h1>";
    }
    }
    }
        else
            {
                echo '<script>alert("Error de usuario")</script>';
            }
        }

    /*

    $q = "SELECT COUNT(*) as contar from table1 WHERE email ='$email' and pass = '$pass'";

  $consulta = mysqli_query($conn,$q);
  $array = mysqli_fetch_array($consulta);

  if ($array ['contar']> 0){
      echo "<h1> Login successful </center></h1>";
   $filepath= 'peron.jpg';
    echo '<img src="'.$filepath.'">';