<?php
$cakeDescription = "Edit Ticket"
?>

<?php
$cakeDescription = 'Add Ticket';
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
<section id="container">
    <?= $this->element("front/header");?>
    <?= $this->element("front/nav_menu");?>

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
            <div class="row mt">
                <div class="col-md-12">
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h5><i class="fa fa-tasks"></i> Ajouter un ticket</h5>
                            </div>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="task-content">

                                <form class="form-horizontal style-form" action="/traitement-form-add-ticket" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label" for="inputTitle">Titre du ticket</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputTitle" name="title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label" for="inputContent">Description complète du ticket</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputContent" name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label" for="inputSelect">Niveau d'urgence</label>
                                        <div class="col-sm-10">
                                            <select id="inputSelect" class="form-control" name="level">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
    <!--main content end-->

    <?= $this->element("front/footer");?>


</section>

</body>

</html>

