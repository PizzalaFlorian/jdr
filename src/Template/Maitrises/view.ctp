<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maitrise'), ['action' => 'edit', $maitrise->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maitrise'), ['action' => 'delete', $maitrise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maitrise->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maitrises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maitrise'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ecoles'), ['controller' => 'Ecoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ecole'), ['controller' => 'Ecoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maitrises view large-9 medium-8 columns content">
    <h3><?= h($maitrise->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ecole') ?></th>
            <td><?= $maitrise->has('ecole') ? $this->Html->link($maitrise->ecole->id, ['controller' => 'Ecoles', 'action' => 'view', $maitrise->ecole->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $maitrise->has('personnage') ? $this->Html->link($maitrise->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $maitrise->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($maitrise->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($maitrise->id) ?></td>
        </tr>
    </table>
</div>
