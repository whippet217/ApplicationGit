<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Wishlists'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="wishlists form large-9 medium-8 columns content">
    <?= $this->Form->create($wishlist) ?>
    <fieldset>
        <legend><?= __('Add Wishlist') ?></legend>
        <?php
            echo $this->Form->control('idUser');
            echo $this->Form->control('idProduct');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
