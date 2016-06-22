<?php
    echo $this->element('sidebar');
    echo $this->Html->css('feuille_perso');
   
?>

<div class="personnages form large-10 medium-10 columns content">
    
    <fieldset>
   	
    <?= $this->Form->create($personnage) ?>
    <?php
    	//debug($personnage);
    ?>
    <div style="overflow:hidden;">
	    <div style="float:left">
	    	<h3><?= $personnage->prenom ?> <?= $personnage->nom ?></h3>
	    </div>
	    <div style="float:right">
	    <?= $this->Html->link(__('Modifier perso'), ['action' => 'edit', $personnage->id]) ?>
	    <br>
	    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $personnage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnage->id)]) ?>
    	</div>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th class="center"><a>Race</a></th>
                <th class="center"><a>Âge</a></th>
                <th class="center"><a>Profession</a></th>
                <th class="center"><a>Niveau</a></th>
                <th class="center"><a>Expérience</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="center"><?= $this->Form->input('race',['label'=>false]) ?></td>
                <td class="center"><?= $this->Form->input('age',['label'=>false]) ?></td>
                <td class="center"><?= $this->Form->input('profession',['label'=>false]) ?></td>
                <td class="center"><?= $this->Form->input('niveau',['label'=>false]) ?></td>
                <td class="center"><?= $this->Form->input('experience',['label'=>false]) ?></td>
            </tr>
        </tbody>
    </table>

    <div class="medium-block">
	    <table class="vertical-table">
	        <tr>
	            <th><?= __('Vie') ?></th>
	            <td>
		            <div class="decale">
		            	<?= $this->Form->input('pv',['label'=>false]) ?>
		            </div>
		            <div class="decaleRight">
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
	            		echo $this->Form->input('pa',['label'=>false,'class'=>"decale"]);
	            	}
	            	if($personnage->archetype == 'mage'){
	            		//echo $this->Form->input('pm',['label'=>false]);
	            		echo '<div class="decale">';
		            	echo $this->Form->input('pm',['label'=>false]) ;
			            echo'</div>
			            <div class="decaleRight">
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
	            <td><?= $this->Form->input('ca',['label'=>false,'class'=>"decale"]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Point de destin') ?></th>
	            <td><?= $this->Form->input('destin',['label'=>false,'class'=>"decale"]) ?></td>
	        </tr>
	    </table>
    </div>
    <div class="medium-block">
	    <table class="vertical-table">
	        <tr>
	            <th><?= __('Physique') ?></th>
	            <td><?= $this->Form->input('physique',['label'=>false,'class'=>"decale"]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Adresse') ?></th>
	            <td><?= $this->Form->input('adresse',['label'=>false,'class'=>"decale"]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Social') ?></th>
	            <td><?= $this->Form->input('social',['label'=>false,'class'=>"decale"]) ?></td>
	        </tr>
	        <tr>
	            <th><?= __('Esprit') ?></th>
	            <td><?= $this->Form->input('esprit',['label'=>false,'class'=>"decale"]) ?></td>
	        </tr>
	    </table>
   	</div>
   	<div class="medium-block">
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
	<?= $this->Form->end() ?>
 </div>
   	