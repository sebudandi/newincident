<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->iduser]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->iduser], ['confirm' => __('Are you sure you want to delete # {0}?', $user->iduser)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Login Attempts'), ['controller' => 'LoginAttempts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login Attempt'), ['controller' => 'LoginAttempts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->iduser) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iduser') ?></th>
            <td><?= $this->Number->format($user->iduser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($user->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Time') ?></th>
            <td><?= h($user->create_time) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Login Attempts') ?></h4>
        <?php if (!empty($user->login_attempts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->login_attempts as $loginAttempts): ?>
            <tr>
                <td><?= h($loginAttempts->user_id) ?></td>
                <td><?= h($loginAttempts->time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LoginAttempts', 'action' => 'view', $loginAttempts->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LoginAttempts', 'action' => 'edit', $loginAttempts->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LoginAttempts', 'action' => 'delete', $loginAttempts->], ['confirm' => __('Are you sure you want to delete # {0}?', $loginAttempts->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
