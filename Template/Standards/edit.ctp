<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $standard->standardid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $standard->standardid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Standards'), ['action' => 'index']) ?></li>
    </ul>
</div>
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
