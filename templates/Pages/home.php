<!DOCTYPE html>
<html lang="fr">
<body>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
            <div class="row mt">
                <div class="col-md-12">
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h5><i class="fa fa-tasks"></i> Liste des tickets</h5>
                            </div>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="task-content">
                                <ul class="task-list">
                                    <?php
                                    /** @var Database $database */
                                    $tickets = $database->read('tickets',[
                                        'conditions' => [
                                            'user_id' => $_SESSION['user']['id']
                                        ],
                                        'limit' => 5,
                                        'order' => ['id DESC']
                                    ]);

                                    foreach ($tickets as $ticket) :
                                        ?>
                                        <li class="tooltips" title="<?= $ticket['description'] ?>">
                                            <div class="task-title">
                                                <span class="task-title-sp <?= ($ticket['done']?'done':'') ?>"><?= $ticket['title'] ?></span>
                                                <span class="badge <?= ($ticket['level'] <= 4 ? 'bg-theme' : 'bg-warning') ?>"><?= $ticket['level'] ?></span>
                                                <div class="pull-right hidden-phone">
                                                    <?php
                                                    if ($ticket['done']):
                                                        ?>
                                                        <a href="#" class="btn btn-warning btn-xs"><i class=" fa fa-close"></i></a>
                                                    <?php
                                                    else:
                                                        ?>
                                                        <a href="#" class="btn btn-success btn-xs"><i class=" fa fa-check"></i></a>
                                                    <?php
                                                    endif;
                                                    ?>
                                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                            <div class=" add-task-row">
                                <a class="btn btn-success btn-sm pull-left" href="form-edit">Ajouter un nouveau ticket</a>
                                <a class="btn btn-default btn-sm pull-right" href="todo-list">Voir tous les tickets</a>
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
</section>
</body>

</html>
