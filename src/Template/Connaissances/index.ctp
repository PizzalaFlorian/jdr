<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Connaissance'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competences'), ['controller' => 'Competences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competence'), ['controller' => 'Competences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="connaissances index large-9 medium-8 columns content">
    <h3><?= __('Connaissances') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('competences_id') ?></th>
                <th><?= $this->Paginator->sort('personnages_id') ?></th>
                <th><?= $this->Paginator->sort('bonnus') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($connaissances as $connaissance): ?>
            <tr>
                <td><?= $this->Number->format($connaissance->id) ?></td>
                <td><?= $connaissance->has('competence') ? $this->Html->link($connaissance->competence->id, ['controller' => 'Competences', 'action' => 'view', $connaissance->competence->id]) : '' ?></td>
                <td><?= $connaissance->has('personnage') ? $this->Html->link($connaissance->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $connaissance->personnage->id]) : '' ?></td>
                <td><?= $this->Number->format($connaissance->bonnus) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $connaissance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $connaissance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $connaissance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $connaissance->id)]) ?>
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
