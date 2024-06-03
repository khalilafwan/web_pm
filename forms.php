<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Forms</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <h2 class="text-center">Form Konsesi</h2>
    <form class="form-horizontal">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-4">JO</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control">
                </div>
            </div>


            <div class="form-group">
                <label class="control-label col-sm-4">WO</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-4">Nama Project</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Nama Panel</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-2">Unit</label>
                <div class="col-sm-8">
                <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-2">Jenis</label>
                <div class="col-sm-8">
                <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-2">Konsesi</label>
                <div class="col-sm-8">
                <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-2">Jml</label>
                <div class="col-sm-8">
                <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-2">No. LKPJ</label>
                <div class="col-sm-8">
                <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-sm-2">Status</label>
                <div class="col-sm-8">
                <input type="text" class="form-control">
                </div>
            </div>
        </div>


        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-sm-4 control-label">TGL Matrial Datang</label>
                <div class="col-sm-8">
                    <input type="date" class="date-end ml-5 form-control datepicker col-sm-8" placeholder="Date End">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-sm-4 control-label">TGL Pasang</label>
                <div class="col-sm-8">
                    <input type="date" class="date-end ml-5 form-control datepicker col-sm-8" placeholder="Date End">
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label class="col-sm-4 control-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-primary waves-effect waves-light " id="btn-submit">Simpan</button>
        </div>
        <input type="hidden" name="action" id="action" value="event_dialog_add_newpartnerdata" />
    </form>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>