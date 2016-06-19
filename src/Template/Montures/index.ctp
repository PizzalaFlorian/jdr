<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Monture'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="montures index large-9 medium-8 columns content">
    <h3><?= __('Montures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('personnages_id') ?></th>
                <th><?= $this->Paginator->sort('nom') ?></th>
                <th><?= $this->Paginator->sort('pv') ?></th>
                <th><?= $this->Paginator->sort('pv_max') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($montures as $monture): ?>
            <tr>
                <td><?= $this->Number->format($monture->id) ?></td>
                <td><?= $monture->has('personnage') ? $this->Html->link($monture->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $monture->personnage->id]) : '' ?></td>
                <td><?= h($monture->nom) ?></td>
                <td><?= $this->Number->format($monture->pv) ?></td>
                <td><?= $this->Number->format($monture->pv_max) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $monture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monture->id)]) ?>
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
