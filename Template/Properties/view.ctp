<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Property'), ['action' => 'edit', $property->propertiesid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Property'), ['action' => 'delete', $property->propertiesid], ['confirm' => __('Are you sure you want to delete # {0}?', $property->propertiesid)]) ?> </li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?> </li>
    </ul>
</div>
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
            <h6 class="subheader"><?= __('Standardid') ?></h6>
            <p><?= $this->Number->format($property->standardid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Duedate') ?></h6>
            <p><?= h($property->duedate) ?></p>
        </div>
    </div>
</div>
