<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Akhmat Safrudin <somat@artikulpi.com>">
        <title>Kriptografi - SentraLab</title>

        <link href="media/css/bootstrap.min.css" rel="stylesheet">
        <link href="media/css/style.css" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?php echo ROOT_URL;?>">Kriptografi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo ROOT_URL . '?mod=rsa';?>">RSA</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo ROOT_URL . '?mod=aes';?>">AES</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo ROOT_URL . '?mod=md5';?>">MD5</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo ROOT_URL . '?mod=sha';?>">SHA</a>
                    </li>
                </ul>
            </div>
        </nav>
