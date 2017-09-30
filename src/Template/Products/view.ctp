<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php if ($loggedUser !== null): ?>
            
            <?php if ($loggedUser['isAdmin']): ?>
                
                <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
                <li><?= $this->Html->link(__('New Developer'), ['controller' => 'Developers', 'action' => 'add']) ?> </li>
                
            <?php endif; ?>
            
            <li><?= $this->Html->link(__('New Wishlist'), ['controller' => 'Wishlists', 'action' => 'add']) ?> </li>
            
        <?php endif; ?>
        
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List Wishlists'), ['controller' => 'Wishlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Developers'), ['controller' => 'Developers', 'action' => 'index']) ?> </li>
        
        
        
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Console') ?></th>
            <td><?= h($product->console) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Developer') ?></th>
            <td><?= $product->has('developer') ? $this->Html->link($product->developer->name, ['controller' => 'Developers', 'action' => 'view', $product->developer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Used') ?></th>
            <td><?= $product->used ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Wishlists') ?></h4>
        <?php if (!empty($product->wishlists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->wishlists as $wishlists): ?>
            <tr>
                <td><?= h($wishlists->id) ?></td>
                <td><?= h($wishlists->user_id) ?></td>
                <td><?= h($wishlists->product_id) ?></td>
                <td><?= h($wishlists->created) ?></td>
                <td><?= h($wishlists->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Wishlists', 'action' => 'view', $wishlists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Wishlists', 'action' => 'edit', $wishlists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Wishlists', 'action' => 'delete', $wishlists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishlists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
