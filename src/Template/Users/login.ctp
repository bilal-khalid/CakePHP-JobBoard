<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<h2 class="mb-5">Login</h2>
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <div class="form-group row">
        <label for="username" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Username</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'username', 
                ['id' => 'username', 'class' => 'form-control', 'required' => true]
            ) ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-4 col-md-3 col-xl-2 col-form-label">Password</label>
        <div class="col-sm-8 col-md-9 col-xl-10">
            <?= $this->Form->text(
                'password', 
                ['type' => 'password', 'id' => 'password', 'class' => 'form-control', 'required' => true]
            ) ?>
        </div>
    </div>
    <div class="text-right">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    </div>
<?= $this->Form->end() ?>
