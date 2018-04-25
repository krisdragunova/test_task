<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Link'), ['action' => 'edit', $link->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Link'), ['action' => 'delete', $link->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $link->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Links'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="links view large-10 medium-9 columns">
    <h2><?= h($link->ID) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($link->ID) ?></p>
            <h6 class="subheader"><?= __('Id Category') ?></h6>
            <p><?= $this->Number->format($link->id_category) ?></p>
            <h6 class="subheader"><?= __('Id Contact') ?></h6>
            <p><?= $this->Number->format($link->id_contact) ?></p>
        </div>
    </div>
</div>
