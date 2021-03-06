<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quoteType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quoteType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Quote Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="quoteTypes form large-10 medium-9 columns">
    <?= $this->Form->create($quoteType) ?>
    <fieldset>
        <legend><?= __('Edit Quote Type') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
