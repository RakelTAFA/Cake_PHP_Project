<?php
$cakeDescription = 'Login';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['style','/js/bootstrap/css/bootstrap.min','/js/font-awesome/css/font-awesome','/js/font-awesome/css/font-awesome.min']) ?>
    <?= $this->Html->script(['common-scripts','bootstrap/js/bootstrap.min','jquery/jquery.min'])?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <div id="login-page">
    <div class="container">
        <?php
        use Cake\Form\Form;

        echo ($this->Form->create(null,["class"=>"form-login"]));
        echo('<h2 class="form-login-heading">Connexion</h2>');
        echo('<div class="login-wrap">');
        echo($this->Form->control('name', ["placeholder" => "Nom d'utilisateur","id" => "nameInput",'class' => 'form-control','required' => true]));
        echo($this->Form->control('password', ["id" => "passwordInput",'class' => 'form-control','required' => true, 'type' => 'password']));
        echo($this->Form->submit('Se Connecter',["class" => "btn btn-theme btn-block"]));
        echo($this->Form->end());
        echo('</div>');
        ?>
    </div>
  </div>
</body>
</html>
