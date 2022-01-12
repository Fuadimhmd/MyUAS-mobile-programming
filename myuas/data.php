<?php


    require_once('connect.php');

    $query = "SELECT * FROM jersey";
    $sql   = mysqli_query($db_connect, $query);
    
    $result = array();
    
    if ($sql) {
        $result = array();
        while($row = mysqli_fetch_array($sql)){
            array_push($result, array(
                'id' => $row['id'],
                'bahan' => $row['bahan'],
                'kategori' => $row['kategori'],
            ));
        }

        echo json_encode( array('fwapparel' => $result));
    }


?>
