<div class="comment-heading">
<h3>Kommentarer</h3>
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
<span class='web'><a href='<?=$this->url->create($comment['web'])?>'><i class="fa fa-external-link" aria-hidden="true"></i></a></span>
<span class='mail'><a target="_top" href='mailto:<?= $comment['mail'] ?>'><i class="fa fa-envelope-o" aria-hidden="true"></i></a></span>
</div>
<div class='content'>
<p><?= $comment['content'] ?></p>
</div>
<div class='admin-field'>
    <span class='delete-comment'><a href='<?=$this->url->create('comments/view-delete/' . $pageKey . '/' . $id)?>'><i class="fa fa-trash-o" style="color:red" aria-hidden="true"></i></a></span>
    <span class='edit-comment'><a href='<?=$this->url->create('comments/view-edit/' . $pageKey . '/' . $id)?>'><i class="fa fa-pencil-square-o" style="color:green" aria-hidden="true"></i></a></span>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>
