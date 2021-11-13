<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="author" content="MC Project">
    <link href="<?= base_url('assets/base'); ?>/img/favicon.png" rel="icon">
    <title><?= $title ?></title>
    <link href="<?= base_url('assets/admin'); ?>/vendor/fontawesome-free/css/all.min.css?SIDOINIKAHV2" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin'); ?>/vendor/bootstrap/css/bootstrap.css?SIDOINIKAHV2" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin'); ?>/css/ruang-admin.css?SIDOINIKAHV2" rel="stylesheet">

</head>

<body class="bg-gradient-login">
<?php 
 echo view($view);
?>
<script src="<?= base_url('assets/admin'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/admin'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/admin'); ?>/js/ruang-admin.min.js"></script>
</body>
<script>
setTimeout("$('#ikierror').hide();", 2000);
</script>

</html>