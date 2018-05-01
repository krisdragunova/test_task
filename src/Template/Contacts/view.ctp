<div class="contacts view large-10 medium-9 columns">
 <div class="actions columns large-2 medium-3">
     <h3><?= __('Actions') ?></h3>
     <ul class="side-nav">
         <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->ID]) ?> </li>
         <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->ID)]) ?> </li>
     </ul>
 </div>
 <h2><?= h($contact->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($contact->name) ?></p>
            <h6 class="subheader"><?= __('Surname') ?></h6>
            <p><?= h($contact->surname) ?></p>

            <h6 class="subheader"><?= __('Telephone') ?></h6>

             <?php foreach ($telephones as $telephone): ?>
                <?php if ($contact->ID == $telephone->telephone->contact_id): ?>
                    <p><?= h($telephone->telephone->telephone) ?></p>
                <?php endif; ?>
             <?php endforeach; ?>

             <h6 class="subheader"><?= __('Email') ?></h6>

             <?php foreach ($emails as $email): ?>
                <?php if ($contact->ID == $email->email->contact_id): ?>
                    <p><?= h($email->email->email) ?></p>
                <?php endif; ?>
             <?php endforeach; ?>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('ID') ?></h6>
            <p><?= $this->Number->format($contact->ID) ?></p>
        </div>
    </div>
</div>

