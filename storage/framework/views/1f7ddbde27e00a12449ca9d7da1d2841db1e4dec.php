<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>レジリエンスアセスメント（有料版 1000円+消費税）</title>
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="レジリエンスアセスメント（有料版 1000円+消費税）のコピー" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="image_src" href="" />
    <meta http-equiv="content-language" content="ja" />

    <!-- Bootstrap core CSS-->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    
    <!-- Page level plugin CSS-->
    <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/jquery.datetimepicker.min.css')); ?>" rel="stylesheet">

    <style>
        .label-required {
            position: relative;
            top: -2px;
        }
        .label-warning {
            background-color: #ff9600;
        }
        .label {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: bold;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
        }
    </style>

</head>

<body class=" sticky-footer" id="page-top">
    <div class="content-wrapper">
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright ©  2020</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo e(url('/user/logout')); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- Core plugin JavaScript-->
        <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
        <!-- Page level plugin JavaScript-->
        
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
        <!-- Custom scripts for all pages-->
        <script src="<?php echo e(asset('js/sb-admin.min.js')); ?>"></script>
        <!-- Custom scripts for this page-->
        <script src="<?php echo e(asset('js/sb-admin-datatables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/common.js')); ?>"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script src="<?php echo e(asset('js/jquery.datetimepicker.full.min.js')); ?>"></script>
    </div>
    <?php echo $__env->yieldContent('footer_js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\kokyakukanri\resources\views/user/layout.blade.php ENDPATH**/ ?>