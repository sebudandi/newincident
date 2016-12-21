<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profession'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profession form large-9 medium-8 columns content">
    <?= $this->Form->create($profession) ?>
    <fieldset>
        <legend><?= __('Add Profession') ?></legend>
        <?php
            echo $this->Form->input('profName');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
