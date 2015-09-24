
<div class="agencystaffs form large-10 medium-9 columns">
    <?= $this->Form->create($agencystaff); ?>
    <fieldset>
        <legend><?= __('Edit Agencystaff') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('mobile');
			//echo $this->Form->input('agencyofficeid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
