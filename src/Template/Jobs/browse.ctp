<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $jobs
 */
$this->assign('showSearch', true);
$this->assign('showCategories', true);
?>
<h2 class="mb-5">Latest Job Listings</h2>
<?php if ($jobs->count()): ?>
    <?php foreach ($jobs as $job): ?>
        <div class="row mb-4">
            <div class="col-md-3 col-lg-2 d-flex justify-content-md-center align-items-md-center mb-3 mb-md-0">
                <div class="py-2 px-4 rounded text-light" style="background-color: <?= h($job->type->color) ?>">
                    <?= h($job->type->name) ?>
                </div>
            </div>
            <div class="col-md-9 col-lg-10">
                <h3>
                    <?= h($job->title) ?>
                    <small class="text-muted">(<?= h($job->city) ?>, <?= h($job->state) ?>)</small>
                </h3>
                <?php if ($job->created) : ?>
                    <p><?= h($job->created->nice()); ?></p>
                <?php endif; ?>
                <p class="m-0">
                    <?= $this->Text->truncate($job->description, 250, ['ellipsis' => '...', 'exact' => false ]) ?>
                    <?= $this->Html->link(
                        '<i class="fas fa-angle-double-right mr-1"></i>' . __('Read More'), 
                        ['controller' => 'Jobs', 'action' => 'view', $job->id], 
                        ['escape' => false, 'title' => __('Read More'), 'class' => 'text-nowrap']
                    ) ?>
                </p>
            </div>
        </div><!-- /.row -->

        <hr>
    <?php endforeach; ?>

    <div class="paginator mt-5">
        <?php if ($this->Paginator->total() > 1) : ?>
            <ul class="pagination justify-content-end">
                <?= $this->Paginator->first(__('First')) ?>
                <?= $this->Paginator->prev(__('Previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next')) ?>
                <?= $this->Paginator->last(__('Last')) ?>
            </ul>
        <?php endif ?>
        <p class="text-right text-muted mb-0">
            <?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
        </p>
    </div><!-- /.paginator -->

<?php else: ?>
    <p class="my-5">Sorry, no jobs available!</p>
<?php endif; ?>
