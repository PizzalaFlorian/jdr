<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $maitrise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $maitrise->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Maitrises'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ecoles'), ['controller' => 'Ecoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ecole'), ['controller' => 'Ecoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maitrises form large-9 medium-8 columns content">
    <?= $this->Form->create($maitrise) ?>
    <fieldset>
        <legend><?= __('Edit Maitrise') ?></legend>
        <?php
            echo $this->Form->input('ecoles_id', ['options' => $ecoles]);
            echo $this->Form->input('personnages_id', ['options' => $personnages]);
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
