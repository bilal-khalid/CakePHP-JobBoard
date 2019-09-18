<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
$this->assign('showSearch', true);
?>
<h2 class="mb-5">Add Job</h2>
<?= $this->Form->create($job) ?>
    <div class="form-group row">
        <label for="category_id" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Category</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->select(
                'category_id',
                $categories, 
                [
                    'id' => 'category_id', 
                    'class' => 'form-control' . ($this->Form->isFieldError('category_id') ? ' is-invalid' : ''), 
                    'empty' => 'Select Category'
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('category_id')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('category_id') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="type_id" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Type</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->select(
                'type_id',
                $types, 
                [
                    'id' => 'type_id', 
                    'class' => 'form-control' . ($this->Form->isFieldError('type_id') ? ' is-invalid' : ''), 
                    'empty' => 'Select Type'
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('type_id')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('type_id') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="company_name" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Company Name</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'company_name', 
                [
                    'id' => 'company_name', 
                    'class' => 'form-control' . ($this->Form->isFieldError('company_name') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('company_name')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('company_name') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Job Title</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'title', 
                [
                    'id' => 'title', 
                    'class' => 'form-control' . ($this->Form->isFieldError('title') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('title')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('title') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="description" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Description</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->textarea(
                'description', 
                [
                    'id' => 'description', 
                    'class' => 'form-control' . ($this->Form->isFieldError('description') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('description')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('description') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="city" class="col-sm-4 col-md-3 col-xl-2 col-form-label">City</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'city', 
                [
                    'id' => 'city', 
                    'class' => 'form-control' . ($this->Form->isFieldError('city') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('city')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('city') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="state" class="col-sm-4 col-md-3 col-xl-2 col-form-label">State</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->select(
                'state', 
                [
                    ['value' => 'AL', 'text' => 'Alabama'], 
                    ['value' => 'AK', 'text' => 'Alaska'], 
                    ['value' => 'AZ', 'text' => 'Arizona'], 
                    ['value' => 'AR', 'text' => 'Arkansas'], 
                    ['value' => 'CA', 'text' => 'California'], 
                    ['value' => 'CO', 'text' => 'Colorado'], 
                    ['value' => 'CT', 'text' => 'Connecticut'], 
                    ['value' => 'DE', 'text' => 'Delaware'], 
                    ['value' => 'FL', 'text' => 'Florida'], 
                    ['value' => 'GA', 'text' => 'Georgia'], 
                    ['value' => 'HI', 'text' => 'Hawaii'], 
                    ['value' => 'ID', 'text' => 'Idaho'], 
                    ['value' => 'IL', 'text' => 'Illinois'], 
                    ['value' => 'IN', 'text' => 'Indiana'], 
                    ['value' => 'IA', 'text' => 'Iowa'], 
                    ['value' => 'KS', 'text' => 'Kansas'], 
                    ['value' => 'KY', 'text' => 'Kentucky'], 
                    ['value' => 'LA', 'text' => 'Louisiana'], 
                    ['value' => 'ME', 'text' => 'Maine'], 
                    ['value' => 'MD', 'text' => 'Maryland'], 
                    ['value' => 'MA', 'text' => 'Massachusetts'], 
                    ['value' => 'MI', 'text' => 'Michigan'], 
                    ['value' => 'MN', 'text' => 'Minnesota'], 
                    ['value' => 'MS', 'text' => 'Mississippi'], 
                    ['value' => 'MO', 'text' => 'Missouri'], 
                    ['value' => 'MT', 'text' => 'Montana'], 
                    ['value' => 'NE', 'text' => 'Nebraska'], 
                    ['value' => 'NV', 'text' => 'Nevada'], 
                    ['value' => 'NH', 'text' => 'New Hampshire'], 
                    ['value' => 'NJ', 'text' => 'New Jersey'], 
                    ['value' => 'NM', 'text' => 'New Mexico'], 
                    ['value' => 'NY', 'text' => 'New York'], 
                    ['value' => 'NC', 'text' => 'North Carolina'], 
                    ['value' => 'ND', 'text' => 'North Dakota'], 
                    ['value' => 'OH', 'text' => 'Ohio'], 
                    ['value' => 'OK', 'text' => 'Oklahoma'], 
                    ['value' => 'OR', 'text' => 'Oregon'], 
                    ['value' => 'PA', 'text' => 'Pennsylvania'], 
                    ['value' => 'RI', 'text' => 'Rhode Island'], 
                    ['value' => 'SC', 'text' => 'South Carolina'], 
                    ['value' => 'SD', 'text' => 'South Dakota'], 
                    ['value' => 'TN', 'text' => 'Tennessee'], 
                    ['value' => 'TX', 'text' => 'Texas'], 
                    ['value' => 'UT', 'text' => 'Utah'], 
                    ['value' => 'VT', 'text' => 'Vermont'], 
                    ['value' => 'VA', 'text' => 'Virginia'], 
                    ['value' => 'WA', 'text' => 'Washington'], 
                    ['value' => 'WV', 'text' => 'West Virginia'], 
                    ['value' => 'WI', 'text' => 'Wisconsin'], 
                    ['value' => 'WY', 'text' => 'Wyoming']
                ], 
                [
                    'class' => 'form-control' . ($this->Form->isFieldError('state') ? ' is-invalid' : ''),
                    'empty' => 'Select State'
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('state')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('state') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="contact_email" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Contact Email</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'contact_email', 
                [
                    'type' => 'email',
                    'id' => 'contact_email', 
                    'class' => 'form-control' . ($this->Form->isFieldError('contact_email') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('contact_email')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('contact_email') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="text-right">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
<?= $this->Form->end() ?>
