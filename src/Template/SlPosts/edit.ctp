<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $slPost->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $slPost->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sl Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="slPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($slPost) ?>
    <fieldset>
        <legend><?= __('Edit Sl Post') ?></legend>
        <?php
            echo $this->Form->input('post_author');
            $now = new DateTime();
            $date = $now->format('Y-m-d H:i:s');
            echo $this->Form->hidden('submit_date', ['value' => $date]);
            echo $this->Form->hidden('post_date', ['value' => $date]);
            echo $this->Form->input('post_content');
            echo $this->Form->input('post_title');
            echo $this->Form->input('post_description');
            echo $this->Form->input('post_thumbnail');
            echo $this->Form->input('post_status', [
              'options' => ['publish' => '公開', 'draft' => '下書き', 'TBR' => '要修正', 'pending' => '承認待ち']
            ]);
            echo $this->Form->input('post_type');
            echo $this->Form->input('post_mime_type');
            echo $this->Form->input('post_keyword');
            echo $this->Form->input('post_pv');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
