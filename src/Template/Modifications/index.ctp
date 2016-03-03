<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Modification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modifications index large-9 medium-8 columns content">
    <h3><?= __('Modifications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('comment_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modifications as $modification): ?>
            <tr>
                <td><?= $this->Number->format($modification->id) ?></td>
                <td><?= $modification->has('comment') ? $this->Html->link($modification->comment->id, ['controller' => 'Comments', 'action' => 'view', $modification->comment->id]) : '' ?></td>
                <td><?= h($modification->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $modification->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modification->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modification->id)]) ?>
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
