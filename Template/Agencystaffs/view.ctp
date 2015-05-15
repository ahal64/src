<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Agencystaff'), ['action' => 'edit', $agencystaff->agencystaffid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agencystaff'), ['action' => 'delete', $agencystaff->agencystaffid], ['confirm' => __('Are you sure you want to delete # {0}?', $agencystaff->agencystaffid)]) ?> </li>
        <li><?= $this->Html->link(__('List Agencystaffs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agencystaff'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="agencystaffs view large-10 medium-9 columns">
    <h2><?= h($agencystaff->agencystaffid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($agencystaff->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($agencystaff->lastname) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($agencystaff->mobile) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Agencystaffid') ?></h6>
            <p><?= $this->Number->format($agencystaff->agencystaffid) ?></p>
        </div>
    </div>
</div>
