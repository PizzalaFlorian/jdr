<div class="personnages form large-10 medium-10 columns content">
    <?= $this->Form->create($personnage) ?>
    <fieldset>
        <legend><?= __('Edit Personnage') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('prenom');
            echo $this->Form->label('type_campagne');
            echo $this->Form->select(
                'type_campagne',
                [
                    'medieval'=>'medieval',
                    'science-fiction'=>'science-fiction'
                ],
                ['default' =>$personnage->type_campagne]
            );
            echo $this->Form->label('race');
            echo $this->Form->select(
                'race',
                [
                    'Humain(Hyborien)'=>'Humain(Hyborien)',
                    'Humain(Nordique)'=>'Humain(Nordique)',
                    'Humain(Shémites)'=>'Humain(Shémites)',
                    'Humain(peuple du désert)'=>'Humain(peuple du désert)',
                    'Nain'=>'Nain',
                    'Nain du sud'=>'Nain du sud',
                    'Haut Elfe'=>'Haut Elfe',
                    'Elfe des bois'=>'Elfe des bois',
                    'Elfe noir'=>'Elfe noir',
                    'Elfe bleu'=>'Elfe bleu',
                    'Demi-elfe'=>'Demi-elfe',
                    'Demi-humain'=>'Demi-humain',
                    'Demi-Orque'=>'Demi-Orque',
                    'Hobbit'=>'Hobbit',
                    'Gnome'=>'Gnome'
                ],
                ['default' => $personnage->race]
            );
            echo $this->Form->input('age');
            echo $this->Form->label('archetype');
            echo $this->Form->select(
                'archetype',
                [
                    'commun'=>'commun',
                    'mage'=>'mage',
                    'creatif'=>'creatif'
                ],
                ['default' => $personnage->archetype]
            );

            echo $this->Form->input('pv');
            echo $this->Form->input('pv_max');

            if($personnage->archetype=="mage"){
            echo $this->Form->input('pm');
            echo $this->Form->input('pm_max');
            }
            if($personnage->archetype == "commun")
                echo $this->Form->input('pa');
            if($personnage->archetype == "creatif")
                echo $this->Form->hidden('pi',['value'=>3]);
            

        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$personnage->id],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
