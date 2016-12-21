<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->idcategory]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->idcategory], ['confirm' => __('Are you sure you want to delete # {0}?', $category->idcategory)]) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="category view large-9 medium-8 columns content">
    <h3><?= h($category->idcategory) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CategoryName') ?></th>
            <td><?= h($category->categoryName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idcategory') ?></th>
            <td><?= $this->Number->format($category->idcategory) ?></td>
        </tr>
    </table>
</div>
