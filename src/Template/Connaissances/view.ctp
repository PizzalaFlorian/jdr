<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Connaissance'), ['action' => 'edit', $connaissance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Connaissance'), ['action' => 'delete', $connaissance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $connaissance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Connaissances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Connaissance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competences'), ['controller' => 'Competences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competence'), ['controller' => 'Competences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="connaissances view large-9 medium-8 columns content">
    <h3><?= h($connaissance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Competence') ?></th>
            <td><?= $connaissance->has('competence') ? $this->Html->link($connaissance->competence->id, ['controller' => 'Competences', 'action' => 'view', $connaissance->competence->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $connaissance->has('personnage') ? $this->Html->link($connaissance->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $connaissance->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($connaissance->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Bonnus') ?></th>
            <td><?= $this->Number->format($connaissance->bonnus) ?></td>
        </tr>
    </table>
</div>
