<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Armure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="armures index large-9 medium-8 columns content">
    <h3><?= __('Armures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('personnages_id') ?></th>
                <th><?= $this->Paginator->sort('emplacement') ?></th>
                <th><?= $this->Paginator->sort('nom') ?></th>
                <th><?= $this->Paginator->sort('indice') ?></th>
                <th><?= $this->Paginator->sort('charge') ?></th>
                <th><?= $this->Paginator->sort('charge_max') ?></th>
                <th><?= $this->Paginator->sort('dura') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($armures as $armure): ?>
            <tr>
                <td><?= $this->Number->format($armure->id) ?></td>
                <td><?= $armure->has('personnage') ? $this->Html->link($armure->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $armure->personnage->id]) : '' ?></td>
                <td><?= h($armure->emplacement) ?></td>
                <td><?= h($armure->nom) ?></td>
                <td><?= $this->Number->format($armure->indice) ?></td>
                <td><?= $this->Number->format($armure->charge) ?></td>
                <td><?= $this->Number->format($armure->charge_max) ?></td>
                <td><?= $this->Number->format($armure->dura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $armure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $armure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $armure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $armure->id)]) ?>
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
