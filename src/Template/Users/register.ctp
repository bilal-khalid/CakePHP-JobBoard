<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<h2 class="mb-5">Register</h2>
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create($user) ?>
    <div class="form-group row">
        <label for="first_name" class="col-sm-4 col-md-3 col-xl-2 col-form-label">First Name</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'first_name', 
                [
                    'id' => 'first_name', 
                    'class' => 'form-control' . ($this->Form->isFieldError('first_name') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('first_name')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('first_name') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="last_name" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Last Name</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'last_name', 
                [
                    'id' => 'last_name', 
                    'class' => 'form-control' . ($this->Form->isFieldError('last_name') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('last_name')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('last_name') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Email</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'email', 
                [
                    'type' => 'email', 
                    'id' => 'email', 
                    'class' => 'form-control' . ($this->Form->isFieldError('email') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('email')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('email') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="username" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Username</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'username', 
                [
                    'id' => 'username', 
                    'class' => 'form-control' . ($this->Form->isFieldError('username') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('username')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('username') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Password</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'password', 
                [
                    'type' => 'password', 
                    'id' => 'password', 
                    'class' => 'form-control' . ($this->Form->isFieldError('password') ? ' is-invalid' : '')
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('password')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('password') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="confirm_password" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Confirm Password</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'confirm_password', 
                [
                    'type' => 'password', 
                    'id' => 'confirm_password', 
                    'class' => 'form-control' . ($this->Form->isFieldError('confirm_password') ? ' is-invalid' : ''), 
                    'required' => true
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('confirm_password')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('confirm_password') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="confirm_password" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Account Type</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->select(
                'role', 
                [
                    ['value' => 'Job Seeker', 'text' => 'Job Seeker'], 
                    ['value' => 'Employer', 'text' => 'Employer']
                ], 
                [
                    'class' => 'form-control' . ($this->Form->isFieldError('role') ? ' is-invalid' : ''),
                    'empty' => 'Select Account Type'
                ]
            ) ?>
            <?php if ($this->Form->isFieldError('role')) : ?>
                <div class="invalid-feedback"><?= $this->Form->error('role') ?></div>
            <?php endif ?>
        </div>
    </div>
    <div class="text-right">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
<?= $this->Form->end() ?>
