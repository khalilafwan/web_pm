<?php
require_once 'koneksi.php';

// Function Input Data Konsesi
function inputdatakonsesi($data)
{
    global $conn;
    $idkonsesi = htmlspecialchars($data["id_konsesi"]);
    $jo = htmlspecialchars($data["jo"]);
    $wo = htmlspecialchars($data["wo"]);
    $nameproject = htmlspecialchars($data["nama_project"]);
    $namepanel = htmlspecialchars($data["nama_panel"]);
    $unit = htmlspecialchars($data["unit"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $no_rpb = htmlspecialchars($data["no_rpb"]);
    $no_po = htmlspecialchars($data["no_po"]);
    $kode_material = htmlspecialchars($data["kode_material"]);
    $konsesi = htmlspecialchars($data["konsesi"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $nolkpj = htmlspecialchars($data["no_lkpj"]);
    $status = htmlspecialchars($data["status"]);
    $tglmatrial = htmlspecialchars($data["tgl_matrial_dtg"]);
    $tglpasang = htmlspecialchars($data["tgl_pasang"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "INSERT INTO konsesi
                (id_konsesi,jo,wo,nama_project,nama_panel,unit,jenis,no_rpb,no_po,kode_material,konsesi,jumlah,no_lkpj,status,tgl_matrial_dtg,tgl_pasang,keterangan)
                VALUES
                ('$idkonsesi', '$jo', '$wo', '$nameproject', '$namepanel', '$unit', '$jenis','$no_rpb', '$no_po','$kode_material','$konsesi', '$jumlah',
                '$nolkpj', '$status', '$tglmatrial', '$tglpasang', '$keterangan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

// Function Hapus Data Konsesi
function hapusKonsesi($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM konsesi WHERE id_konsesi = '$id'");
    return mysqli_affected_rows($conn);
}

// Function Edit Data Konsesi
function updatedatakonsesi($data)
{
    global $conn;
    $id = $data["id_konsesi"];
    $jo = htmlspecialchars($data["jo"]);
    $wo = htmlspecialchars($data["wo"]);
    $nameproject = htmlspecialchars($data["nama_project"]);
    $namepanel = htmlspecialchars($data["nama_panel"]);
    $unit = htmlspecialchars($data["unit"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $konsesi = htmlspecialchars($data["konsesi"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $nolkpj = htmlspecialchars($data["no_lkpj"]);
    $status = htmlspecialchars($data["status"]);
    $tglmatrial = htmlspecialchars($data["tgl_matrial_dtg"]);
    $tglpasang = htmlspecialchars($data["tgl_pasang"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "UPDATE konsesi SET jo='$jo',wo='$wo',nama_project='$nameproject',nama_panel='$namepanel',unit='$unit',jenis='$jenis',konsesi='$konsesi',jumlah='$jumlah',no_lkpj='$nolkpj',status='$status',tgl_matrial_dtg='$tglmatrial',tgl_pasang='$tglpasang',keterangan='$keterangan' WHERE id_konsesi='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}
?>