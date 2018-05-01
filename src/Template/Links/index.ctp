<!--
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Link'), ['action' => 'add']) ?></li>
    </ul>
</div>
-->

<div class="links index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
<!--
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('id_category') ?></th>
            <th><?= $this->Paginator->sort('id_contact') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
-->
        <tr>
            <th><?=h('Name') ?></th>
            <th><?= h('Surname') ?></th>
            <th><?=h('Category') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($links as $link): ?>
        <tr>

            <td><?= h($link->contact->name) ?></td>
            <td><?= h($link->contact->surname) ?></td>
            <td><?= h($link->category->category) ?></td>

            <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $link->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $link->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $link->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $link->ID)]) ?>
            </td>
        </tr>
     <?php endforeach; ?>

    </tbody>
    </table>
<!--
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
-->
</div>
