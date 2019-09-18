<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
$this->assign('showSearch', true);
?>
<h2 class="mb-5"><?= h($job->title) ?></h2>
<dl class="row">
    <?php if ($job->has('category')) : ?>
        <dt class="col-sm-2">
            <?= __('Category') ?>
        </dt>
        <dd class="col-sm-10">
            <?= $this->Html->link(
                $job->category->name, 
                ['controller' => 'Jobs', 'action' => 'browse', $job->category->id]
            ) ?>
        </dd>
    <?php endif ?>
    <?php if ($job->has('user')) : ?>
        <dt class="col-sm-2">
            <?= __('Submitted by') ?>
        </dt>
        <dd class="col-sm-10">
            <?= sprintf('%s %s', $job->user->first_name, $job->user->last_name) ?>
        </dd>
    <?php endif ?>
    <?php if ($job->has('type')) : ?>
        <dt class="col-sm-2">
            <?= __('Type') ?>
        </dt>
        <dd class="col-sm-10">
            <?= h($job->type->name) ?>
        </dd>
    <?php endif ?>
    <dt class="col-sm-2"><?= __('Company Name') ?></dt>
    <dd class="col-sm-10"><?= h($job->company_name) ?></dd>
    <dt class="col-sm-2"><?= __('Job Title') ?></dt>
    <dd class="col-sm-10"><?= h($job->title) ?></dd>
    <dt class="col-sm-2"><?= __('City') ?></dt>
    <dd class="col-sm-10"><?= h($job->city) ?></dd>
    <dt class="col-sm-2"><?= __('State') ?></dt>
    <dd class="col-sm-10"><?= h($job->state) ?></dd>
    <dt class="col-sm-2"><?= __('Contact Email') ?></dt>
    <dd class="col-sm-10"><?= h($job->contact_email) ?></dd>
    <dt class="col-sm-2"><?= __('Date') ?></dt>
    <dd class="col-sm-10"><?= h($job->created->nice()) ?></dd>
</dl>

<div class="mb-5">
    <h4><?= __('Description') ?></h4>
    <?= $this->Text->autoParagraph(h($job->description)); ?>
</div>

<div>
    <?= $this->Html->link(__('Back to Jobs'), ['action' => 'browse']) ?>
    <?php if ($this->request->session()->read('Auth.User.id') === $job->user_id) : ?>
        |
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->id]) ?>
        |
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete this job?', $job->id)]) ?>
    <?php endif ?>
</div>