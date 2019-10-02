<?php
//php comment
$link = mysqli_connect("localhost", "id5213884_root", "ABCD1234", "id5213884_gecskp");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "create table User(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name CHAR(30) NOT NULL,
	mailid VARCHAR(40) NOT NULL,
        password VARCHAR(8) NOT NULL,
	
    
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
