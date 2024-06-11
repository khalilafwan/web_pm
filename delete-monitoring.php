<?php
    require 'fungsi.php';

    $id = $_GET["id"];

    if(hapusMonitoring($id)>0){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tables-monitoring.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tables-monitoring.php';
                </script>
                ";
        }
?>