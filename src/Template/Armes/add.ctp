<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Armes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="armes form large-9 medium-8 columns content">
    <?= $this->Form->create($arme) ?>
    <fieldset>
        <legend><?= __('Add Arme') ?></legend>
        <?php
            echo $this->Form->input('personnages_id', ['options' => $personnages]);
            echo $this->Form->input('cdt');
            echo $this->Form->input('dura');
            echo $this->Form->input('nom');
            echo $this->Form->input('degat');
            echo $this->Form->input('munition');
            echo $this->Form->input('composante');
            echo $this->Form->input('porte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
