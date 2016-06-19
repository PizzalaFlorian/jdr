<?php
    echo $this->element('sidebar');
?>
<div class="personnages form large-10 medium-9 columns content">
    <?= $this->Form->create($personnage) ?>
    <fieldset>
        <legend><?= __('Add Personnage') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('prenom');
            echo $this->Form->input('race');
            echo $this->Form->input('type_campagne');
            echo $this->Form->input('age');
            echo $this->Form->input('profession');
            echo $this->Form->input('physique');
            echo $this->Form->input('adresse');
            echo $this->Form->input('social');
            echo $this->Form->input('esprit');
            echo $this->Form->input('pv');
            echo $this->Form->input('pv_max');
            echo $this->Form->input('pm');
            echo $this->Form->input('pm_max');
            echo $this->Form->input('pa');
            echo $this->Form->input('pi');
            echo $this->Form->input('ca');
            echo $this->Form->input('destin');
            echo $this->Form->input('archetype');
            echo $this->Form->input('gold');
            echo $this->Form->input('argent');
            echo $this->Form->input('bronze');
            echo $this->Form->input('niveau');
            echo $this->Form->input('experience');
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
