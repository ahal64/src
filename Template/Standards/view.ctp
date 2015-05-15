<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Standard'), ['action' => 'edit', $standard->standardid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Standard'), ['action' => 'delete', $standard->standardid], ['confirm' => __('Are you sure you want to delete # {0}?', $standard->standardid)]) ?> </li>
        <li><?= $this->Html->link(__('List Standards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Standard'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="standards view large-10 medium-9 columns">
    <h2><?= h($standard->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($standard->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($standard->description) ?></p>
            <h6 class="subheader"><?= __('Notes') ?></h6>
            <p><?= h($standard->notes) ?></p>
            <h6 class="subheader"><?= __('Actionrequired') ?></h6>
            <p><?= h($standard->actionrequired) ?></p>
            <h6 class="subheader"><?= __('Passorfail') ?></h6>
            <p><?= h($standard->passorfail) ?></p>
            <h6 class="subheader"><?= __('Extracomments') ?></h6>
            <p><?= h($standard->extracomments) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Standardid') ?></h6>
            <p><?= $this->Number->format($standard->standardid) ?></p>
        </div>
    </div>
</div>
