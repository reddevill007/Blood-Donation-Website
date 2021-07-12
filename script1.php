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

        $fname = $_POST['donar_first_name'];
        $lname = $_POST['donar_last_name'];
        $age = $_POST['DOB'];
        $blood = $_POST['group'];
        $ldate = $_POST['Last_date'];
        $phno = $_POST['ph_no'];
        $add = $_POST['st_add'];
        $city = $_POST['city'];
        $state = $_POST['state'];


        $sql = "INSERT INTO `blood`.`donation` (`first_name`, `last_name`, `dob`, `bd_group`, `last_donate`, `ph_number`, `st_add`, `city`, `state`, `dt`) VALUES ('$fname', '$lname', '$age', '$blood', '$ldate', '$phno', '$add', '$city', '$state', current_timestamp());";

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