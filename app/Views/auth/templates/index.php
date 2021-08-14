<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon-->
    <link href="<?= base_url(); ?>/img/unj.png" rel="shortcut icon" type="image/icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/../../plugins/fontawesome-free/css/all.min.css">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Masuk</title>
</head>

<body style="background-color: #00acc1 ;">

    <?= $this->renderSection('auth-content'); ?>
</body>

</html>