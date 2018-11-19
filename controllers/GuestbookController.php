<?php

// if (!empty($_POST)) {
    
//     if ( !$_POST['username'] or !$_POST['email'] or !$_POST['message'] or !$_POST['subject']){
//         echo "<h2>please complete all the fields</h2>";
//     }
//     else{
//         // подключаемся к серверу
//         $conn = mysqli_connect(HOST, DBUSER, DBPASSWORD, DATABASE) 
//         or die("Ошибка " . mysqli_error($conn));

//         $username = mysqli_real_escape_string($conn, $_POST['username']);
//         $email = mysqli_real_escape_string($conn, $_POST['email']);
//         $subject = mysqli_real_escape_string($conn, $_POST['subject']);
//         $comment = mysqli_real_escape_string($conn, $_POST['comment']);

//         // выполняем операции с базой данных

//         $sql = "INSERT INTO guestbook (username, email, subject, comment) VALUES ('$username', '$email', $subject, '$comment')";

//         mysqli_query($conn, $sql) or die("Ошибка: " . mysqli_error($conn));
//         mysqli_close($conn);
//     }
// }

// $conn = mysqli_connect(HOST, DBUSER, DBPASSWORD, DATABASE) 
//         or die("Ошибка " . mysqli_error($conn));

// $comments = [];
// $sql = "SELECT * FROM guestbook";
// $result = mysqli_query($conn, $sql);
// $resCount = mysqli_num_rows($result);
// while($row = mysqli_fetch_assoc($result)){
//         array_push($comments, $row);
//     }

// // закрываем подключение
// mysqli_close($conn);

require_once VIEWS.'guestbook/index.php';
