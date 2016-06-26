
<div class="armes form large-10 medium-10 columns content">
    <?= $this->Form->create($arme) ?>
    <fieldset>
        <legend><?= __('Modifer Arme') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->select('porte',
            [
                'CàC'=>'CàC',
                '5m'=>'5m',
                '10m'=>'10m',
                '25m'=>'25m',
                '50m'=>'50m',
                '100m'=>'100m',
                '250m'=>'250m',
                '500m'=>'500m',
                '1km'=>'1km'
            ]);
            echo $this->Form->input('degat');
            if($personnage->type_campagne != "medieval"){
                echo $this->Form->input('cdt');
            }
            echo $this->Form->input('munition');
            if($personnage->type_campagne != "medieval"){
                echo $this->Form->input('dura');
            }
            echo $this->Form->select('composante',
            [
                'Physique'=>'Physique',
                'Adresse'=>'Adresse',
                'Social'=>'Social',
                'Esprit'=>'Esprit',
            ],
            ['default'=>$arme->composante]
            );
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$arme->personnages_id],['class'=>'button']) ?>

    <?= $this->Form->end() ?>
</div>
