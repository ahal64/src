
<div class="properties index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('propertiesid') ?></th>
            <th><?= $this->Paginator->sort('agencyofficeid') ?></th>
            <th><?= $this->Paginator->sort('propertymanager') ?></th>
            <th><?= $this->Paginator->sort('keynumber') ?></th>
            <th><?= $this->Paginator->sort('buildingclass') ?></th>
			<th><?= $this->Paginator->sort('address1') ?></th>
			<th><?= $this->Paginator->sort('address2') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($properties as $property): ?>
        <tr>
            <td><?= $this->Number->format($property->propertiesid) ?></td>
            <td><?= $this->Number->format($property->agencyofficeid) ?></td>
            <td><?= h($property->propertymanager) ?></td>
            <td><?= h($property->keynumber) ?></td>
            <td><?= h($property->buildingclass) ?></td>
			<td><?= h($property->address1) ?></td>
			<td><?= h($property->address2) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $property->propertiesid]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->propertiesid]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->propertiesid], ['confirm' => __('Are you sure you want to delete # {0}?', $property->propertiesid)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
