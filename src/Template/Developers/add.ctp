<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Developers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="developers form large-9 medium-8 columns content">
    <?= $this->Form->create($developer) ?>
    <fieldset>
        <legend><?= __('Add Developer') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
