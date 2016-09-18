<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password', ['default' => NULL]);
            echo $this->Form->input('password_confirm', ['type' => 'password']);
            echo $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']]);
            $now = new DateTime();
            $date = $now->format('Y-m-d H:i:s');
            echo $this->Form->hidden('modified', ['value' => $date]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
