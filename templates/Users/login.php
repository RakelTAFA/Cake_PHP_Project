<!DOCTYPE html>
<html lang="fr">
<head>
    <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login</title>
    <?= $this->Html->css(['style','/js/bootstrap/css/bootstrap.min','/js/font-awesome/css/font-awesome','/js/font-awesome/css/font-awesome.min']) ?>
    <?= $this->Html->script(['common-scripts','bootstrap/js/bootstrap.min','jquery/jquery.min'])?>
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
</body>
</html>
