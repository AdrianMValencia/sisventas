<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POS | Systems</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=====================================
        VINCULOS CSS
    ======================================-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <!-- Theme style -->
    <link href="public/css/plugins/adminlte.min.css" rel="stylesheet" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="public/css/plugins/OverlayScrollbars.min.css">
    <!-- jdSlider -->
    <link rel="stylesheet" href="public/css/plugins/jdSlider.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="public/css/plugins/select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="public/css/plugins/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="public/css/plugins/responsive.bootstrap4.min.css">
    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="public/css/style.css">
    <!--=====================================
        VINCULOS JS
    ======================================-->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js">
    </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js">
    </script>
    <!-- DataTables -->
    <script src="public/js/plugins/jquery.dataTables.min.js"></script>
    <script src="public/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="public/js/plugins/dataTables.responsive.min.js"></script>
    <script src="public/js/plugins/responsive.bootstrap4.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="public/js/plugins/sweetalert2.js"></script>
    <!-- AdminLTE App -->
    <script src="public/js/plugins/adminlte.min.js">
    </script>
    <!-- overlayScrollbars -->
    <script src="public/js/plugins/jquery.overlayScrollbars.min.js">
    </script>
    <!-- jdSlider -->
    <script src="public/js/plugins/jdSlider.js">
    </script>
    <!-- Select2 -->
    <script src="public/js/plugins/select2.full.min.js">
    </script>
    <!-- DataTables -->

</head>

<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        /*======================================
            HEADER
        ======================================*/
        include "pages/modules/header.php";
        /*======================================
            MENU
        ======================================*/
        include "pages/modules/menu.php";
        /*======================================
            CONTENIDO
        ======================================*/
        if (isset($_GET["page"])) {
            if (
                $_GET["page"] == "categories" ||
                $_GET["page"] == "start"
            ) {
                include "pages/" . $_GET["page"] . ".php";
            } else {
                include "pages/error404.php";
            }
        } else {
            include "pages/start.php";
        }
        /*======================================
            FOOTER
        ======================================*/
        include "pages/modules/footer.php";
        ?>
    </div>
    <script src="public/js/template.js"></script>
    <script src="public/js/category.js"></script>
</body>

</html>