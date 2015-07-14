<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modeuses'), ['controller' => 'Modeuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modeus'), ['controller' => 'Modeuses', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="posts form large-10 medium-9 columns">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Edit Post') ?></legend>
        <?php
            echo $this->Form->input('modeuse_id', ['options' => $modeuses]);
            echo $this->Form->input('social');
            echo $this->Form->input('title');
            echo $this->Form->input('content');
            echo $this->Form->input('picture');
            echo $this->Form->input('likes');
            echo $this->Form->input('number');
            echo $this->Form->input('shares');
            echo $this->Form->input('comments');
            echo $this->Form->input('nb_tweets');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
