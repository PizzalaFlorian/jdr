<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $armure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $armure->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Armures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="armures form large-9 medium-8 columns content">
    <?= $this->Form->create($armure) ?>
    <fieldset>
        <legend><?= __('Edit Armure') ?></legend>
        <?php
            echo $this->Form->input('personnages_id', ['options' => $personnages]);
            echo $this->Form->input('emplacement');
            echo $this->Form->input('nom');
            echo $this->Form->input('indice');
            echo $this->Form->input('charge');
            echo $this->Form->input('charge_max');
            echo $this->Form->input('dura');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
