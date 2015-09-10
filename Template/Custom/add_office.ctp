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