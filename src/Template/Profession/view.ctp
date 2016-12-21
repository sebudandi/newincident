<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profession'), ['action' => 'edit', $profession->idprofession]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profession'), ['action' => 'delete', $profession->idprofession], ['confirm' => __('Are you sure you want to delete # {0}?', $profession->idprofession)]) ?> </li>
        <li><?= $this->Html->link(__('List Profession'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profession'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profession view large-9 medium-8 columns content">
    <h3><?= h($profession->idprofession) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ProfName') ?></th>
            <td><?= h($profession->profName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idprofession') ?></th>
            <td><?= $this->Number->format($profession->idprofession) ?></td>
        </tr>
    </table>
</div>
