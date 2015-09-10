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

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Agencyoffices'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="agencyoffices form large-10 medium-9 columns">
    <?= $this->Form->create($agencyoffice); ?>
    <fieldset>
        <legend><?= __('Add Agencyoffice') ?></legend>
        <?php
            echo $this->Form->input('agencyname');
            echo $this->Form->input('customercode');
            echo $this->Form->input('abn');
            echo $this->Form->input('phone');
            echo $this->Form->input('fax');
            echo $this->Form->input('email');
            echo $this->Form->input('website');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('suburb');
            echo $this->Form->input('postcode');
            echo $this->Form->input('agencygroupid');
            echo $this->Form->input('landlordid');
            echo $this->Form->input('agencystaffid');
        ?>
    </fieldset>
	
    <fieldset>
        <legend><?= __('Add Agencystaff') ?></legend>
        <?php
            echo $this->Form->input('Agencystaff.firstname');
            echo $this->Form->input('Agencystaff.lastname');
            echo $this->Form->input('Agencystaff.mobile');
        ?>
    </fieldset>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

