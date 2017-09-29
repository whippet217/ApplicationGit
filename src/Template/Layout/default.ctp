<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameStore - The website where you can only wish</title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><a href="<?= $appRoot ?>">Home</a></li>
                <li><?= $this->Html->link('Products', ['controller' => 'products']) ?></li>
                <li><?= $this->Html->link('Developers', ['controller' => 'developers']) ?></li>
                <li><?= $this->Html->link('Users', ['controller' => 'users']) ?></li>
				<li><?= $this->HTML->Link('Files', ['controller' => 'files']) ?></li>
            </ul>
            <ul class="right">
                
                <?php if($loggedUser !== null) { ?>
                    
                    <li><?= $this->Html->link('Logged in as ' . h($loggedUser['username']), ['controller' => 'users', 'action' => 'edit', $loggedUser['id']]) ?></li>
                    <li id="Logout"><?= $this->Html->link('Logout', ['controller'=>'users', 'action' => 'logout']); ?></li>
                    
                <?php } else { ?>
                    
                    <li id="Login"><?= $this->Html->link('Login', ['controller'=>'users', 'action' => 'login']); ?></li>
                    <li id="Register"><?= $this->Html->link('Register', ['controller'=>'users', 'action' => 'add']); ?></li>
                    
                <?php } ?>
                
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
