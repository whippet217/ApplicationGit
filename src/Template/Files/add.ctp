<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="files form large-9 medium-8 columns content">
    <?= $this->Form->create($file, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add File') ?></legend>
        <?php
            echo $this->Form->control('name', ['type' => 'file']);
            echo $this->Form->control('status');
            echo $this->Form->control('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
