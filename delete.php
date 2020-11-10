<?php
    //Kết nối databse
    include 'connect.php';
    
    $id = $_GET['id'];
    echo $id;
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "delete from product WHERE id='".$id."'";
    // Chạy câu SQL
    if ($result = $con->query($sql)) {
        header('Location:product.php');
        
    }
    
?>