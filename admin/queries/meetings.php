<?php
include "./session.php";

if (isset($_POST['meeting_add'])) {
    $meet_d = $_POST;

    $id = "select max(meetingID) as id from meetings";
    $id = mysqli_query($conn, $id);
    $id = mysqli_fetch_assoc($id);
    $id = $id['id']+1;
    
    $meetin_add = "INSERT INTO `meetings`(`name`, `class`, `subject`, `attendeePW`, `moderatorPW`, `welcome`, `record`, `created`) VALUES ('{$meet_d['name']}',{$meet_d['class']},'{$meet_d['subject']}','student@123','teacher@123','{$meet_d['welcome']}','{$meet_d['record']}','{$_SESSION['user_name']}')";
    echo $meetin_add."<br>";
    $meet = mysqli_query($conn,$meetin_add);
    $IP = '192.168.0.105';  // Server IP where BigBlueButton (BBB) Installed
    $Port = 80;
    $string = "createname={$meet_d['name']}&meetingID=$id&attendeePW=student@123&moderatorPW=teacher@123&welcome={$meet_d['welcome']}&record={$meet_d['record']}";
    // echo $string;
    $salt = "OdiMeP9dzj1LNRfXL2dilSJVwl5RmX1m7m9IVfQ";  // security salt for BBB & API
    $sha = sha1($string . $salt);
    $link = "name={$meet_d['name']}&meetingID=$id&attendeePW=student@123&moderatorPW=teacher@123&welcome={$meet_d['welcome']}&record={$meet_d['record']}&checksum=" . $sha;
    $x = "http://192.168.0.105/bigbluebutton/api/create?" . $link;
    echo file_get_contents($x);   
}
?>