<?php
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
	    	<?= $this->Html->link(__('Retour'), ['action' => 'index']) ?>
	    	<br>
	    	<?= $this->Html->link(__('Modifier perso'), ['action' => 'edit', $personnage->id]) ?>
	    	<br>
	    	<?= $this->Html->link(__('Supprimer'), ['action' => 'delete', $personnage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnage->id)]) ?>
    	</div>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><div class="c">Race</div></th>
                <th ><div class="c">Âge</div></th>
                <th ><div class="c">Profession</div></th>
                <th ><div class="c">Niveau</div></th>
                <th ><div class="c">Expérience</div></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td ><?= $this->Form->input('race',['label'=>false]) ?></td>
                <td ><?= $this->Form->input('age',['label'=>false]) ?></td>
                <td ><?= $this->Form->input('profession',['label'=>false]) ?></td>
                <td ><?= $this->Form->input('niveau',['label'=>false]) ?></td>
                <td ><?= $this->Form->input('experience',['label'=>false]) ?></td>
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
    <?php 
   		if($personnage->archetype == "mage"){
   	?>
   	<div class="medium-block">
	    <table>
	        <tbody>
	        	<tr>
	                <td><div class="center btext">Ecole Majeure</div></td>
	                <td><div class="center btext">Ecole Mineure</div></td>
	            </tr>
	            <tr>
	                <td class="big-hole">
	                	<?php
	                		$token = null;
	                		if(!empty($ecoles)){
	                			foreach($ecoles as $e ){
	                				if($e->type == "majeure")
	                				$token = $e;
	                			}
	                		}
	                		if(isset($token)){
	                			echo '<div class="fat">'.$this->Html->link($token->nom, ['controller'=>'maitrises','action' => 'edit', $token->id]).'</div>';
	                		}
	                		else{
	                			echo $this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'maitrises','action' => 'add',$personnage->id.'-majeure'),
		                        array('escape' => false) 
                    			);
	                		}
	                	?>
	                </td>
	                <td class="big-hole">
	                		<?php
	                		$token = null;
	                		if(!empty($ecoles)){
	                			foreach($ecoles as $e ){
	                				if($e->type == "mineure")
	                				$token = $e;
	                			}
	                		}
	                		if(isset($token)){
	                			echo '<div class="fat">'.$this->Html->link($token->nom, ['controller'=>'maitrises','action' => 'edit', $token->id]).'</div>';
	                		}
	                		else{
	                			echo $this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'maitrises','action' => 'add',$personnage->id.'-mineure'),
		                        array('escape' => false) 
                    			);
	                		}
	                	?>
	                </td>
	            </tr>
	        </tbody>
	    </table>
   	</div>
   	<?php
   		}
   	?>
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
   	<?php 
   		if($personnage->archetype == "commun" || $personnage->archetype == "creatif"){
   	?>
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
   	<?php
   		}
   	?>
   	</fieldset> 
</div> 
	<?= $this->Form->end() ?>
 </div>
   	