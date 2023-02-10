<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login</title>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div id="login-page">
    <div class="container">
        <?php
        /** @var Form $form */

        use Cake\Form\Form;

        echo ($this->Form->create());
        echo('<h2 class="form-login-heading">Connexion</h2>');
        echo('<div class="login-wrap">');
        echo($this->Form->control('name', ['required' => true]));
        echo($this->Form->control('password', ['required' => true, 'type' => 'password']));
        echo($this->Form->submit(('Se Connecter')));
        echo($this->Form->end());
        echo('</div>');
        ?>
    </div>
  </div>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
