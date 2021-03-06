
<div class="equipment form large-10 medium-9 columns">
    <?= $this->Form->create($equipment); ?>
    <fieldset>
        <legend><?= __('Add Equipment') ?></legend>
        <?php
		
		    if($equtypeid == null)
			{
				echo $this->Form->label('Equipment type: ');
				echo $this->Form->select('eqtypeid',$equtypelist,['empty' => '(choose one)']);
			
			}
			else
			{
				echo $this->Form->input('eqtypeid',['default' => $equtypeid,'readonly' => 'readonly']);
			}
            echo $this->Form->input('name');
            echo $this->Form->input('notes');
            echo $this->Form->input('installationdate');
            echo $this->Form->input('existing_or_required');
            echo $this->Form->input('barcode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
