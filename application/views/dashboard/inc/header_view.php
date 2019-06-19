<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodiDash</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css">

    <script src="<?= base_url() ?>public/js/jquery.js"></script>
    <script src="<?= base_url() ?>public/js/bootstrap.js"></script>
<body>

<header>
    CodiDash
</header>

<nav>
    <a href="#">Dashboard</a>
    <a href="#">User</a>
    <a href="<?= base_url('dashboard/logout') ?>">Logout</a>
</nav>

<!-- start:wrapper -->
<div class="wrapper">