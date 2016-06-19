<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ecole'), ['action' => 'edit', $ecole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ecole'), ['action' => 'delete', $ecole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ecole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ecoles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ecole'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ecoles view large-9 medium-8 columns content">
    <h3><?= h($ecole->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($ecole->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ecole->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ecole->description)); ?>
    </div>
</div>
