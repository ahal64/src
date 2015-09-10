<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipment->equipid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->equipid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="equipment form large-10 medium-9 columns">
    <?= $this->Form->create($equipment); ?>
    <fieldset>
        <legend><?= __('Edit Equipment') ?></legend>
        <?php
            echo $this->Form->input('eqtypeid');
            echo $this->Form->input('standardid');
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
