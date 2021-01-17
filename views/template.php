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
    <link href="views/css/plugins/adminlte.min.css" rel="stylesheet" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="views/css/plugins/OverlayScrollbars.min.css">
    <!-- jdSlider -->
    <link rel="stylesheet" href="views/css/plugins/jdSlider.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="views/css/plugins/select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="views/dataTables/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="views/dataTables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="views/css/style.css">
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
    <script src="views/dataTables/datatables/jquery.dataTables.min.js"></script>
    <script src="views/dataTables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="views/dataTables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="views/dataTables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/js/plugins/adminlte.min.js">
    </script>
    <!-- overlayScrollbars -->
    <script src="views/js/plugins/jquery.overlayScrollbars.min.js">
    </script>
    <!-- jdSlider -->
    <script src="views/js/plugins/jdSlider.js">
    </script>
    <!-- Select2 -->
    <script src="views/js/plugins/select2.full.min.js">
    </script>
    <!-- DataTables -->

</head>

<body class="hold-transition sidebar-collapse sidebar-mini">
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
        }
        /*======================================
            FOOTER
        ======================================*/
        include "pages/modules/footer.php";
        ?>
    </div>
    <script src="views/js/template.js"></script>
</body>

</html>