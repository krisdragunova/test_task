
<div class="links view large-10 medium-9 columns">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Link'), ['action' => 'edit', $link->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Link'), ['action' => 'delete', $link->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $link->ID)]) ?> </li>
    </ul>
</div>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Category') ?></h6>

                         <?php foreach ($categories as $category): ?>
                            <?php if ($category->category->ID == $link->category_id): ?>
                                <p><?= h($category->category->category); break?></p>
                            <?php endif; ?>
                         <?php endforeach; ?>

            <h6 class="subheader"><?= __('Name and Surname') ?></h6>

             <?php foreach ($contacts as $contact): ?>
                <?php if ($contact->contact->ID == $link->contact_id): ?>
                    <p><?= h($contact->contact->name) ?></p>
                    <p><?= h($contact->contact->surname); break ?></p>
                <?php endif; ?>
             <?php endforeach; ?>

        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Category') ?></h6>
            <p><?= $this->Number->format($link->category_id) ?></p>
            <h6 class="subheader"><?= __('Id Contact') ?></h6>
            <p><?= $this->Number->format($link->contact_id) ?></p>
        </div>
    </div>
</div>


