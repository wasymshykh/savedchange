<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$settings->fetch('site_title')?></title>

    <link rel="stylesheet" href="<?=URL?>/static/css/bootstrap/bootstrap.min.css">

    <script src="<?=URL?>/static/js/jquery-3.5.1.min.js"></script>
</head>
<body>

    <div class="container p-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="<?=URL?>">
                <img src="<?=URL?>/static/images/logo-icon.png" width="30" height="30" class="d-inline-block align-top" alt="<?=$settings->fetch('site_title')?>" loading="lazy">
                Save<b>D</b>change
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?=URL?>">Home <span class="sr-only">(current)</span></a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="<?=URL?>/signup">Sign up</a></li>
                </ul>
            </div>
        </nav>

        <div class="card">
            <div class="card-body">            
