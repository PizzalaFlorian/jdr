
<div class="armes form large-10 medium-10 columns content">
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
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'index']) ?>
    <?= $this->Form->end() ?>
</div>
