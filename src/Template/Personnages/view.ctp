
<div class="personnages view large-9 medium-8 columns content">
    <h3><?= h($personnage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nom') ?></th>
            <td><?= h($personnage->nom) ?></td>
        </tr>
        <tr>
            <th><?= __('Prenom') ?></th>
            <td><?= h($personnage->prenom) ?></td>
        </tr>
        <tr>
            <th><?= __('Race') ?></th>
            <td><?= h($personnage->race) ?></td>
        </tr>
        <tr>
            <th><?= __('Type Campagne') ?></th>
            <td><?= h($personnage->type_campagne) ?></td>
        </tr>
        <tr>
            <th><?= __('Profession') ?></th>
            <td><?= h($personnage->profession) ?></td>
        </tr>
        <tr>
            <th><?= __('Archetype') ?></th>
            <td><?= h($personnage->archetype) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($personnage->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Age') ?></th>
            <td><?= $this->Number->format($personnage->age) ?></td>
        </tr>
        <tr>
            <th><?= __('Physique') ?></th>
            <td><?= $this->Number->format($personnage->physique) ?></td>
        </tr>
        <tr>
            <th><?= __('Adresse') ?></th>
            <td><?= $this->Number->format($personnage->adresse) ?></td>
        </tr>
        <tr>
            <th><?= __('Social') ?></th>
            <td><?= $this->Number->format($personnage->social) ?></td>
        </tr>
        <tr>
            <th><?= __('Esprit') ?></th>
            <td><?= $this->Number->format($personnage->esprit) ?></td>
        </tr>
        <tr>
            <th><?= __('Pv') ?></th>
            <td><?= $this->Number->format($personnage->pv) ?></td>
        </tr>
        <tr>
            <th><?= __('Pv Max') ?></th>
            <td><?= $this->Number->format($personnage->pv_max) ?></td>
        </tr>
        <tr>
            <th><?= __('Pm') ?></th>
            <td><?= $this->Number->format($personnage->pm) ?></td>
        </tr>
          <tr>
            <th><?= __('Pm Max') ?></th>
            <td><?= $this->Number->format($personnage->pm_max) ?></td>
        </tr>
        <tr>
            <th><?= __('Pa') ?></th>
            <td><?= $this->Number->format($personnage->pa) ?></td>
        </tr>
        <tr>
            <th><?= __('Pi') ?></th>
            <td><?= $this->Number->format($personnage->pi) ?></td>
        </tr>
        <tr>
            <th><?= __('Ca') ?></th>
            <td><?= $this->Number->format($personnage->ca) ?></td>
        </tr>
        <tr>
            <th><?= __('Destin') ?></th>
            <td><?= $this->Number->format($personnage->destin) ?></td>
        </tr>
        <tr>
            <th><?= __('Gold') ?></th>
            <td><?= $this->Number->format($personnage->gold) ?></td>
        </tr>
        <tr>
            <th><?= __('Argent') ?></th>
            <td><?= $this->Number->format($personnage->argent) ?></td>
        </tr>
        <tr>
            <th><?= __('Bronze') ?></th>
            <td><?= $this->Number->format($personnage->bronze) ?></td>
        </tr>
        <tr>
            <th><?= __('Niveau') ?></th>
            <td><?= $this->Number->format($personnage->niveau) ?></td>
        </tr>
        <tr>
            <th><?= __('Experience') ?></th>
            <td><?= $this->Number->format($personnage->experience) ?></td>
        </tr>
    </table>
</div>
