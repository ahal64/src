<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Equipment'), ['action' => 'edit', $equipment->equipid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipment'), ['action' => 'delete', $equipment->equipid], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->equipid)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="equipment view large-10 medium-9 columns">
    <h2><?= h($equipment->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($equipment->name) ?></p>
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <p><?= h($equipment->notes) ?></p>
            <h6 class="subheader"><?= __('Existing Or Required') ?></h6>
            <p><?= h($equipment->existing_or_required) ?></p>
            <h6 class="subheader"><?= __('Barcode') ?></h6>
            <p><?= h($equipment->barcode) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Equipid') ?></h6>
            <p><?= $this->Number->format($equipment->equipid) ?></p>
            <h6 class="subheader"><?= __('Eqtypeid') ?></h6>
            <p><?= $this->Number->format($equipment->eqtypeid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Installationdate') ?></h6>
            <p><?= h($equipment->installationdate) ?></p>
        </div>
    </div>
</div>

<?= $this->Html->link(__('Add Standard'), ['action' => 'clickAddStandardButton', $equipment->equipid]) ?>

<div>
   <div class="standards index large-10 medium-9 columns">
     <table cellpadding="0" cellspacing="0">
     <thead>
        <tr>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('notes') ?></th>
            <th><?= $this->Paginator->sort('actionrequired') ?></th>
            <th><?= $this->Paginator->sort('passorfail') ?></th>
            <th><?= $this->Paginator->sort('extracomments') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
	
	<tbody>
    <?php foreach ($standards['standards'] as $standard): ?>
        <tr>
            <td><?= $standard['name'] ?></td>
            <td><?= $standard['description'] ?></td>
            <td><?= $standard['notes'] ?></td>
            <td><?= $standard['actionrequired'] ?></td>
            <td><?= $standard['passorfail'] ?></td>
            <td><?= $standard['extracomments'] ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' =>'standards', 'action' => 'view', $standard['standardid']]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' =>'standards', 'action' => 'edit', $standard['standardid']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' =>'standards', 'action' => 'delete', $standard['standardid']], ['confirm' => __('Are you sure you want to delete # {0}?', $standard['standardid'])]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
   </div>
</div>
