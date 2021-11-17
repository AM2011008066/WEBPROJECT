<?php

function toJSON($conn, $sql){
    $myArray = array();
    if ($result = $conn->query($sql)) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        return $myArray;
    }
}


?>