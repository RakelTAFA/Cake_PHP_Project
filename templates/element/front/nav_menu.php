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
                <?php
                echo($this->Html->link(
                    'Tableau de bord',[
                    'controller'=>'Tickets','action' =>'index'
                ],[
                    'class' => 'index'
                ]));
                ?>
            </li>
            <li class="mt">
                <?php
                echo($this->Html->link(
                    'Les Tickets',[
                    'controller'=>'Tickets','action' =>'listing'
                ],[
                    'class' => 'listing'
                ]));
                ?>
            </li>
        </ul>
    </div>
</aside>
