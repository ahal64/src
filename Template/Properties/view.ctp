
<div class="properties view large-10 medium-9 columns">
    <h2><?= h($property->propertiesid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Propertymanager') ?></h6>
            <p><?= h($property->propertymanager) ?></p>
            <h6 class="subheader"><?= __('Keynumber') ?></h6>
            <p><?= h($property->keynumber) ?></p>
            <h6 class="subheader"><?= __('Buildingclass') ?></h6>
            <p><?= h($property->buildingclass) ?></p>
            <h6 class="subheader"><?= __('Occupancypermit') ?></h6>
            <p><?= h($property->occupancypermit) ?></p>
            <h6 class="subheader"><?= __('Address1') ?></h6>
            <p><?= h($property->address1) ?></p>
            <h6 class="subheader"><?= __('Address2') ?></h6>
            <p><?= h($property->address2) ?></p>
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <p><?= h($property->notes) ?></p>
            <h6 class="subheader"><?= __('Propertystatus') ?></h6>
            <p><?= h($property->propertystatus) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Propertiesid') ?></h6>
            <p><?= $this->Number->format($property->propertiesid) ?></p>
            <h6 class="subheader"><?= __('Occid') ?></h6>
            <p><?= $this->Number->format($property->occid) ?></p>
            <h6 class="subheader"><?= __('Landlordid') ?></h6>
            <p><?= $this->Number->format($property->landlordid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Duedate') ?></h6>
            <p><?= h($property->duedate) ?></p>
        </div>
    </div>
</div>

<div>
   <?= $this->Html->link(__('Add an Equipment Piece'), ['action' => 'clickAddEquipmentButton', $property->propertiesid]) ?>
</div>

<!--
<div class="jobs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('jobid') ?></th>
            <th><?= $this->Paginator->sort('equipid') ?></th>
            <th><?= $this->Paginator->sort('userid') ?></th>
            <th><?= $this->Paginator->sort('jobdesc') ?></th>
            <th><?= $this->Paginator->sort('startdate') ?></th>
            <th><?= $this->Paginator->sort('enddate') ?></th>
			<th><?= $this->Paginator->sort('status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($jobs['jobs'] as $job): ?>
        <tr>
            <td><?= $this->Number->format($job['jobid']) ?></td>  
            <td><?= $this->Number->format($job['equipid']) ?></td>
            <td><?= $this->Number->format($job['userid']) ?></td>
            <td><?= $job['jobdesc'] ?></td>
            <td><?= $job['startdate'] ?></td>
            <td><?= $job['enddate'] ?></td>
			 <td><?=$job['status'] ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $job['jobid']]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job['jobid']]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job['jobid']], ['confirm' => __('Are you sure you want to delete # {0}?', $job['jobid'])]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
-->