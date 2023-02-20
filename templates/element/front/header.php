<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <?= $this->Html->link(
        '<b>AD<span>MIN</span></b>',
        ['controller' => 'Tickets', 'action' => 'index'],
        ['class' => 'logo', 'escape' => false]
    );
    ?>

    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li>
                <?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'logout']) ?>
            </li>
        </ul>
    </div>
</header>
