<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sl Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="slPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($slPost) ?>
    <fieldset>
        <legend><?= __('Add Sl Post') ?></legend>
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
            echo $this->Form->input('post_keyword');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
