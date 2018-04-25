<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contacts view large-10 medium-9 columns">
    <h2><?= h($contact->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($contact->name) ?></p>
            <h6 class="subheader"><?= __('Surname') ?></h6>
            <p><?= h($contact->surname) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($contact->ID) ?></p>
        </div>
    </div>
</div>
