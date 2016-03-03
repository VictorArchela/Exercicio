<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Modification'), ['action' => 'edit', $modification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modification'), ['action' => 'delete', $modification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modifications view large-9 medium-8 columns content">
    <h3><?= h($modification->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Comment') ?></th>
            <td><?= $modification->has('comment') ? $this->Html->link($modification->comment->id, ['controller' => 'Comments', 'action' => 'view', $modification->comment->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($modification->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($modification->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Old Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($modification->old_comment)); ?>
    </div>
</div>
