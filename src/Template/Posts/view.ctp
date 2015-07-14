<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modeuses'), ['controller' => 'Modeuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modeus'), ['controller' => 'Modeuses', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="posts view large-10 medium-9 columns">
    <h2><?= h($post->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Modeus') ?></h6>
            <p><?= $post->has('modeus') ? $this->Html->link($post->modeus->id, ['controller' => 'Modeuses', 'action' => 'view', $post->modeus->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Social') ?></h6>
            <p><?= h($post->social) ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($post->title) ?></p>
            <h6 class="subheader"><?= __('Content') ?></h6>
            <p><?= h($post->content) ?></p>
            <h6 class="subheader"><?= __('Picture') ?></h6>
            <p><?= h($post->picture) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($post->id) ?></p>
            <h6 class="subheader"><?= __('Likes') ?></h6>
            <p><?= $this->Number->format($post->likes) ?></p>
            <h6 class="subheader"><?= __('Number') ?></h6>
            <p><?= $this->Number->format($post->number) ?></p>
            <h6 class="subheader"><?= __('Shares') ?></h6>
            <p><?= $this->Number->format($post->shares) ?></p>
            <h6 class="subheader"><?= __('Comments') ?></h6>
            <p><?= $this->Number->format($post->comments) ?></p>
            <h6 class="subheader"><?= __('Nb Tweets') ?></h6>
            <p><?= $this->Number->format($post->nb_tweets) ?></p>
        </div>
    </div>
</div>
