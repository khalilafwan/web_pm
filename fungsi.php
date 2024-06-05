<?php
$conn = mysqli_connect("localhost", "root", "", "db_pm");

if(!$conn){
    die("Koneksi Gagal");
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function inputdata($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $no_jo = htmlspecialchars($data["no_jo"]);
    $tgl_jo = htmlspecialchars($data["tgl_jo"]);
    $nama_project = htmlspecialchars($data["nama_project"]);
    $kode_gbj = htmlspecialchars($data["kode_gbj"]);
    $nilai_harga = htmlspecialchars($data["nilai_harga"]);
    $nama_panel = htmlspecialchars($data["nama_panel"]);
    $tipe_jenis = htmlspecialchars($data["tipe_jenis"]);
    $tipe_fswm = htmlspecialchars($data["tipe_fswm"]);
    $qty_unit = htmlspecialchars($data["qty_unit"]);
    $qty_cell = htmlspecialchars($data["qty_cell"]);
    $warna = htmlspecialchars($data["warna"]);
    $nomor_wo = htmlspecialchars($data["nomor_wo"]);
    $nomor_seri = htmlspecialchars($data["nomor_seri"]);
    $warna = htmlspecialchars($data["warna"]);
    $size_panel_height = htmlspecialchars($data["size_panel_height"]);
    $size_panel_width = htmlspecialchars($data["size_panel_width"]);
    $size_panel_deep = htmlspecialchars($data["size_panel_deep"]);
    $mh_std = htmlspecialchars($data["mh_std"]);
    $mh_aktual = htmlspecialchars($data["mh_aktual"]);
    $tgl_submit_dwg_for_approval = htmlspecialchars($data["tgl_submit_dwg_for_approval"]);
    $tgl_approved = htmlspecialchars($data["tgl_approved"]);
    $tgl_release_dwg_softcopy = htmlspecialchars($data["tgl_release_dwg_softcopy"]);
    $tgl_release_dwg_hardcopy = htmlspecialchars($data["tgl_release_dwg_hardcopy"]);
    $breakdown = htmlspecialchars($data["breakdown"]);
    $busbar = htmlspecialchars($data["busbar"]);
    $targetppcleadtime = htmlspecialchars($data["target_ppc"]);
    $targetengleadtime = htmlspecialchars($data["target_eng"]);
    $tgl_box_selesai = htmlspecialchars($data["tgl_box_selesai"]);
    $due_date = htmlspecialchars($data["due_date"]);
    $tgl_terbit_wo = htmlspecialchars($data["tgl_terbit_wo"]);
    $plan_start_produksi = htmlspecialchars($data["plan_start_produksi"]);
    $aktual_start_produksi = htmlspecialchars($data["aktual_start_produksi"]);
    $plan_fg_wo = htmlspecialchars($data["plan_fg_wo"]);
    $progress = htmlspecialchars($data["progress"]);
    $desc_progress = htmlspecialchars($data["desc_progress"]);
    $status = htmlspecialchars($data["status"]);
    $delivery_no = htmlspecialchars($data["delivery_no"]);
    $delivery_tgl = htmlspecialchars($data["delivery_tgl"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "INSERT INTO data_monitoring
    (id,no_jo,tgl_jo,nama_project,kode_gbj,nilai_harga,nama_panel,tipe_jenis,tipe_fswm,qty_unit,qty_cell
    ,nomor_wo,nomor_seri,warna,size_panel_height,size_panel_width,size_panel_deep,mh_std,mh_aktual,
    tgl_submit_dwg_for_approval, tgl_approved,tgl_release_dwg_softcopy,tgl_release_dwg_hardcopy,breakdown,busbar,
    target_ppc,target_eng,tgl_box_selesai,due_date,tgl_terbit_wo,plan_start_produksi,aktual_start_produksi,
    plan_fg_wo,progress,desc_progress,status,delivery_no,delivery_tgl,keterangan)
    VALUES
    ('$id','$no_jo','$tgl_jo','$nama_project','$kode_gbj','$nilai_harga','$nama_panel','$tipe_jenis',
    '$tipe_fswm','$qty_unit','$qty_cell','$warna','$nomor_wo','$nomor_seri','$size_panel_height',
    '$size_panel_width','$size_panel_deep','$mh_std','$mh_aktual','$tgl_submit_dwg_for_approval','$tgl_approved',
    '$tgl_release_dwg_softcopy','$tgl_release_dwg_hardcopy','$breakdown','$busbar','$targetppcleadtime',
    '$targetengleadtime','$tgl_box_selesai','$due_date','$tgl_terbit_wo','$plan_start_produksi','$aktual_start_produksi',
    '$plan_fg_wo','$progress','$desc_progress','$status','$delivery_no','$delivery_tgl','$keterangan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function getProjectIds()
{
    global $conn;

    $query = "SELECT id FROM data_monitoring"; // Replace 'your_project_table' with the actual table name
    $result = mysqli_query($conn, $query);

    $projectIds = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $projectIds[] = $row['id'];
    }

    return $projectIds;
}


function updatedatamonitoring($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $no_jo = htmlspecialchars($data["no_jo"]);
    $tgl_jo = htmlspecialchars($data["tgl_jo"]);
    $nama_project = htmlspecialchars($data["nama_project"]);
    $kode_gbj = htmlspecialchars($data["kode_gbj"]);
    $nilai_harga = htmlspecialchars($data["nilai_harga"]);
    $nama_panel = htmlspecialchars($data["nama_panel"]);
    $tipe_jenis = htmlspecialchars($data["tipe_jenis"]);
    $tipe_fswm = htmlspecialchars($data["tipe_fswm"]);
    $qty_unit = htmlspecialchars($data["qty_unit"]);
    $qty_cell = htmlspecialchars($data["qty_cell"]);
    $warna = htmlspecialchars($data["warna"]);
    $nomor_wo = htmlspecialchars($data["nomor_wo"]);
    $nomor_seri = htmlspecialchars($data["nomor_seri"]);
    $warna = htmlspecialchars($data["warna"]);
    $size_panel_height = htmlspecialchars($data["size_panel_height"]);
    $size_panel_width = htmlspecialchars($data["size_panel_width"]);
    $size_panel_deep = htmlspecialchars($data["size_panel_deep"]);
    $mh_std = htmlspecialchars($data["mh_std"]);
    $mh_aktual = htmlspecialchars($data["mh_aktual"]);
    $tgl_submit_dwg_for_approval = htmlspecialchars($data["tgl_submit_dwg_for_approval"]);
    $tgl_approved = htmlspecialchars($data["tgl_approved"]);
    $tgl_release_dwg_softcopy = htmlspecialchars($data["tgl_release_dwg_softcopy"]);
    $tgl_release_dwg_hardcopy = htmlspecialchars($data["tgl_release_dwg_hardcopy"]);
    $breakdown = htmlspecialchars($data["breakdown"]);
    $busbar = htmlspecialchars($data["busbar"]);
    $targetppcleadtime = htmlspecialchars($data["target_ppc"]);
    $targetengleadtime = htmlspecialchars($data["target_eng"]);
    $tgl_box_selesai = htmlspecialchars($data["tgl_box_selesai"]);
    $due_date = htmlspecialchars($data["due_date"]);
    $tgl_terbit_wo = htmlspecialchars($data["tgl_terbit_wo"]);
    $plan_start_produksi = htmlspecialchars($data["plan_start_produksi"]);
    $aktual_start_produksi = htmlspecialchars($data["aktual_start_produksi"]);
    $plan_fg_wo = htmlspecialchars($data["plan_fg_wo"]);
    $progress = htmlspecialchars($data["progress"]);
    $desc_progress = htmlspecialchars($data["desc_progress"]);
    $status = htmlspecialchars($data["status"]);
    $delivery_no = htmlspecialchars($data["delivery_no"]);
    $delivery_tgl = htmlspecialchars($data["delivery_tgl"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "UPDATE data_monitoring SET no_jo='$no_jo',tgl_jo='$tgl_jo',nama_project='$nama_project',kode_gbj='$kode_gbj',nilai_harga='$nilai_harga',nama_panel='$nama_panel',tipe_jenis='$tipe_jenis',tipe_fswm='$tipe_fswm',qty_unit='$qty_unit',qty_cell='$qty_cell',nomor_wo='$nomor_wo',nomor_seri='$nomor_seri',warna='$warna',size_panel_height='$size_panel_height',size_panel_width='$size_panel_width',size_panel_deep='$size_panel_deep',mh_std='$mh_std',mh_aktual='$mh_aktual',tgl_submit_dwg_for_approval='$tgl_submit_dwg_for_approval', tgl_approved='$tgl_approved',tgl_release_dwg_softcopy='$tgl_release_dwg_softcopy',tgl_release_dwg_hardcopy='$tgl_release_dwg_hardcopy',breakdown='$breakdown',busbar='$busbar',target_ppc='$targetppcleadtime',target_eng='$targetengleadtime',tgl_box_selesai='$tgl_box_selesai',due_date='$due_date',tgl_terbit_wo='$tgl_terbit_wo',plan_start_produksi='$plan_start_produksi',aktual_start_produksi='$aktual_start_produksi',plan_fg_wo='$plan_fg_wo',progress='$progress',desc_progress='$desc_progress',status='$status',delivery_no='$delivery_no',delivery_tgl='$delivery_tgl',keterangan='$keterangan' WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}



function hapusMonitoring($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_monitoring WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}
function updateDesign($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $designpic = htmlspecialchars($data["design_pic"]);
    $designstart = htmlspecialchars($data["design_start"]);
    $designend = htmlspecialchars($data["design_end"]);

    $query = "UPDATE data_monitoring SET design_pic='$designpic', design_start='$designstart', design_end='$designend' WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateNesting($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nestingpic = htmlspecialchars($data["nesting_pic"]);
    $nestingstart = htmlspecialchars($data["nesting_start"]);
    $nestingend = htmlspecialchars($data["nesting_end"]);

    $query = "UPDATE data_monitoring SET nesting_pic='$nestingpic', nesting_start='$nestingstart', nesting_end='$nestingend' WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateProgram($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $programpic = htmlspecialchars($data["program_pic"]);
    $programstart = htmlspecialchars($data["program_start"]);
    $programend = htmlspecialchars($data["program_end"]);

    $query = "UPDATE data_monitoring SET program_pic='$programpic', program_start='$programstart', program_end='$programend' WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateChecker($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $checkerpic = htmlspecialchars($data["checker_pic"]);
    $checkerstart = htmlspecialchars($data["checker_start"]);
    $checkerend = htmlspecialchars($data["checker_end"]);

    $query = "UPDATE data_monitoring SET checker_pic='$checkerpic', checker_start='$checkerstart', checker_end='$checkerend' WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

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

// Function Baca Data Konsesi
function bacaKonsesi($id)
{
    global $conn;
    $query = "SELECT * FROM konsesi WHERE id_konsesi = '$id'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

// Function Hapus Data Konsesi
function hapusKonsesi($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM konsesi WHERE id_konsesi = '$id'");
    return mysqli_affected_rows($conn);
}

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

function chartMonitoring($conn)
{
    global $conn;
    $querydatamonitoring = "SELECT MONTH(tgl_jo) as month, COUNT(*) as project_count FROM your_table_name GROUP BY MONTH(tgl_jo)";

    $result = $conn->query($querydatamonitoring);

    $data = array_fill(0, 12, 0); // Initialize array with 12 zeros

    while($row = $result->fetch_assoc()) {
        $data[$row['month'] - 1] = $row['project_count']; // PHP months are 1-12, array index 0-11
    }

    return json_encode($data);
}
?>