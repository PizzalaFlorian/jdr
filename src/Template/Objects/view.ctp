<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Object'), ['action' => 'edit', $object->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Object'), ['action' => 'delete', $object->id], ['confirm' => __('Are you sure you want to delete # {0}?', $object->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Objects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Object'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="objects view large-9 medium-8 columns content">
    <h3><?= h($object->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $object->has('personnage') ? $this->Html->link($object->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $object->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($object->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($object->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantite') ?></th>
            <td><?= $this->Number->format($object->quantite) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($object->description)); ?>
    </div>
</div>
