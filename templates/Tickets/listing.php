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
                                <?php foreach($tickets as $ticket) :
                                    ?>
                                    <li class="tooltips" title="">
                                        <div class="task-title">
                                            <span class="task-title-sp"><?= $this->Html->link($ticket->title, ['action' => 'index', $ticket->slug]) ?></span>
                                            <span class="badge <?= ($ticket->level <= 4 ? 'bg-theme' : 'bg-warning') ?>">
                                        <?php
                                        echo($this->Html->link($ticket->level,['action' => 'index', $ticket->slug]));
                                        ?></span>
                                            <div class="pull-right hidden-phone">
                                                <?= $this->Html->link('<i class="fa fa-close"></i>', '#', ['class' => 'btn btn-danger btn-xs', 'escape' => false]); ?>
                                                <?= $this->Html->link('<i class="fa fa-check"></i>', '#', ['class' => 'btn btn-success btn-xs', 'escape' => false]); ?>
                                                <?= $this->Html->link('<i class="fa fa-pencil"></i>', '#', ['class' => 'btn btn-primary btn-xs', 'escape' => false]); ?>
                                                <?= $this->Html->link('<i class="fa fa-trash-o"></i>', ['controller' => 'Tickets','action' => 'delete', $ticket->id], ['class' => 'btn btn-danger btn-xs', 'escape' => false]); ?>
                                            </div>

                                        </div>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                        <div class=" add-task-row">
                            <?php
                            echo($this->Html->link(
                                'Ajouter un nouveau ticket',[
                                'controller'=>'Tickets','action' =>'add'
                            ],[
                                'class' => 'btn btn-success btn-sm pull-left'
                            ]));
                            ?>
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
