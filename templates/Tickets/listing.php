<?php
$cakeDescription = 'Ticket List';
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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> To-Do List</h3>
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> Liste des tâches a faire / faites</h5>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">
                  <ul class="task-list">
                      <!--
                      <?php
                      /*
                      $tickets = $db->read("tickets",["conditions"=>[
                              "user_id"=>$_SESSION['user']['id'],
                      ],
                          "limit"=>10,
                          "order"=>["id DESC"]
                      ]);
                      foreach ($tickets as $ticket) :
                      */
                        ?>
                          <li class="tooltips" title="<?php/* $ticket['description'] */?>">
                            <div class="task-title">
                                <span class="task-title-sp <?php /*($ticket['done']?'done':'') ?>"><?= $ticket['title']*/ ?></span>
                                <span class="badge <?php /*($ticket['level'] <= 4 ? 'bg-theme' : 'bg-warning') ?>"><?= $ticket['level'] */?></span>
                                <div class="pull-right hidden-phone">
                                    <?php
                                    /*
                                    if ($ticket['done']):
                                    */
                                    ?>
                                        <a href="#" class="btn btn-warning btn-xs"><i class=" fa fa-close"></i></a>
                                    <?php
                                    //else:
                                    ?>
                                        <a href="#" class="btn btn-success btn-xs"><i class=" fa fa-check"></i></a>
                                    <?php
                                    //endif;
                                    ?>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                </div>
                            </div>
                          </li>
                      <?php
                      //endforeach;
                      ?>
                      -->
                  </ul>
                </div>
                <div class=" add-task-row">
                  <a class="btn btn-success btn-sm pull-left" href="form-edit">Ajouter un nouveau ticket</a>
                </div>
              </div>
            </section>
          </div>
          <!-- /col-md-12-->
        </div>

      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
      <?= $this->element("front/footer");?>

  </section>

</body>

</html>
