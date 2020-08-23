<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/images/favicon.ico") ?>">
  <title>od-school</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href=" <?= base_url("assets/css/signin.css") ?> " rel="stylesheet">
</head>
<body class="text-center">

  <form class="form-signin" method="post" action="<?= base_url("od-admin") ?>"> 
    <?php if (!empty($this->session->userdata('MessageErreur'))) :?>
      <div class="alert alert-danger">
        <?= $this->session->userdata('MessageErreur') ?>
      </div>
    <?php endif; ?>
    <img class="mb-4" src="<?= base_url("assets/images/logo.png") ?>">
    <h1 class="h3 mb-3 font-weight-normal">Connectez-vous SVP!</h1>
    <input type="text" id="tel_email" class="form-control" name="tel_email" value="<?= set_value('tel_email') ?>" placeholder="Votre email ou votre numéro de téléphone"  autofocus>
    <?= form_error("tel_email") ?>
    <input type="password" id="password" class="form-control" name="password" placeholder="Votre mot de passe">
    <?= form_error("password") ?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Me connecter</button>
    <a href="<?= base_url() ?>" class="btn btn-lg btn-info btn-block">Retour à l'accueil</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
  </form>
</body>
</html>
