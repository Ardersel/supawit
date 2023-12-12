<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $web = $_POST['web'];
    $role = $_POST['role'];
    


    $servername = 'localhost';
    $username = 'root';
    $password1 = "";
    $dbname = "db_employee1";

    $conn = new mysqli($servername, $username, $password1, $dbname);
    if ($conn->connect_error) {
        die("". $conn->connect_error);
    }

    $sql = "INSERT INTO employee (username, password, city, webserver, role) 
            VALUES ('$email','$password','$city','$web','$role')";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    }  else{
        echo"error".$sql."<br>".$conn->error;
    }
    $conn->close();
    ?>








?>