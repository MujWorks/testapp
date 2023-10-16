<?php
function dbConnect() {
    $db = "testdb";
    $host = "localhost";
    $user = "root";
    $pass = "";

    return new mysqli($host, $user, $pass, $db);
}

function insertMessage($post) {
    // get the post records
    $txtName = $post['txtName'];
    $txtEmail = $post['txtEmail'];
    $txtPhone = $post['txtPhone'];
    $txtMessage = $post['txtMessage'];

    $conn = dbConnect();

    $query = "insert into messages(ID, name, email, phone, message) values (NULL, 
                '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
    
    $res = $conn->query($query);
    $conn->close();
}

function printMessages() {
    $conn = dbConnect();
    $query = "select * from messages";
    $res = $conn->query($query);
    
    if($res->num_rows > 0) {
        echo "<table>";
        while($row = $res->fetch_assoc()) {
            echo "<tr>";
                echo "<td>".$row["ID"]."</td><td>".$row["name"].
                "</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["message"]."</td>";
            echo "</tr>";
            #echo "<br>";
        }
        echo "</table>";
    }
    $conn->close();


}
?>