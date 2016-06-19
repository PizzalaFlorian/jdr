<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Familier'), ['action' => 'edit', $familier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Familier'), ['action' => 'delete', $familier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $familier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Familiers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Familier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="familiers view large-9 medium-8 columns content">
    <h3><?= h($familier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $familier->has('personnage') ? $this->Html->link($familier->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $familier->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($familier->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Attaque') ?></th>
            <td><?= h($familier->attaque) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($familier->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pv') ?></th>
            <td><?= $this->Number->format($familier->pv) ?></td>
        </tr>
        <tr>
            <th><?= __('Pv Max') ?></th>
            <td><?= $this->Number->format($familier->pv_max) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Special') ?></h4>
        <?= $this->Text->autoParagraph(h($familier->special)); ?>
    </div>
</div>
