<?php 
$data = array(
    'username' => $_POST['id_hang'],
    'password' => $_POST['so_luong']
);

echo json_encode($data);


?>