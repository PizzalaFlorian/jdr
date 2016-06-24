
<div class="armures form large-10 medium-10 columns content">
    <?= $this->Form->create($armure) ?>
    <fieldset>
        <legend><?= __('Ajouter une pièce d\'Armure') ?></legend>
        <?php
            echo $this->Form->hidden('personnages_id', ['value' => $personnage->id]);
            echo $this->Form->input('emplacement',['value'=>$emplacement]);
            echo $this->Form->input('nom');
            echo $this->Form->input('indice');
            if($personnage->type_campagne=='science-fiction'){
                echo $this->Form->input('charge');
                echo $this->Form->input('charge_max');
                echo $this->Form->input('dura');
            }
            else{
                echo $this->Form->hidden('charge',['value' => 0]);
                echo $this->Form->hidden('charge_max',['value' => 0]);
                echo $this->Form->hidden('dura',['value' => 0]);
            }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Ajouter')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$personnage->id],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
