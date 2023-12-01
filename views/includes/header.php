<!DOCTYPE html>
<html lang="es">

  <head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>

  <!-- Meta Tags -->
  <?php foreach ($meta as $key => $value): ?>
    <meta content="<?= $value ?>" name="<?= $key ?>">
  <?php endforeach; ?>

  <!-- Favicons -->
  <link href=<?= ASSETS . "img/favicon.ico" ?> rel="icon">
  <link href=<?= ASSETS . "img/apple-touch-icon.png" ?> rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=<?= ASSETS . "vendor/bootstrap/css/bootstrap.min.css" ?> rel="stylesheet">
  <link href=<?= ASSETS . "vendor/icofont/icofont.min.css" ?> rel="stylesheet">
  <link href=<?= ASSETS . "vendor/boxicons/css/boxicons.min.css" ?> rel="stylesheet">
  <link href=<?= ASSETS . "vendor/venobox/venobox.css" ?> rel="stylesheet">
  <link href=<?= ASSETS . "vendor/line-awesome/css/line-awesome.min.css" ?> rel="stylesheet">
  <link href=<?= ASSETS . "vendor/owl.carousel/assets/owl.carousel.min.css" ?> rel="stylesheet">
  <link href=<?= ASSETS . "vendor/aos/aos.css" ?> rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=<?= ASSETS . "css/style.css" ?> rel="stylesheet">

  </head>
  
  <body>