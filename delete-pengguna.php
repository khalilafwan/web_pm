<?php
    require 'fungsi.php';

    $id = $_GET["id"];

    if(hapusPengguna($id)>0){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tables-pengguna.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href='tables-pengguna.php';
                </script>
                ";
        }
?>