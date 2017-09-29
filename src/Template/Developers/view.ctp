<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Developer $developer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Developer'), ['action' => 'edit', $developer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Developer'), ['action' => 'delete', $developer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $developer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Developers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Developer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="developers view large-9 medium-8 columns content">
    <h3><?= h($developer->name) ?></h3>
    <table class="vertical-table">
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
