<?php
    echo $this->Html->css('feuille_perso');
    echo $this->Html->script('./external/jquery/jquery');
    echo $this->Html->script('jquery-ui');
    echo $this->Html->script('jquery-ui.min');
    echo $this->Html->script('feuille');
    
?>

<div class="personnages form large-10 medium-10 columns content">
    
    <fieldset>
   	
    <?= $this->Form->create($personnage) ?>
    <?php
    	//debug($personnage);
    ?>
    <div id="p_id" style="display:none"><?= $personnage->id ?></div>
    <div style="overflow:hidden;">
	    <div style="float:left">
	    	<h3><?= $personnage->prenom ?> <?= $personnage->nom ?></h3>
	    </div>
	    <div style="float:right">
	    	<?= $this->Html->link($this->Html->image('retour.png', array('title' => "retour")), ['action' => 'index'],['escape'=>false]) ?>
	    	
	    	<?= $this->Html->link($this->Html->image('modif.png', array('title' => "modifier")), ['action' => 'edit', $personnage->id],['escape'=>false]) ?>
	    	
	    	<?= $this->Html->link($this->Html->image('suppr.png', array('title' => "Supprimer")), ['action' => 'delete', $personnage->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $personnage->id)]) ?>
    	</div>
    </div>
    <div class="THH">
	    <table cellpadding="0" cellspacing="0" class="identity">
	        <thead>
	            <tr>
	                <th><div class="c">Race</div></th>
	                <th><div class="c">Âge</div></th>
	                <th><div class="c">Profession</div></th>
	                <th><div class="c">Niveau</div></th>
	                <th><div class="c">Expérience</div></th>
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
	</div>
	<div class="bande-horizontale">
	    <div class="medium-block THH">
		    <table class="vertical-table">
		        <tr>
		            <th class="PV"><?= __('Vie') ?></th>
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
		           <th class="PM">
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
		            <th class="CA"><?= __('Classe d\'armure') ?></th>
		            <td>
		            	<?php
		            		if(!isset($armures)){
		            			echo $this->Form->input('ca',['label'=>false,'class'=>"decale"]); 
		            		}
		            		else{
		            			$i = 0;
		            			foreach($armures as $a){
		            				$i=$i+$a->indice;
		            			}
		            			echo $this->Form->input('ca',['label'=>false,'class'=>"decale",'value'=>$i]);
		            		}
		            	?>
		            </td>
		        </tr>
		        <tr>
		            <th class="PD"><?= __('Point de destin') ?></th>
		            <td><?= $this->Form->input('destin',['label'=>false,'class'=>"decale"]) ?></td>
		        </tr>
		    </table>
	    </div>
	    <div class="medium-block THH">
		    <table class="vertical-table">
		        <tr >
		            <th class="PH"><?= __('Physique') ?></th>
		            <td><?= $this->Form->input('physique',['label'=>false,'class'=>"decale"]) ?></td>
		        </tr>
		        <tr>
		            <th class="AD"><?= __('Adresse') ?></th>
		            <td><?= $this->Form->input('adresse',['label'=>false,'class'=>"decale"]) ?></td>
		        </tr>
		        <tr>
		            <th class="SO"><?= __('Social') ?></th>
		            <td><?= $this->Form->input('social',['label'=>false,'class'=>"decale"]) ?></td>
		        </tr>
		        <tr>
		            <th class="ES"><?= __('Esprit') ?></th>
		            <td><?= $this->Form->input('esprit',['label'=>false,'class'=>"decale"]) ?></td>
		        </tr>
		    </table>
	   	</div>
	   	<?php 
	   		if($personnage->archetype == "mage"){
	   	?>
	   	<div class="medium-block MM">
		    <table>
		        <tbody>
		        	<tr>
		                <td class="M1"><div class="center btext">Ecole Majeure</div></td>
		                <td class="M2"><div class="center btext">Ecole Mineure</div></td>
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
	   	<div class="medium-block THH bord-right">
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
	</div>   	
   	<div class="adaptative-block back_armes">
   		<!--<div class="title-categorie center">Armes</div>-->
	   	<table class="armes">
	        <thead>
	            <tr>
	            	<th class"armes-long"><?= $this->Paginator->sort('nom') ?></th>
	            	<th class="armes-court"><?= $this->Paginator->sort('porte') ?></th>
	            	<th class="armes-long"><?= $this->Paginator->sort('degat') ?></th>
	            	<?php 
	                	if($personnage->typeCampagne == "science-fiction"){
	                ?>
	                <th class="armes-court"><?= $this->Paginator->sort('cdt') ?></th>
	                <?php
	                	}
	                ?>
	                <th class="armes-long"><?= $this->Paginator->sort('munition') ?></th>
	                <?php 
	                	if($personnage->typeCampagne == "science-fiction"){
	                ?>
	                <th class="armes-court"><?= $this->Paginator->sort('dura') ?></th>
	                <?php
	                	}
	                ?>
	               	<th class="armes-long"><?= $this->Paginator->sort('composante') ?></th>
	                <th class="armes-long"></th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php foreach ($armes as $arme): ?>
	            <tr>
	            	<td class"armes-long"><?= h($arme->nom) ?></td>
	            	<td class="armes-court"><?= h($arme->porte) ?></td>
	            	<?php 
	                	if($personnage->typeCampagne == "science-fiction"){
	                ?>
	                <td class="armes-court"><?= $this->Number->format($arme->cdt) ?></td>
	                <?php
	                	}
	                ?>
	                <?php
	            		if($arme->porte == 'CàC'){
	            	?>
	            		<td class="armes-long" colspan="2"><?= h($arme->degat) ?></td>
	            	<?php
	            		}else{
	            	?>
		            	<td class="armes-long a-left"><?= h($arme->degat) ?></td>
		                <td class="armes-long"><input id=<?= h($arme->id) ?> class="regular munition" name="munition" type="text" value=<?= h($arme->munition) ?>></input></td>
	                <?php
	            		}
	                	if($personnage->typeCampagne == "science-fiction"){
	                ?>
	                <td class="armes-court"><?= $this->Number->format($arme->dura) ?></td>
	                 <?php
	                	}
	                ?>
	                <td class="armes-long"><?= h($arme->composante) ?></td>
	                
	                <td class="armes-long">
	                    <?= $this->Html->link($this->Html->image('modif.png', array('title' => "modifier")), ['controller'=>'armes','action' => 'edit', $arme->id],array('escape'=>false)) ?>
	                    <?= $this->Html->link($this->Html->image('suppr.png', array('title' => "modifier")), ['controller'=>'armes','action' => 'delete', $arme->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $arme->id)]) ?>
	                </td>
	            </tr>
	            <?php endforeach; ?>
	        </tbody>
	    </table>
	    <div class="center">
	    	<?php
	    		echo $this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'armes','action' => 'add',$personnage->id),
		                        array('escape' => false) 
                    			);
            ?>
	    </div>
   	</div>
   	<div class="armour-block THH">
	    <table class="vertical-table">
	        <tr>
	            <th class="small-img small-img-area"><?= $this->Html->image('tete.png') ?></th>
	            <td>
		            <?php
	                		$token = null;
	                		if(!empty($armures)){
	                			foreach($armures as $e ){
	                				if($e->emplacement == "tete")
	                				$token = $e;
	                			}
	                		}
	                		if(isset($token)){
	                			echo '<div class="item">'.$this->Html->link($token->nom, ['controller'=>'armures','action' => 'edit', $token->id]).'</div>';
	                			echo '<div class="value">'.$token->indice.'</div>';
	                			echo '<div class="action">';
            				    echo $this->Html->link($this->Html->image('suppr.png', array('title' => "supprimer")), ['controller'=>'armures','action' => 'delete', $token->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $token->nom)]);
								echo '</div>';
	                		}
	                		else{
	                			echo '<div class="center armures-img">'.$this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'armures','action' => 'add',$personnage->id.'-tete'),
		                        array('escape' => false) 
                    			).'</div>';
	                		}
	                	?>
	            </td>
	        </tr>
	        <tr>
	            <th class="small-img small-img-area"><?= $this->Html->image('torse.png') ?></th>
	            <td>
		            <?php
	                		$token = null;
	                		if(!empty($armures)){
	                			foreach($armures as $e ){
	                				if($e->emplacement == "torse")
	                				$token = $e;
	                			}
	                		}
	                		if(isset($token)){
	                			echo '<div class="item">'.$this->Html->link($token->nom, ['controller'=>'armures','action' => 'edit', $token->id]).'</div>';
	                			echo '<div class="value">'.$token->indice.'</div>';
	                			echo '<div class="action">';
            				    echo $this->Html->link($this->Html->image('suppr.png', array('title' => "supprimer")), ['controller'=>'armures','action' => 'delete', $token->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $token->nom)]);
								echo '</div>';
	                		}
	                		else{
	                			echo '<div class="center armures-img">'.$this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'armures','action' => 'add',$personnage->id.'-torse'),
		                        array('escape' => false) 
                    			).'</div>';
	                		}
	                	?>
	            </td>
	        </tr>
	        <tr>
	            <th class="small-img small-img-area"><?= $this->Html->image('hands.png') ?></th>
	            <td>
		            <?php
	                		$token = null;
	                		if(!empty($armures)){
	                			foreach($armures as $e ){
	                				if($e->emplacement == "mains")
	                				$token = $e;
	                			}
	                		}
	                		if(isset($token)){
	                			echo '<div class="item">'.$this->Html->link($token->nom, ['controller'=>'armures','action' => 'edit', $token->id]).'</div>';
	                			echo '<div class="value">'.$token->indice.'</div>';
	                			echo '<div class="action">';
            				    echo $this->Html->link($this->Html->image('suppr.png', array('title' => "supprimer")), ['controller'=>'armures','action' => 'delete', $token->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $token->nom)]);
								echo '</div>';
	                		}
	                		else{
	                			echo '<div class="center armures-img">'.$this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'armures','action' => 'add',$personnage->id.'-mains'),
		                        array('escape' => false) 
                    			).'</div>';
	                		}
	                	?>
	            </td>
	        </tr>
	        <tr>
	            <th class="small-img small-img-area"><?= $this->Html->image('jambe.png') ?></th>
	            <td>
		            <?php
	                		$token = null;
	                		if(!empty($armures)){
	                			foreach($armures as $e ){
	                				if($e->emplacement == "jambes")
	                				$token = $e;
	                			}
	                		}
	                		if(isset($token)){
	                			echo '<div class="item">'.$this->Html->link($token->nom, ['controller'=>'armures','action' => 'edit', $token->id]).'</div>';
	                			echo '<div class="value">'.$token->indice.'</div>';
	                			echo '<div class="action">';
            				    echo $this->Html->link($this->Html->image('suppr.png', array('title' => "supprimer")), ['controller'=>'armures','action' => 'delete', $token->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $token->nom)]);
								echo '</div>';
	                		}
	                		else{
	                			echo '<div class="center armures-img">'.$this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'armures','action' => 'add',$personnage->id.'-jambes'),
		                        array('escape' => false) 
                    			).'</div>';
	                		}
	                	?>
	            </td>
	        </tr>
	        <tr>
	            <th class="small-img small-img-area"><?= $this->Html->image('pied.png') ?></th>
	            <td>
		            <?php
	                		$token = null;
	                		if(!empty($armures)){
	                			foreach($armures as $e ){
	                				if($e->emplacement == "pieds")
	                				$token = $e;
	                			}
	                		}
	                		if(isset($token)){
	                			echo '<div class="item">'.$this->Html->link($token->nom, ['controller'=>'armures','action' => 'edit', $token->id]).'</div>';
	                			echo '<div class="value">'.$token->indice.'</div>';
	                			echo '<div class="action">';
            				    echo $this->Html->link($this->Html->image('suppr.png', array('title' => "supprimer")), ['controller'=>'armures','action' => 'delete', $token->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $token->nom)]);
								echo '</div>';
	                		}
	                		else{
	                			echo '<div class="center armures-img">'.$this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'armures','action' => 'add',$personnage->id.'-pieds'),
		                        array('escape' => false) 
                    			).'</div>';
	                		}
	                	?>
	            </td>
	        </tr>
	        
	    </table>
    </div>
   	<div class="equipement THH">
   		<table>
	        <thead>
	            <tr>
	                <th colspan="4" class="center">Inventaire</th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php foreach ($objects as $object): ?>
	            <tr>
	                <td class="e-name"><?= h($object->nom) ?></td>
	                <td class="e-qtt"><input id=<?= $object->id ?> class="quantite" name="quantite" value=<?= $this->Number->format($object->quantite) ?>></input></td>
	                <td class="e-dsc"><?= h($object->description) ?></td>
	                <td class="e-action">
	                    <?= $this->Html->link($this->Html->image('modif.png', array('title' => "modifier")), ['controller'=>'objects','action' => 'edit', $object->id],array('escape'=>false)) ?>
	                    <?= $this->Html->link($this->Html->image('suppr.png', array('title' => "modifier")), ['controller'=>'objects','action' => 'delete', $object->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete # {0}?', $object->nom)]) ?>
	                 </td>
	            </tr>
	            <?php endforeach; ?>
	        </tbody>
    	</table>
    	<div class="center plus">
	    	<?php
	    		echo $this->Html->link(
		                        $this->Html->image('plus.png', array('title' => "Ajouter")), 
		                        array('controller'=>'objects','action' => 'add',$personnage->id),
		                        array('escape' => false) 
                    			);
            ?>
	    </div>
   	</div>
   	</fieldset> 
</div> 
	<?= $this->Form->end() ?>
</div>
   	