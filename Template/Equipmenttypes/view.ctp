
<div class="equipmenttypes view large-10 medium-9 columns">
    <h2><?= h($equipmenttype->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($equipmenttype->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($equipmenttype->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Eqtypeid') ?></h6>
            <p><?= $this->Number->format($equipmenttype->eqtypeid) ?></p>
        </div>
    </div>
</div>

<?= $this->Html->link(__('Add Equipment'), ['action' => 'clickAddEquipmentButton', $equipmenttype->eqtypeid]) ?>

<div>
<div class="equipment index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('name') ?></th>
			<th><?= $this->Paginator->sort('notes') ?></th>
            <th><?= $this->Paginator->sort('installationdate') ?></th>
            <th><?= $this->Paginator->sort('existing_or_required') ?></th>
            <th><?= $this->Paginator->sort('barcode') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
	
    <tbody>	
    <?php 
	foreach ($equipments['equipment'] as $equipment): ?>
		<tr>
			<td><?=$equipment['name']?></td>			
			<td><?=$equipment['notes'] ?></td>
            <td><?=$equipment['installationdate'] ?></td>
            <td><?=$equipment['existing_or_required'] ?></td>
            <td><?=$equipment['barcode'] ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'equipment', 'action' => 'view', $equipment['equipid']]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'equipment', 'action' => 'edit', $equipment['equipid']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'equipment', 'action' => 'delete', $equipment['equipid']], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment['equipid'])]) ?>
            </td>
		</tr>	
	<?php endforeach; ?>
    </tbody>
    </table>
  </div>
</div>
