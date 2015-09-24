<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Equ Prop'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="equProp form large-10 medium-9 columns">
    <?= $this->Form->create($equProp); ?>
    <fieldset>
        <legend><?= __('Add Equ Prop') ?></legend>
        <?php
			echo $this->Form->label('equipment: ');
            echo $this->Form->select('equipid',$equipmentlist,['empty' => '(choose one)']);
		    if($propertyid == null)
			{
			   echo $this->Form->label('property: ');
               echo $this->Form->select('propertiesid',$propertylist,['empty' => '(choose one)']);
			}
			else
			{
				echo $this->Form->input('propertiesid',['default' => $propertyid,'readonly' => 'readonly']);
			}
            echo $this->Form->input('duedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
