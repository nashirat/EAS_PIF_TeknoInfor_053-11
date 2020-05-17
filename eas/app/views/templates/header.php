<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul']; ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/img/favicon.png" type="image/ico">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/custom-style.css">
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
</head>
</body>


<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand ml-4 mt-1" href="<?= BASEURL; ?>">
  <img src="<?= BASEURL; ?>/img/navbar.png" class="navbarimg mr-2 mb-1" width="27" height="35">DonasiCovid</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link mt-1" href="<?= BASEURL; ?>/home">Home</a>
      </li>
      <li class="nav-item dropdown mt-1">
      <a class="nav-link dntt dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Donasi Tersalur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= BASEURL; ?>/barang">Barang</a>
          <a class="dropdown-item" href="<?= BASEURL; ?>/uang">Uang</a>
        </div>
      </li>
    </ul>
  </div>
</nav>