<div class="comment-heading">
<h2>Kommentarer</h2>
<span class='create-comment'><a href='<?=$this->url->create('comments/view-add/' . $pageKey)?>'>+Ny kommentar</a></span>
</div>

<?php if (is_array($comments)) : ?>
<div class='comments'>
<?php foreach ($comments as $id => $comment) : ?>
<div class='comment-wrapper'>
<div class='left-aside'>
    <img src='<?= $comment['gravatar']?>?s=40' alt='Gravatar'>
</div>
<div class='main-comment'>
<div class='heading'>
<span class='author'><?= $comment['name'] ?></span>
<span class='time'> &#0149; <?= date("Y-m-d H:i:s", $comment['timestamp']) ?></span>
<span class='web'>Webb: <a target="_blank" href='<?=$this->url->create($comment['web'])?>'><?= $comment['web'] ?></a></span>
<span class='mail'>E-post: <a target="_top" href='mailto:<?= $comment['mail'] ?>'><?= $comment['mail'] ?></a></span>
</div>
<div class='content'>
<p><?= $comment['content'] ?></p>
</div>
<div class='admin-field'>
    <span class='admin'><a href='<?=$this->url->create('comments/view-edit/' . $pageKey . '/' . $id)?>'>Redigera</a></span>
    <span class='admin'><a href='<?=$this->url->create('comments/view-delete/' . $pageKey . '/' . $id)?>'>Radera</a></span>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>
