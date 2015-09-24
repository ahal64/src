<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Occupant'), ['action' => 'edit', $occupant->occid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Occupant'), ['action' => 'delete', $occupant->occid], ['confirm' => __('Are you sure you want to delete # {0}?', $occupant->occid)]) ?> </li>
        <li><?= $this->Html->link(__('List Occupants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Occupant'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="occupants view large-10 medium-9 columns">
    <h2><?= h($occupant->occid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($occupant->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($occupant->lastname) ?></p>
            <h6 class="subheader"><?= __('Address1') ?></h6>
            <p><?= h($occupant->address1) ?></p>
            <h6 class="subheader"><?= __('Address2') ?></h6>
            <p><?= h($occupant->address2) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($occupant->mobile) ?></p>
            <h6 class="subheader"><?= __('Officephone') ?></h6>
            <p><?= h($occupant->officephone) ?></p>
            <h6 class="subheader"><?= __('Homephone') ?></h6>
            <p><?= h($occupant->homephone) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Occid') ?></h6>
            <p><?= $this->Number->format($occupant->occid) ?></p>
            <h6 class="subheader"><?= __('Otherphone') ?></h6>
            <p><?= $this->Number->format($occupant->otherphone) ?></p>
        </div>
    </div>
</div>
