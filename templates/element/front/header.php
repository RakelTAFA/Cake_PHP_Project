<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <?php
    echo($this->Html->link(
        'ADMIN',[
        'controller'=>'Pages','action' =>'index'
    ],[
        'class' => 'logo'
    ]));
    ?>
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li>
                <?php
                echo($this->Html->link(
                    'Logout',[
                    'controller'=>'Users','action' =>'login'
                ],[
                    'class' => 'logout'
                ]));
                ?>
            </li>
        </ul>
    </div>
</header>
