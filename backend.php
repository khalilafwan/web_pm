<?php

include 'fungsi.php';


$functionName = htmlspecialchars($_GET['functionName']);

    switch ($functionName){
        case 'getData':
            getData();
            break;
        
        case 'getDataLain':
            getDataLain();
            break;

        default:
            break;    
    }

    function getData(){

        global $koneksi;
        $data=[];
        $query = mysqli_query($koneksi, "SELECT MONTH(tgl_jo) as month, COUNT(*) as project_count FROM data_monitoring GROUP BY MONTH(tgl_jo)");

        while($row = mysqli_fetch_assoc($query)){
            $data[]=$row; 
        }
        

        echo json_encode($data);
    }