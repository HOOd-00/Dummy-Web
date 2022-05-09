<?php
    session_start();
    include_once ("config.php");

    $key = "x5i4r5g4n4f4k5w2b4";
    $user_name = $_POST["username"];

    $username = encode($user_name, "prayat");

    if (empty($user_name)) {  
        echo "<script>alert('ใจเย็นไอ่เสือ');</script>";
        echo "<script>location.href='kill_session.php';</script>";
    }

    if ($username == $key) {
        $_SESSION['USERNAME'] = $user_name;

        echo "<script>location.href='lahut2.php';</script>";
    } else {
        echo "<script>alert('ขอโทษด้วยน้า ออเจ้าคงไม่ใช่คนที่ข้าตามหา วะฮะฮ่า!');</script>";
        echo "<script>location.href='index.php';</script>";
    }
?>