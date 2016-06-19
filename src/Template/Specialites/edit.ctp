<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $specialite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $specialite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Specialites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Speciales'), ['controller' => 'Speciales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Speciale'), ['controller' => 'Speciales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="specialites form large-9 medium-8 columns content">
    <?= $this->Form->create($specialite) ?>
    <fieldset>
        <legend><?= __('Edit Specialite') ?></legend>
        <?php
            echo $this->Form->input('speciales_id', ['options' => $speciales]);
            echo $this->Form->input('personnages_id', ['options' => $personnages]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
