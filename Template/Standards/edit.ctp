
<div class="standards form large-10 medium-9 columns">
    <?= $this->Form->create($standard); ?>
    <fieldset>
        <legend><?= __('Edit Standard') ?></legend>
        <?php
		    echo $this->Form->input('equipid');
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
