<?php

    include('db.php');
// them du lieu
    if(isset($_POST['hovaten'])){

        $hovaten=$_POST['hovaten'];
        $sophone=$_POST['sophone'];
        $email=$_POST['email'];
        $tenkh=$_POST['tenkh'];
        $date=$_POST['ngayHienTai'];

        $result =mysqli_query($con,"INSERT INTO tblhocvien (hovaten,phone,email,tenkhoahoc,datetimee) VALUES ('$hovaten','$sophone',
        '$email','$tenkh','$date')");
    }

    ?>