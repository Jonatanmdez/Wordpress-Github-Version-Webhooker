<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $repository->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $repository->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Repositories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="repositories form large-9 medium-8 columns content">
    <?= $this->Form->create($repository) ?>
    <fieldset>
        <legend><?= __('Edit Repository') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('version');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
