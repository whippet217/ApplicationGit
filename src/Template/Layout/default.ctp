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
                <li><a href="<?= $appRoot ?>"><?= __('Home') ?></a></li>
                <li><?= $this->Html->link(__('Products'), ['controller' => 'products']) ?></li>
                <li><?= $this->Html->link(__('Developers'), ['controller' => 'developers']) ?></li>
                <li><?= $this->Html->link(__('Users'), ['controller' => 'users']) ?></li>
                <li><?= $this->Html->link(__('Reviews'), ['controller' => 'reviews']) ?></li>
                <?php if($loggedUser['isAdmin']) { ?>
				<li><?= $this->Html->link(__('Files'), ['controller' => 'files']) ?></li>
                <?php } ?>
            </ul>
            <ul class="right">
            
                <li><?= $this->Html->link('English', ['action' => 'changeLang', 'en_US']) ?></li>
                <li><?= $this->Html->link('Français', ['action' => 'changeLang', 'fr_CA']) ?></li>
                <li><?= $this->Html->link('Deutsch', ['action' => 'changeLang', 'de_DE']) ?></li>
            
                <?php if($loggedUser !== null) { ?>
                    
                    <li><?= $this->Html->link('Logged in as ' . h($loggedUser['username']), ['controller' => 'users', 'action' => 'edit', $loggedUser['id']]) ?></li>
                    <li><?= $this->HTML->Link('Wishlist', ['controller' => 'wishlists']) ?></li>
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
