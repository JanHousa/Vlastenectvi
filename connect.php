<?php
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost","root","","register");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(email, password)
            values(?, ?)");
        $stmt->bind_param("ss",$email, $password);
        $stmt->execute();
        echo "registrace proběhla úspěšně...";
        $stmt->close();
        $conn->close();

    }
?>