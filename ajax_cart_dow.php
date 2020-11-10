<?php
    include "connect.php";
    session_start();

    if(!empty($_POST['idcart'])){
        if(!empty($_SESSION['cart']) && isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key=>$value){
                if($value['idproduct'] == $_POST['idcart']){
                    $_SESSION['cart'][$key]['qty'] = $_POST['qty'];
                }
            }
        }
    }
?>