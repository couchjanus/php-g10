<?php

// $fcomments = DB."comments";

// if (file_exists($fcomments)) {
//     $fhandle = fopen($fcomments, "rt");
//     $comments = '';
//     while (!feof($fhandle)) {
//         $comments .= fread($fhandle, 4096);
//     }
//     fclose($fhandle);
// } else {
//     echo "Файл не существует";
// }


// file_get_contents
// $comments = file_get_contents(DB."comments");

// count, implode, str_replace, htmlspecialchars

// $file = file(DB."comments");
// $count = count($file);
// $comments = str_replace("\n", "<br />\n", htmlspecialchars(implode("\n", $file)));

// file, str_replace, htmlspecialchars, implode 
// $comments = str_replace("\n", "<br />\n", htmlspecialchars(implode("\n", file(DB."comments"))));

$username = null;  
$email = null;  
$message =  null;  
$result = false;

// if (!empty($_POST)) {
//     $username = $_POST['username'];  
//     $email = $_POST['email'];  
//     $message =  $_POST['message'];  
 
//     if (!$username or !$email or !$message) {
//         $error = "<b>please complete all the fields</b><br><br>";
//     } else {
//         $result = true;
//     }
// }

// add comment to comments.txt

// if (!empty($_POST)) {
    
//     if ( !$_POST['username'] or !$_POST['email'] or !$_POST['message']){
//         $error = "<b>please complete all the fields</b><br><br>";
//     } else {
//         $result = true;
//         $fields = [];

//         $username = $_POST['username'];
//         array_push($fields, $username); 
//         $email = $_POST['email'];
//         array_push($fields, $email); 
//         $message = $_POST['message'];
//         array_push($fields, $message); 
//         $appended_at = date("Y-m-d");
//         array_push($fields, $appended_at); 

//         // $appended_at =  date("Y/m/d");
//         // $appended_at =  date("Y.m.d");
//         // $appended_at =  date("Y-m-d");
//         // $appended_at =  date("l");

//         $handle = fopen(DB."comments.csv", "a+");

//         $string = $username.":".$email.":".$message.":".$appended_at."\r\n";

//         // fwrite($handle, $string);

//         // file_put_contents(DB."comments.csv", $string, FILE_APPEND);

//         fputcsv($handle, $fields, ':');

//         fclose($handle);

//     }
    
// }

// $comments = [];

// $handle = fopen(DB."comments.csv", "rt");

// while (($row = fgetcsv($handle, 10000, ":")) !== false) { 
//     array_push($comments, $row); 
// } 
// fclose($handle); 

require_once VIEWS.'guestbook/index.php';