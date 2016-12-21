<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profession'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profession index large-9 medium-8 columns content">
    <h3><?= __('Profession') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idprofession') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profName') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profession as $profession): ?>
            <tr>
                <td><?= $this->Number->format($profession->idprofession) ?></td>
                <td><?= h($profession->profName) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profession->idprofession]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profession->idprofession]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profession->idprofession], ['confirm' => __('Are you sure you want to delete # {0}?', $profession->idprofession)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
