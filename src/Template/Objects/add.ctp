
<div class="objects form large-10 medium-10 columns content">
    <?= $this->Form->create($object) ?>
    <fieldset>
        <legend><?= __('Add Object') ?></legend>
        <?php
            echo $this->Form->hidden('personnages_id', ['value' => $personnage->id]);
            echo $this->Form->input('nom');
            echo $this->Form->input('quantite');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Ajouter')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$personnage->id],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
