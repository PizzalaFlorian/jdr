<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
    	<li class="heading"><?= __('Infos') ?></li>
        <li><?= $this->Html->link(__('règles de jeu'), ['action' => 'index']) ?></li><li><?= $this->Html->link(__('lore de jeu'), ['action' => 'index']) ?></li>
        <li class="heading"><?= __('Personnages') ?></li>
        <li><?= $this->Html->link(__('accueil personnages'), ['action' => 'index']) ?></li>
         <li><?= $this->Html->link(__('nouveau personnage'), ['action' => 'add']) ?></li>
    </ul>
</nav>    