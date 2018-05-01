<div class="contacts form large-10 medium-9 columns">
<div class="actions columns large-2 medium-3">
     <h3><?= __('Actions') ?></h3>
     <ul class="side-nav">
         <li><?= $this->Form->postLink(
                 __('Delete'),
                 ['action' => 'delete', $contact->ID],
                 ['confirm' => __('Are you sure you want to delete # {0}?', $contact->ID)]
             )
         ?></li>
     </ul>
 </div>
   <?= $this->Form->create($contact); ?>
    <fieldset>
        <legend><?= __('Edit Contact') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('surname');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
