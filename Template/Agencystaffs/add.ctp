<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Agencystaffs'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="agencystaffs form large-10 medium-9 columns">
    <?= $this->Form->create($agencystaff); ?>
    <fieldset>
        <legend><?= __('Add Agencystaff') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('mobile');
			
			if($officeid == null)
			{
				//echo $this->Form->input('agencyofficeid');
				echo $this->Form->label('agencyofficeid: ');
			    echo $this->Form->select('agencyofficeid',$officelist,['empty' => '(choose one)']);
			}
			else
			{
				echo $this->Form->input('agencyofficeid',['default' => $officeid,'readonly' => 'readonly']);
				//echo $this->Form->label('agencyofficeid: ');
				//echo $officeid;
			}
			
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
