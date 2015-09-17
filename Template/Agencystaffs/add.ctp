
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
