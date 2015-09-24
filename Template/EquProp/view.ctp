<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Equ Prop'), ['action' => 'edit', $equProp->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equ Prop'), ['action' => 'delete', $equProp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equProp->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equ Prop'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equ Prop'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="equProp view large-10 medium-9 columns">
    <h2><?= h($equProp->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($equProp->id) ?></p>
            <h6 class="subheader"><?= __('Equipid') ?></h6>
            <p><?= $this->Number->format($equProp->equipid) ?></p>
            <h6 class="subheader"><?= __('Propertiesid') ?></h6>
            <p><?= $this->Number->format($equProp->propertiesid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Duedate') ?></h6>
            <p><?= h($equProp->duedate) ?></p>
        </div>
    </div>
</div>
