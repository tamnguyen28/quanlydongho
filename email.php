<?php
    $to = "nhmtam.c3tqcap.a3@gmail.com";
    $subject = 'Wactchstyle';
    $message = 'Bạn đã đặt hàng thành công, đơn hàng sẽ vận chuyển đến bạn trong thời gian sớm nhất, cảm ơn bạn!!';
    $header = "From: watchstyle@gmail.com";

    if(mail($to, $subject, $message, $header)==true){
        echo 'Đặt hàng thành công!!! => Cảm ơn bạn !!!';
    }else{
        echo 'Đặt hàng thất bại';
    }
?>