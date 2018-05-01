<div class="links form large-10 medium-9 columns">
    <?= $this->Form->create($link); ?>
    <fieldset>
        <legend><?= __('Add Link') ?></legend>
        <?php
            echo $this->Form->input('id_category');
            echo $this->Form->input('id_contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
