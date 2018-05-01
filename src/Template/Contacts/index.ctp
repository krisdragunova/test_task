<script language=javascript>
    var selected_row = null;

    function select_row(row){

        if(selected_row != null) selected_row.className = '';
        selected_row = row;
        if(selected_row != null) selected_row.className = 'selected';

    }
</script>

<!--
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
    </ul>
</div>
-->
<div class="contacts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
<!--
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('surname') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
-->
        <tr>
            <th><?= h('Name') ?></th>
            <th><?= h('Surname') ?></th>
            <th><?= h('Telephone') ?></th>
            <th><?= h('Email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>

    </thead>
    <tbody>

    <?php foreach ($contacts as $contact): ?>
        <?php if (($contact->telephone->main == true)&&($contact->email->main == true)): ?>
            <tr onclick='select_row(this)'>
                <td> <?= h($contact->name) ?></td>
                <td><?= h($contact->surname) ?></td>
                <td><?= h($contact->telephone->telephone) ?></td>
                <td><?= h($contact->email->email) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->ID)]) ?>
                </td>
            </tr>
        <?php endif; ?>
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
