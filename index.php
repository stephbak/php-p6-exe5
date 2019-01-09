<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie6</title>
</head>
<body>
  <a href="index.php?week=12">exercice5</a>
  <?php if (isset($_GET['week'])){ ?>
    <p><?= $_GET['week'] ?></p>
  <?php }else{ ?>
    <p>Veuillez renseigner les champs manquants.</p>
  <?php } ?>
</body>
</html>
