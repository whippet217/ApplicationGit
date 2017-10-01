<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Developer $developer
 */
?>
<nav class="large-3 medium-4 columns">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1><?= __('Actions') ?></h1>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">
                    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=bootswatchcom" id="_carbonads_js"></script>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-3 col-sm-4">
                <div class="list-group table-of-contents">
                    <?php if ($loggedUser['isAdmin']): ?>
                    <?= $this->Html->link(__('Edit Developer'), ['action' => 'edit', $developer->id], array('class' => 'list-group-item')) ?> 
                    <?= $this->Form->postLink(__('Delete Developer'), ['action' => 'delete', $developer->id], array('class' => 'list-group-item'), ['confirm' => __('Are you sure you want to delete # {0}?', $developer->id)]) ?>
                    <?= $this->Html->link(__('New Developer'), ['action' => 'add'], array('class' => 'list-group-item')) ?> 
                    <?php endif; ?>
                    <?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index'], array('class' => 'list-group-item')) ?>
                </div>
            </div>
        </div>
    </div>

</nav>

<div class="developers view large-9 medium-8 columns content">
    <h2><?= h($developer->name) ?></h2>
    <table class="vertical-table table table-striped table-hover">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($developer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($developer->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($developer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($developer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($developer->modified) ?></td>
        </tr>
    </table>
</div>
