<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Meeting'), ['action' => 'edit', $meeting->meeting]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Meeting'), ['action' => 'delete', $meeting->meeting], ['confirm' => __('Are you sure you want to delete # {0}?', $meeting->meeting)]) ?> </li>
        <li><?= $this->Html->link(__('List Meeting'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="meeting view large-9 medium-8 columns content">
    <h3><?= h($meeting->meeting) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Meeting') ?></th>
            <td><?= $this->Number->format($meeting->meeting) ?></td>
        </tr>
    </table>
</div>
