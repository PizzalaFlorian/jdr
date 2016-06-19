<?php
    echo $this->element('sidebar');
   
?>

<div class="personnages form large-10 medium-10 columns content">
    <h3><?= $personnage->prenom ?> <?= $personnage->nom ?></h3>
    <fieldset>
   	<div style="overflow:hidden;">
	    <div style="float:left">
	    <?= $this->Html->link(__('Modifier perso'), ['action' => 'edit', $personnage->id]) ?>
	    </div>
	    <div style="float:right">
	    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $personnage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnage->id)]) ?>
    	</div>
    </div>
    <?= $this->Form->create($personnage) ?>
    <h4>Identitée</h4>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Race') ?></th>
                <th><?= $this->Paginator->sort('Age') ?></th>
                <th><?= $this->Paginator->sort('Profession') ?></th>
                <th><?= $this->Paginator->sort('Niveau') ?></th>
                <th><?= $this->Paginator->sort('Expérience') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $this->Form->input('race',['label'=>false]) ?></td>
                <td><?= $this->Form->input('age',['label'=>false]) ?></td>
                <td><?= $this->Form->input('profession',['label'=>false]) ?></td>
                <td><?= $this->Form->input('niveau',['label'=>false]) ?></td>
                <td><?= $this->Form->input('experience',['label'=>false]) ?></td>
            </tr>
        </tbody>
    </table>

    <div class="personnages form large-6 medium-6 columns content">
	    <h4>Stats</h4>
	    <table class="vertical-table">
	        <tr>
	            <th><?= __('Vie') ?></th>
	            <td>
		            <div style="display: inline-block;width:80%;">
		            	<?= $this->Form->input('pv',['label'=>false]) ?>
		            </div>
		            <div style="display: inline-block;">
		             / <?= h($personnage->pv_max) ?>
		            </div>
	             </td>
	        </tr>
	        <tr>
	           <th>
	           <?php 
	         		$string = 'toto';
	            	if($personnage->archetype == 'commun'){
	            		$string = "Points d'action";
	            	}
	            	if($personnage->archetype == 'mage'){
	            		$string = "Points de magie";
	            	}
	            	if($personnage->archetype == 'creatif'){
	            		$string = "Points d'ingéniositée";
	            	}
	            ?>
	            <?= __($string) ?>
	            </th>
	            <td>
	            <?php 
	            	if($personnage->archetype == 'commun'){
	            		echo $this->Form->input('pa',['label'=>false]);
	            	}
	            	if($personnage->archetype == 'mage'){
	            		//echo $this->Form->input('pm',['label'=>false]);
	            		echo '<div style="display: inline-block;width:75%;">';
		            	echo $this->Form->input('pm',['label'=>false]) ;
			            echo'</div>
			            <div style="display: inline-block;">
			             /  ';
			            echo h($personnage->pm_max);
			            echo '</div>';
	            	}
	            	if($personnage->archetype == 'creatif'){
	            		echo $this->Form->input('pi',['label'=>false]);
	            	}
	            ?>
	            </td>
	        </tr>
	        <tr>
	            <th><?= __('Classe d\'armure') ?></th>
	            <td><?= $this->Form->input('ca',['label'=>false]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Point de destin') ?></th>
	            <td><?= $this->Form->input('destin',['label'=>false]) ?></td>
	        </tr>
	    </table>
    </div>
    <div class="personnages form large-6 medium-6 columns content">
	    <h4>Caractéristiques</h4>
	    <table class="vertical-table">
	        <tr>
	            <th><?= __('Physique') ?></th>
	            <td><?= $this->Form->input('physique',['label'=>false]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Adresse') ?></th>
	            <td><?= $this->Form->input('adresse',['label'=>false]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Social') ?></th>
	            <td><?= $this->Form->input('social',['label'=>false]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Esprit') ?></th>
	            <td><?= $this->Form->input('esprit',['label'=>false]) ?></td>
	        </tr>
	    </table>
   	</div>
   	</fieldset> 
</div> 
<div class="personnages form large-10 medium-10 columns content" id="Equipements">
	<fieldset> 
	<h4>Equipements</h4>
   	<div class="personnages form large-6 medium-6 columns content">
   		 <h4>Monaie</h4>
	    <table class="vertical-table">
	        <tr>
	            <th><?= __('Or') ?></th>
	            <td><?= $this->Form->input('gold',['label'=>false]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Argent') ?></th>
	            <td><?= $this->Form->input('argent',['label'=>false]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Bronze') ?></th>
	            <td><?= $this->Form->input('bronze',['label'=>false]) ?></td>
	        </tr>
	    </table>
   	</div>
   	</fieldset> 
 </div>

 <!-- FOOTER -->
 <div class="personnages form large-10 medium-10 columns content">
 		
		<?= $this->Form->button(__('Mettre a jour')) ?>  
		<?= $this->Form->end() ?>	
 </div>
   	
