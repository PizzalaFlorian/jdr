<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Specialite'), ['action' => 'edit', $specialite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Specialite'), ['action' => 'delete', $specialite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Specialites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Speciales'), ['controller' => 'Speciales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Speciale'), ['controller' => 'Speciales', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="specialites view large-9 medium-8 columns content">
    <h3><?= h($specialite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Speciale') ?></th>
            <td><?= $specialite->has('speciale') ? $this->Html->link($specialite->speciale->id, ['controller' => 'Speciales', 'action' => 'view', $specialite->speciale->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $specialite->has('personnage') ? $this->Html->link($specialite->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $specialite->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($specialite->id) ?></td>
        </tr>
    </table>
</div>
