<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .sub{
        min-height: 100vh;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    a{
        background: transparent;
        color: #fff;
        border: 2px solid #fff;
        text-decoration: none;
        padding: 10px;
    }

    a:hover{
        background: #fff;
        color: #000;
        border: 2px solid grey;
        text-decoration: none;
        padding: 10px;
    }
</style>

<?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $sub = $_POST['subject'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO `blood`.`contact` (`name`, `email`, `subject`, `message`, `datetime`) VALUES ('$name', '$email', '$sub', '$msg', current_timestamp());";

        // echo $sql;

        if($con->query($sql) == true){
            echo "<div class='sub'>
            <h1 style='text-align: center; color: #fff; margin-bottom: 40px;'>Succesfully inserted</h1>
            <a href='../index.html'>Back to home</a>
        </div>";    
        }

        else{
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
?>
