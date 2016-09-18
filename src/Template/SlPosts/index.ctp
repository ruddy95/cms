<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sl Post'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="slPosts index large-9 medium-8 columns content">
    <h3><?= __('Sl Posts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_author') ?></th>
                <th scope="col"><?= $this->Paginator->sort('submit_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_thumbnail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_mime_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_pv') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($slPosts as $slPost): ?>
            <tr>
                <td><?= $this->Number->format($slPost->ID) ?></td>
                <td><?= $this->Number->format($slPost->post_author) ?></td>
                <td><?= h($slPost->submit_date) ?></td>
                <td><?= h($slPost->post_date) ?></td>
                <td><?= h($slPost->post_thumbnail) ?></td>
                <td><?= h($slPost->post_status) ?></td>
                <td><?= h($slPost->post_type) ?></td>
                <td><?= h($slPost->post_mime_type) ?></td>
                <td><?= $this->Number->format($slPost->post_pv) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $slPost->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slPost->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slPost->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $slPost->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
