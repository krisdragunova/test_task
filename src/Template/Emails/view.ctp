
<div class="emails view large-10 medium-9 columns">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $email->ID)]) ?> </li>
    </ul>
</div>
 <h2><?= h($email->ID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($email->email); ?></p>

            <h6 class="subheader"><?= __('Name and Surname') ?></h6>

             <?php foreach ($contacts as $contact): ?>
                <?php if ($contact->contact->ID == $email->contact_id): ?>
                    <p><?= h($contact->contact->name) ?></p>
                    <p><?= h($contact->contact->surname); break?></p>
                <?php endif; ?>
             <?php endforeach; ?>
        </div>

        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($email->ID) ?></p>
            <h6 class="subheader"><?= __('Id Contact') ?></h6>
            <p><?= $this->Number->format($email->contact_id) ?></p>
        </div>
    </div>
</div>
