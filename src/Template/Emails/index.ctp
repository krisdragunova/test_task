<!--
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Email'), ['action' => 'add']) ?></li>
    </ul>
</div>
-->

<div class="emails index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
<!--
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('id_contact') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
-->
        <tr>
            <th><?= h('Email') ?></th>
            <th><?= h('Name') ?></th>
            <th><?= h('Surname') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($emails as $email): ?>
            <tr>
                <td><?= h($email->email) ?></td>
                <td><?= h($email->contact->name) ?></td>
                <td><?= h($email->contact->surname) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $email->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $email->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $email->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $email->ID)]) ?>
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
