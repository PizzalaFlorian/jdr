
<div class="maitrises form large-9 medium-8 columns content">
    <?= $this->Form->create($maitrise) ?>
    <fieldset>
        <legend><?= __('Edit Maitrise') ?></legend>
        <?php
            echo $this->Form->select('ecoles_id', 
            [
                $ecoles[0]->id => $ecoles[0]->nom.' : '. $ecoles[0]->description,
                $ecoles[1]->id => $ecoles[1]->nom.' : '. $ecoles[1]->description,
                $ecoles[2]->id => $ecoles[2]->nom.' : '. $ecoles[2]->description,
                $ecoles[3]->id => $ecoles[3]->nom.' : '. $ecoles[3]->description,
                $ecoles[4]->id => $ecoles[4]->nom.' : '. $ecoles[4]->description,
                $ecoles[5]->id => $ecoles[5]->nom.' : '. $ecoles[5]->description,
                $ecoles[6]->id => $ecoles[6]->nom.' : '. $ecoles[6]->description,
                $ecoles[7]->id => $ecoles[7]->nom.' : '. $ecoles[7]->description,
                $ecoles[8]->id => $ecoles[8]->nom.' : '. $ecoles[8]->description,
                $ecoles[9]->id => $ecoles[9]->nom.' : '. $ecoles[9]->description,
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier')) ?>
    <?= $this->Html->link(__('Retour'), ['controller' => 'Personnages', 'action' => 'feuille',$maitrise->personnages_id],['class'=>'button']) ?>
    <?= $this->Form->end() ?>
</div>
