<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>顧客管理</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo e(asset('public/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('public/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('public/css/sb-admin.css')); ?>" rel="stylesheet">
    <!-- Page level plugin CSS-->
    <link href="<?php echo e(asset('public/vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/css/jquery.datetimepicker.min.css')); ?>" rel="stylesheet">
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

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div class="content-wrapper">
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>


        <script src="<?php echo e(asset('public/vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo e(asset('public/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
        <!-- Page level plugin JavaScript-->

        
        <script src="<?php echo e(asset('public/vendor/datatables/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset('public/vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo e(asset('public/js/sb-admin.min.js')); ?>"></script>
        <!-- Custom scripts for this page-->

        <script src="<?php echo e(asset('public/js/sb-admin-datatables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/common.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/jquery.datetimepicker.full.min.js')); ?>"></script>

    </div>
    <?php echo $__env->yieldContent('footer_js'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\kokyakukanri\resources\views/layouts/user.blade.php ENDPATH**/ ?>