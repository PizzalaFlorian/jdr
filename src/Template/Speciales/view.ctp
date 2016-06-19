<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Speciale'), ['action' => 'edit', $speciale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Speciale'), ['action' => 'delete', $speciale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $speciale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Speciales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Speciale'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="speciales view large-9 medium-8 columns content">
    <h3><?= h($speciale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($speciale->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($speciale->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($speciale->description)); ?>
    </div>
</div>
