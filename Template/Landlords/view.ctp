
<div class="landlords view large-10 medium-9 columns">
    <h2><?= h($landlord->landlordid) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($landlord->firstname) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($landlord->lastname) ?></p>
            <h6 class="subheader"><?= __('Address1') ?></h6>
            <p><?= h($landlord->address1) ?></p>
            <h6 class="subheader"><?= __('Address2') ?></h6>
            <p><?= h($landlord->address2) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($landlord->mobile) ?></p>
            <h6 class="subheader"><?= __('Homephone') ?></h6>
            <p><?= h($landlord->homephone) ?></p>
            <h6 class="subheader"><?= __('Officephone') ?></h6>
            <p><?= h($landlord->officephone) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($landlord->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Landlordid') ?></h6>
            <p><?= $this->Number->format($landlord->landlordid) ?></p>
        </div>
    </div>
</div>
