<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Armure'), ['action' => 'edit', $armure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Armure'), ['action' => 'delete', $armure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $armure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Armures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Armure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="armures view large-9 medium-8 columns content">
    <h3><?= h($armure->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $armure->has('personnage') ? $this->Html->link($armure->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $armure->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Emplacement') ?></th>
            <td><?= h($armure->emplacement) ?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($armure->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($armure->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Indice') ?></th>
            <td><?= $this->Number->format($armure->indice) ?></td>
        </tr>
        <tr>
            <th><?= __('Charge') ?></th>
            <td><?= $this->Number->format($armure->charge) ?></td>
        </tr>
        <tr>
            <th><?= __('Charge Max') ?></th>
            <td><?= $this->Number->format($armure->charge_max) ?></td>
        </tr>
        <tr>
            <th><?= __('Dura') ?></th>
            <td><?= $this->Number->format($armure->dura) ?></td>
        </tr>
    </table>
</div>
