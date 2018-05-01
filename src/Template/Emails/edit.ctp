<div class="emails form large-10 medium-9 columns">

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $email->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $email->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?></li>
    </ul>
</div>

<?= $this->Form->create($email); ?>
    <fieldset>
        <legend><?= __('Edit Email') ?></legend>
                <?php foreach ($contacts as $contact): ?>
                    <?php if ($contact->contact->ID == $email->contact_id): ?>
                        <h6 class="subheader"><?= __('Name') ?></h6>   <p><?= h($contact->contact->name) ?></p>
                        <h6 class="subheader"><?= __('Surname') ?></h6>  <p><?= h($contact->contact->surname);break ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
        <?php
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
