<!DOCTYPE html>
<html lang="en">

<head>
    <title>Import CSV File Data into MySQL Database CodeIgniter 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css" rel="stylesheet" />
    <style>
        #frm-add-students label.error {
            color: red;
        }
    </style>
</head>

<body>

    <div class="container">
        <h4 style="text-align: center;">Import CSV File Data into MySQL Database CodeIgniter 4</h4>
        <div class="panel panel-primary">
            <div class="panel-heading">Import CSV File Data into MySQL Database CodeIgniter 4</div>
            <div class="panel-body">
                <?php
                if (session()->get("success")) {
                ?>
                    <div class="alert alert-success">
                        <?= session()->get("success") ?>
                    </div>
                <?php
                }
                ?>
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('upload-student') ?>" id="frm-add-students">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="file">File:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" required id="file" placeholder="Enter file" name="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Validation library file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<!-- Sweetalert library file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

<script>
    $(function() {

        // Adding form validation
        $('#frm-add-students').validate();
    });
</script>