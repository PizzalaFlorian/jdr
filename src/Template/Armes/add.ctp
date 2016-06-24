
<div class="armes form large-10 medium-10 columns content">
    <?= $this->Form->create($arme) ?>
    <fieldset>
        <legend><?= __('Add Arme') ?></legend>
        <?php
           
            echo $this->Form->hidden('personnages_id', ['type'=>'number','value'=>$personnage->id]);
            echo $this->Form->input('nom');
            echo $this->Form->input('porte');
            echo $this->Form->input('degat');
            if($personnage->type_campagne == "medieval"){
                echo $this->Form->hidden('cdt',['value'=>1]);
            }
            else{
                echo $this->Form->input('cdt');
            }
            echo $this->Form->input('munition');
            if($personnage->type_campagne == "medieval"){
                echo $this->Form->hidden('dura',['value'=>1]);
            }
            else{
                echo $this->Form->input('dura');
            }
            echo $this->Form->select('composante',
            [
                'Physique'=>'Physique',
                'Adresse'=>'Adresse',
                'Social'=>'Social',
                'Esprit'=>'Esprit',
            ]);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Ajouter')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$personnage->id],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
