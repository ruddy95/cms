<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sl Post'), ['action' => 'edit', $slPost->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sl Post'), ['action' => 'delete', $slPost->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $slPost->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Sl Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sl Post'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="slPosts view large-9 medium-8 columns content">
    <h3><?= h($slPost->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Post Thumbnail') ?></th>
            <td><?= h($slPost->post_thumbnail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Status') ?></th>
            <td><?= h($slPost->post_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Type') ?></th>
            <td><?= h($slPost->post_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Mime Type') ?></th>
            <td><?= h($slPost->post_mime_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($slPost->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Author') ?></th>
            <td><?= $this->Number->format($slPost->post_author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Pv') ?></th>
            <td><?= $this->Number->format($slPost->post_pv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Submit Date') ?></th>
            <td><?= h($slPost->submit_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Date') ?></th>
            <td><?= h($slPost->post_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Post Content') ?></h4>
        <?= $this->Text->autoParagraph(h($slPost->post_content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Post Title') ?></h4>
        <?= $this->Text->autoParagraph(h($slPost->post_title)); ?>
    </div>
    <div class="row">
        <h4><?= __('Post Description') ?></h4>
        <?= $this->Text->autoParagraph(h($slPost->post_description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Post Keyword') ?></h4>
        <?= $this->Text->autoParagraph(h($slPost->post_keyword)); ?>
    </div>
</div>
