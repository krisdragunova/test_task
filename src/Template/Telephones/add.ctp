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
