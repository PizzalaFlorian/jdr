<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Arme'), ['action' => 'edit', $arme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Arme'), ['action' => 'delete', $arme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Armes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Arme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personnages'), ['controller' => 'Personnages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personnage'), ['controller' => 'Personnages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="armes view large-9 medium-8 columns content">
    <h3><?= h($arme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Personnage') ?></th>
            <td><?= $arme->has('personnage') ? $this->Html->link($arme->personnage->id, ['controller' => 'Personnages', 'action' => 'view', $arme->personnage->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($arme->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Degat') ?></th>
            <td><?= h($arme->degat) ?></td>
        </tr>
        <tr>
            <th><?= __('Munition') ?></th>
            <td><?= h($arme->munition) ?></td>
        </tr>
        <tr>
            <th><?= __('Composante') ?></th>
            <td><?= h($arme->composante) ?></td>
        </tr>
        <tr>
            <th><?= __('Porte') ?></th>
            <td><?= h($arme->porte) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($arme->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Cdt') ?></th>
            <td><?= $this->Number->format($arme->cdt) ?></td>
        </tr>
        <tr>
            <th><?= __('Dura') ?></th>
            <td><?= $this->Number->format($arme->dura) ?></td>
        </tr>
    </table>
</div>
