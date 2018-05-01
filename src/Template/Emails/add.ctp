<div class="emails form large-10 medium-9 columns">
    <?= $this->Form->create($email); ?>
    <fieldset>
        <legend><?= __('Add Email') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('id_contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
