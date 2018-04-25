<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Telephones'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="telephones form large-10 medium-9 columns">
    <?= $this->Form->create($telephone); ?>
    <fieldset>
        <legend><?= __('Add Telephone') ?></legend>
        <?php
            echo $this->Form->input('telephone');
            echo $this->Form->input('id_contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
