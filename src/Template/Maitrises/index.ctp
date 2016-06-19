<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Maitrise'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ecoles'), ['controller' => 'Ecoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ecole'), ['controller' => 'Ecoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maitrises index large-9 medium-8 columns content">
    <h3><?= __('Maitrises') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('ecoles_id') ?></th>
                <th><?= $this->Paginator->sort('personnages_id') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maitrises as $maitrise): ?>
            <tr>
                <td><?= $this->Number->format($maitrise->id) ?></td>
                <td><?= $maitrise->has('ecole') ? $this->Html->link($maitrise->ecole->id, ['controller' => 'Ecoles', 'action' => 'view', $maitrise->ecole->id]) : '' ?></td>
                <td><?= $maitrise->has('personnage') ? $this->Html->link($maitrise->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $maitrise->personnage->id]) : '' ?></td>
                <td><?= h($maitrise->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maitrise->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maitrise->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maitrise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maitrise->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
