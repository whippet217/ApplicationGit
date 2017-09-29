<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wishlist $wishlist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wishlist'), ['action' => 'edit', $wishlist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wishlist'), ['action' => 'delete', $wishlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishlist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Wishlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wishlist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wishlists view large-9 medium-8 columns content">
    <h3><?= h($wishlist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wishlist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUser') ?></th>
            <td><?= $this->Number->format($wishlist->idUser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdProduct') ?></th>
            <td><?= $this->Number->format($wishlist->idProduct) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($wishlist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($wishlist->modified) ?></td>
        </tr>
    </table>
</div>
