<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
    	<li class="heading"><?= __('Infos') ?></li>
        <li><?= $this->Html->link(__('règles de jeu'), ['controller'=>'docs','action' => 'rules']) ?></li>
        <li><?= $this->Html->link(__('lore de jeu'), ['controller'=>'docs', => 'lore']) ?></li>
        <li class="heading"><?= __('Personnages') ?></li>
        <li><?= $this->Html->link(__('accueil personnages'), ['controller'=>'personnages','action' => 'index']) ?></li>
         <li><?= $this->Html->link(__('nouveau personnage'), ['controller'=>'personnages','action' => 'add']) ?></li>
    </ul>
</nav>    