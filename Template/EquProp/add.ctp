<
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
