<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Monture'), ['action' => 'edit', $monture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Monture'), ['action' => 'delete', $monture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Montures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="montures view large-9 medium-8 columns content">
    <h3><?= h($monture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $monture->has('personnage') ? $this->Html->link($monture->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $monture->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($monture->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($monture->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pv') ?></th>
            <td><?= $this->Number->format($monture->pv) ?></td>
        </tr>
        <tr>
            <th><?= __('Pv Max') ?></th>
            <td><?= $this->Number->format($monture->pv_max) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Attaque') ?></h4>
        <?= $this->Text->autoParagraph(h($monture->attaque)); ?>
    </div>
    <div class="row">
        <h4><?= __('Special') ?></h4>
        <?= $this->Text->autoParagraph(h($monture->special)); ?>
    </div>
</div>
