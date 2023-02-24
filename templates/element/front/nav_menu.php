<aside>
    <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <a href="#">
                    <img src="img/users/<?= ($_SESSION['user']['id']??1) ?>.jpg" class="img-circle" width="80">
                </a>
            </p>
            <h5 class="centered">
                <?= $_SESSION['user']['name']??"" ?>
            </h5>
            <li class="mt">
                <?= $this->Html->link('<i class="fa fa-dashboard"></i>' . '<span>Tableau de bord</span>', '/', ['controller' => 'Tickets', 'action' => 'index','escape' => false]); ?>
            </li>

            <li class="mt">
                <?= $this->Html->link('<i class="fa fa-list"></i>' . '<span>Les tickets</span>','/listing', ['controller' => 'Tickets', 'action' => 'listing', 'escape' => false]); ?>
            </li>
        </ul>
    </div>
</aside>
