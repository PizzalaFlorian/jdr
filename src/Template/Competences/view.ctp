<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competence'), ['action' => 'edit', $competence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competence'), ['action' => 'delete', $competence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competence'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competences view large-9 medium-8 columns content">
    <h3><?= h($competence->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($competence->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($competence->id) ?></td>
        </tr>
    </table>
</div>
