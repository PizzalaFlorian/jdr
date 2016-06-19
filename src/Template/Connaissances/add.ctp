<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Connaissances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competences'), ['controller' => 'Competences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competence'), ['controller' => 'Competences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="connaissances form large-9 medium-8 columns content">
    <?= $this->Form->create($connaissance) ?>
    <fieldset>
        <legend><?= __('Add Connaissance') ?></legend>
        <?php
            echo $this->Form->input('competences_id', ['options' => $competences]);
            echo $this->Form->input('personnages_id', ['options' => $personnages]);
            echo $this->Form->input('bonnus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
