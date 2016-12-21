<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Status'), ['action' => 'edit', $status->idstatus]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Status'), ['action' => 'delete', $status->idstatus], ['confirm' => __('Are you sure you want to delete # {0}?', $status->idstatus)]) ?> </li>
        <li><?= $this->Html->link(__('List Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="status view large-9 medium-8 columns content">
    <h3><?= h($status->idstatus) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('StatusName') ?></th>
            <td><?= h($status->statusName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idstatus') ?></th>
            <td><?= $this->Number->format($status->idstatus) ?></td>
        </tr>
    </table>
</div>
