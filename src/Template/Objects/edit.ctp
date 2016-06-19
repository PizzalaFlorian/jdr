<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $object->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $object->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Objects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="objects form large-9 medium-8 columns content">
    <?= $this->Form->create($object) ?>
    <fieldset>
        <legend><?= __('Edit Object') ?></legend>
        <?php
            echo $this->Form->input('personnages_id', ['options' => $personnages]);
            echo $this->Form->input('nom');
            echo $this->Form->input('quantite');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
