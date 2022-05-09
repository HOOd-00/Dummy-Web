<?php
    session_start();
    
    if (empty($_SESSION['USERNAME'])) {  
    echo "<script>alert('อ้ะนั่นแน่ ทำไรอ่าา');</script>";
    echo "<script>location.href='kill_session.php';</script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuck Web</title>
</head>
<body>
    <div style="margin-top: 30px;" align="center">
        <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
        <?php 
            echo ("โอ้วเจอกันสักทีนะ!  ");
            echo $_SESSION['USERNAME'];
            echo("😊") 
        ?>
        <hr>
        <form action="kill_session.php">
            <button>OK</button>
        </form>
    </div>

    <footer style="background-color: lightgray; padding:30px; margin-top: 40%;" align="center">
        <p>copyleft 2022-2099</p>
        <h6>This web is powered by Microsoft 2077</h6>
    </footer>
</body>
</html>