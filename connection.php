<?php  

// host, DB name, User, Password




// Because it is not a best practice to check database is working or not

// if($conn == true) {
//     echo("Connection is working fine");
// } else {
//     echo("something is wrong!");
// }


try {

    $host       = "localhost";
    $dbname     = "blog_post";
    $user       = "root";
    $password   = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user , $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOExeption $e) {
    echo $e-> getMessage();
}

$rows = $conn->query("select body from posts"); 

while($row = $rows->fetch()) {
    echo $row['body'] . "<br>";
}


?>