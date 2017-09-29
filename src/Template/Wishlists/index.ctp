<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wishlist[]|\Cake\Collection\CollectionInterface $wishlists
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wishlist'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wishlists index large-9 medium-8 columns content">
    <h3><?= __('Wishlists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idUser') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idProduct') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wishlists as $wishlist): ?>
            <tr>
                <td><?= $this->Number->format($wishlist->id) ?></td>
                <td><?= $this->Number->format($wishlist->idUser) ?></td>
                <td><?= $this->Number->format($wishlist->idProduct) ?></td>
                <td><?= h($wishlist->created) ?></td>
                <td><?= h($wishlist->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wishlist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wishlist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wishlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishlist->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
