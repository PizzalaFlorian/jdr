
<div class="armes form large-10 medium-10 columns content">
    <?= $this->Form->create($arme) ?>
    <fieldset>
        <legend><?= __('Modifer Arme') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('porte');
            echo $this->Form->input('degat');
            if($personnage->type_campagne != "medieval"){
                echo $this->Form->input('cdt');
            }
            echo $this->Form->input('munition');
            if($personnage->type_campagne != "medieval"){
                echo $this->Form->input('dura');
            }
            echo $this->Form->input('composante');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$arme->personnages_id],['class'=>'button']) ?>

    <?= $this->Form->end() ?>
</div>
