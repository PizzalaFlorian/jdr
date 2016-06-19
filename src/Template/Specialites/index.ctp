<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Specialite'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Speciales'), ['controller' => 'Speciales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Speciale'), ['controller' => 'Speciales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="specialites index large-9 medium-8 columns content">
    <h3><?= __('Specialites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('speciales_id') ?></th>
                <th><?= $this->Paginator->sort('personnages_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($specialites as $specialite): ?>
            <tr>
                <td><?= $this->Number->format($specialite->id) ?></td>
                <td><?= $specialite->has('speciale') ? $this->Html->link($specialite->speciale->id, ['controller' => 'Speciales', 'action' => 'view', $specialite->speciale->id]) : '' ?></td>
                <td><?= $specialite->has('personnage') ? $this->Html->link($specialite->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $specialite->personnage->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $specialite->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $specialite->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $specialite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialite->id)]) ?>
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
