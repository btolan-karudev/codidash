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

    <script src="<?= base_url() ?>public/js/dashboard/template.js"></script>
    <script src="<?= base_url() ?>public/js/dashboard/event.js"></script>
    <script src="<?= base_url() ?>public/js/dashboard/result.js"></script>

    <script src="<?= base_url() ?>public/js/dashboard.js"></script>


<body>

<nav class="navbar">
    <div class="navbar-inner">
        <span class="brand">CodiDash</span>
        <ul class="nav">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">User</a></li>
            <li><a href="<?= base_url('dashboard/logout') ?>">Logout</a></li>
        </ul>
    </div>
</nav>

<!-- start:wrapper -->
<div class="wrapper">
    <div id="error" class="alert alert-error hide"></div>
    <div id="success" class="alert alert-success hide"></div>