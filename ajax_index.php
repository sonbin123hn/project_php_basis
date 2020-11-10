<?php
    session_start();
    if(!empty($_POST['idproduct'])) {
        $flag = false;
        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
          
            foreach($_SESSION['cart'] as $key=>$value){
                if($value['idproduct'] == $_POST['idproduct']){
                    $_SESSION['cart'][$key]['qty'] = $_SESSION['cart'][$key]['qty'] + 1;
                    $flag = true;
                }
            }
        }

        if(!$flag) {
            $data=[];
            $data['idproduct'] = $_POST['idproduct'];
            $data['qty'] = 1;
            $_SESSION['cart'][$_POST['idproduct']] = $data;
        }
        echo count($_SESSION['cart']);
    }

?>