<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Agencygroup'), ['action' => 'edit', $agencygroup->agencygroupid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agencygroup'), ['action' => 'delete', $agencygroup->agencygroupid], ['confirm' => __('Are you sure you want to delete # {0}?', $agencygroup->agencygroupid)]) ?> </li>
        <li><?= $this->Html->link(__('List Agencygroups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agencygroup'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="agencygroups view large-10 medium-9 columns">
    <h2><?= h($agencygroup->agencygroupid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Groupname') ?></h6>
            <p><?= h($agencygroup->groupname) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Agencygroupid') ?></h6>
            <p><?= $this->Number->format($agencygroup->agencygroupid) ?></p>
        </div>
    </div>
</div>
