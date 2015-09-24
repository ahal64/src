
<div class="agencystaffs view large-10 medium-9 columns">
    <h2><?= h($agencystaff->agencystaffid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($agencystaff->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($agencystaff->lastname) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($agencystaff->mobile) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Agencystaffid') ?></h6>
            <p><?= $this->Number->format($agencystaff->agencystaffid) ?></p>
        </div>
    </div>
</div>
