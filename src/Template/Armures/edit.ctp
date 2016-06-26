
<div class="armures form large-10 medium-10 columns content">
    <?= $this->Form->create($armure) ?>
    <fieldset>
        <legend><?= __('Modifier la pièce d\'Armure') ?></legend>
        <?php
            echo $this->Form->input('emplacement');
            echo $this->Form->input('nom');
            echo $this->Form->input('indice');
            if($personnage->type_campagne=='science-fiction'){
                echo $this->Form->input('charge');
                echo $this->Form->input('charge_max');
                echo $this->Form->input('dura');
            }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$personnage->id],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
