<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.2.0-dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>LogTech - Serviços de logística</title>
</head>

<body>
    <!-- MENU -->
    <?php include('src/components/menu/index.php')?>

    <div id="all">
        <!-- DASH SECTION -->
        <?php include('src/pages/dashboard/index.php'); ?>

        <!-- USERS SECTION -->
        <?php include("src/pages/users/index.php")?>

        <!-- MESSAGES SECTION -->
        <?php include("src/pages/messages/index.php")?>

        <!-- ANALYTICS SECTION -->
        <?php include('src/pages/analytics/index.php')?>

        <!-- FILES SECTION -->
        <?php include('src/pages/files/index.php')?>

        <!-- ORDERS SECTION -->
        <?php include('src/pages/orders/index.php')?>

        <!-- SAVED SECTION -->
        <?php include('src/pages/saved/index.php')?>

        <!-- SETTINGS SECTION -->
        <?php include('src/pages/settings/index.php')?> 
    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/main.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>

</html>