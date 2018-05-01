<div class="links form large-10 medium-9 columns">

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $link->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $link->ID)]
            )
        ?></li>
    </ul>
</div>

<?= $this->Form->create($link); ?>
    <fieldset>
        <legend><?= __('Edit Link') ?></legend>

        <div class="large-5 columns strings">
                    <h6 class="subheader"><?= __('Category') ?></h6>

                                 <?php foreach ($categories as $category): ?>
                                    <?php if ($category->category->ID == $link->category_id): ?>
                                     <p><?= h($category->category->ID)?> <?= h($category->category->category); break?></p>
                                    <?php endif; ?>
                                 <?php endforeach; ?>

                    <h6 class="subheader"><?= __('Name and Surname') ?></h6>

                     <?php foreach ($contacts as $contact): ?>
                        <?php if ($contact->contact->ID == $link->contact_id): ?>
                            <p><?= h($contact->contact->ID) ?> <?= h($contact->contact->name) ?> <?= h($contact->contact->surname); break ?></p>
                        <?php endif; ?>
                     <?php endforeach; ?>

        <?php
            echo $this->Form->input('id_category');
            echo $this->Form->input('id_contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
