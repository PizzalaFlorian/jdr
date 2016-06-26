
<div class="objects form large-10 medium-10 columns content">
    <?= $this->Form->create($object) ?>
    <fieldset>
        <legend><?= __('Edit Object') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('quantite');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$personnage->id],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
