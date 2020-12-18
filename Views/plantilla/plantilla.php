<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Starter</title>
  <link rel="stylesheet" href="<?= PLANTILLA ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>dist/js/sweetAlert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>css/chosen.min.css">

  <!-- <link rel="stylesheet" href="<?= PLANTILLA ?>css/style.css">
  <link rel="stylesheet" href="<?= PLANTILLA ?>css/demo.css"> -->
  <link href="<?= PLANTILLA?>dist/img/AdminLTELogo.png" rel="shortcut icon">
</head>
<?php if (Accesos::getDatos('validados')) {


?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include 'nav.php'; ?>
  <?php include 'aside.php' ?>
  <div class="content-wrapper">

<?php } ?>




