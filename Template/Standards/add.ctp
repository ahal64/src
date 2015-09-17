
<div class="standards form large-10 medium-9 columns">
    <?= $this->Form->create($standard); ?>
    <fieldset>
        <legend><?= __('Add Standard') ?></legend>
        <?php
			if($equipmentid == null)
			{
				echo $this->Form->label('equipment: ');
				echo $this->Form->select('equipid',$equipmentlist,['empty' => '(choose one)']);
			}
			else
			{
				echo $this->Form->input('equipid', ['default' => $equipmentid,'readonly' => 'readonly']);
			}
		    //echo $this->Form->input('equipid');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('notes');
            echo $this->Form->input('actionrequired');
            echo $this->Form->input('passorfail');
            echo $this->Form->input('extracomments');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
