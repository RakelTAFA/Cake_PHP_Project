<?php
$cakeDescription = 'Cake_PHP';
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
    <?= $this->element("front/header");?>
    <?= $this->element("front/nav_menu");?>
    <?= $this->Flash->render();?>
    <?= $this->fetch('content');?>
    <?= $this->element("front/footer");?>
</body>
</html>
