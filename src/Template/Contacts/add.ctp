<div class="contacts form large-10 medium-9 columns">
    <?= $this->Form->create($contact); ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('surname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
