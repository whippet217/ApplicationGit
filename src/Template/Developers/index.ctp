<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Developer[]|\Cake\Collection\CollectionInterface $developers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            
            <?php if ($loggedUser['isAdmin']): ?>
                <li><?= $this->Html->link(__('New Developer'), ['action' => 'add']) ?></li>
            <?php endif; ?>
            
            <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        </ul>
    
    
</nav>
<div class="developers index large-9 medium-8 columns content">
    <h3><?= __('Developers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($developers as $developer): ?>
            <tr>
                <td><?= $this->Number->format($developer->id) ?></td>
                <td><?= h($developer->name) ?></td>
                <td><?= h($developer->email) ?></td>
                <td><?= h($developer->created) ?></td>
                <td><?= h($developer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $developer->id]) ?>
                    <?php if ($loggedUser['isAdmin']): ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $developer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $developer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $developer->id)]) ?>
                    <?php endif; ?>
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
