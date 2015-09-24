<div class="actions columns large-2 medium-3">
    
    
</div>
<div class="jobs form large-10 medium-9 columns">
    <?= $this->Form->create($job); ?>
    <fieldset>
        <legend><?= __('Add Job') ?></legend>
        <?php
		    echo $this->Form->label('property: ');
            echo $this->Form->select('propertiesid',$propertylist,['empty' => '(choose one)']);
			echo $this->Form->label('equipment: ');
            echo $this->Form->select('equipid',$equipmentlist,['empty' => '(choose one)']);
			echo $this->Form->label('technician: ');
            echo $this->Form->select('userid',$userlist,['empty' => '(choose one)']);
            echo $this->Form->input('jobdesc');
            echo $this->Form->input('startdate');
            echo $this->Form->input('enddate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
