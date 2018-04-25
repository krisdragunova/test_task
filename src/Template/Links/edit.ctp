<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $link->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $link->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Links'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="links form large-10 medium-9 columns">
    <?= $this->Form->create($link); ?>
    <fieldset>
        <legend><?= __('Edit Link') ?></legend>
        <?php
            echo $this->Form->input('id_category');
            echo $this->Form->input('id_contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
