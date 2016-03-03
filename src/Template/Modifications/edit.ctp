<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $modification->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $modification->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Modifications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modifications form large-9 medium-8 columns content">
    <?= $this->Form->create($modification) ?>
    <fieldset>
        <legend><?= __('Edit Modification') ?></legend>
        <?php
            echo $this->Form->input('old_comment');
            echo $this->Form->input('comment_id', ['options' => $comments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
