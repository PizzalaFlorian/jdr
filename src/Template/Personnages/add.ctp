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
            echo $this->Form->label('type_campagne');
            echo $this->Form->select(
                'type_campagne',
                [
                    'medieval'=>'medieval',
                    'science-fiction'=>'science-fiction'
                ],
                ['empty' => '(choisissez)']
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
                ['empty' => '(choisissez)']
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
                ['empty' => '(choisissez)']
            );
            
            echo $this->Form->input('profession');
            echo $this->Form->input('physique');
            echo $this->Form->input('adresse');
            echo $this->Form->input('social');
            echo $this->Form->input('esprit');
            
            echo $this->Form->input('pv');
            echo $this->Form->input('pv_max');

            echo $this->Form->hidden('pm',['value'=>20]);
            echo $this->Form->hidden('pm_max',['value'=>20]);
            echo $this->Form->hidden('pa',['value'=>3]);
            echo $this->Form->hidden('pi',['value'=>3]);
            
            echo $this->Form->hidden('ca',['value'=>0]);
            echo $this->Form->hidden('destin',['value'=>1]);
            
            echo $this->Form->hidden('gold',['value'=>0]);
            echo $this->Form->hidden('argent',['value'=>0]);
            echo $this->Form->hidden('bronze',['value'=>0]);
            
            echo $this->Form->input('niveau');
            echo $this->Form->input('experience');
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
