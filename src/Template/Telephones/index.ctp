<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Telephone'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="telephones index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('ID') ?></th>
            <th><?= $this->Paginator->sort('telephone') ?></th>
            <th><?= $this->Paginator->sort('id_contact') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($telephones as $telephone): ?>
        <tr>
            <td><?= $this->Number->format($telephone->ID) ?></td>
            <td><?= h($telephone->telephone) ?></td>
            <td><?= $this->Number->format($telephone->id_contact) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $telephone->ID]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telephone->ID]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telephone->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $telephone->ID)]) ?>
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
