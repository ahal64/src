
<div class="tasks form large-10 medium-9 columns">
    <?= $this->Form->create($task); ?>
    <fieldset>
        <legend><?= __('Add Task') ?></legend>
        <?php
		    if($standid == null)
			{
				echo $this->Form->label('standard: ');
				echo $this->Form->select('standardid',$standardlist,['empty' => '(choose one)']);
			}
			else
			{
				echo $this->Form->input('standardid', ['default' => $standid,'readonly' => 'readonly']);
			}
            //echo $this->Form->input('standardid');
            echo $this->Form->input('name');
            echo $this->Form->input('duedate');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
