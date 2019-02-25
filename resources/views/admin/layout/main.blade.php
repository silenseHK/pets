<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('meta')
    <title>管理后台</title>
    <!-- Bootstrap Styles-->
    <link href="/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="/admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="/admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='/admin/assets/css/font.css' rel='stylesheet' type='text/css' />
    @yield('css')
</head>

<body>
<div id="wrapper">
    @include('admin/layout/top_nav')
    <!--/. NAV TOP  -->
    @include('admin/layout/tar')
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Forms Page <small>Best form elements.</small>
                        </h1>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>

    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="/admin/assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="/admin/assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Js -->
<script src="/admin/assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="/admin/assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="/admin/assets/js/morris/morris.js"></script>


<script src="/admin/assets/js/easypiechart.js"></script>
<script src="/admin/assets/js/easypiechart-data.js"></script>


<!-- Custom Js -->
<script src="/admin/assets/js/custom-scripts.js"></script>
<script src="/admin/js/tar.js"></script>
@yield('js')
</body>

</html>