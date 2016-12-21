<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $meeting->meeting],
                ['confirm' => __('Are you sure you want to delete # {0}?', $meeting->meeting)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Meeting'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="meeting form large-9 medium-8 columns content">
    <?= $this->Form->create($meeting) ?>
    <fieldset>
        <legend><?= __('Edit Meeting') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
