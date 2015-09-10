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
            <h6 class="subheader"><?= __('Standardid') ?></h6>
            <p><?= $this->Number->format($equipment->standardid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Installationdate') ?></h6>
            <p><?= h($equipment->installationdate) ?></p>
        </div>
    </div>
</div>
