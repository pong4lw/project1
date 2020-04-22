<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>" />

<style type="text/css">
    body{
      background-color:#555;
    
    }

    h2,h3,h4,h5{
      color:#ffffff;
      /*      border-top: #4F790F 3px solid;*/
    }

    body {
      line-height: 1.5em;
      font-size: 12px;
      color: #cccccc;
    }

    #header{
      border-color:#4F790F;
    }

    #sidebar{
      background-color: #444444;

      color:#ffffff;
    }
    #menu a{
      color:#ffffff;

    }

    #major{
      color:#ffffff;
    }
    .table{
      padding:5px;
      background: linear-gradient(#888888, #555555, #555555, #888888);
    }
    
    h3{
      padding-left:15px; 
      border-left: #4F790F 5px solid;
    }
    .table_row{
      border:  #666666 1px solid;
    }

  </style>
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
            <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © FX Supo 2020</small>
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
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">キャンセル</button>
                        <a class="btn btn-primary" href="<?php echo e(url('/logout')); ?>">ログアウト</a>
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
        <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
        <script src="<?php echo e(asset('js/common.js')); ?>"></script>

        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script src="<?php echo e(asset('js/jquery.datetimepicker.full.min.js')); ?>"></script>

    </div>
    <?php echo $__env->yieldContent('footer_js'); ?>
</body>

</html>
<?php /**PATH /home/fxsp/www/server/resources/views/layouts/user.blade.php ENDPATH**/ ?>