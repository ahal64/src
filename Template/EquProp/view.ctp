
<div class="equProp view large-10 medium-9 columns">
    <h2><?= h($equProp->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($equProp->id) ?></p>
            <h6 class="subheader"><?= __('Equipid') ?></h6>
            <p><?= $this->Number->format($equProp->equipid) ?></p>
            <h6 class="subheader"><?= __('Propertiesid') ?></h6>
            <p><?= $this->Number->format($equProp->propertiesid) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Duedate') ?></h6>
            <p><?= h($equProp->duedate) ?></p>
        </div>
    </div>
</div>
