<?php
$servername="localhost";
$database="input";
$username="root";
$pasword="";

$con=mysqli_connect($servername,$username,$pasword,$database);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
$sql= "SELECT * FROM user";
$result= $con->query($sql);

if($result->num_rows >0){
    while($row= $result->fetch_assoc()){
        echo "Buku :". $row["id"]. "" . $row["name"]."Buku :". $row["age"]. "" . $row["city"]. "<br>";
    }
}
else{
    echo "0 result";
}
$con->close();
?>