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
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<!--    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">-->
    <!-- Page level plugin CSS-->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.datetimepicker.min.css') }}" rel="stylesheet">
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
            @yield('content')
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

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
                    <div class="modal-body">作業途中のデータは残りません、データの保存を確認してください。<br>ログアウトをしますか？</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <!-- Page level plugin JavaScript-->

        {{--<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>--}}
        <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

        <script src="{{ asset('js/sb-admin.min.js') }}"></script>
        <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
        <script src="{{ asset('js/common.js') }}"></script>
        <script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>
        
    </div>
    @yield('footer_js')
</body>

</html>
