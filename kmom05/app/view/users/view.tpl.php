<h1><?= $title ?></h1>
<h2><?= $subtitle ?></h2>

<ul>
    <li>Id: <?= $user->id ?></li>
    <li>Akronym: <?= $user->acronym ?></li>
    <li>Name: <?= $user->name ?></li>
    <li>E-post: <?= $user->email ?></li>
    <li>Aktiv: <?= $user->active ?></li>
    <li>Skapad: <?= $user->created ?></li>
    <li>Uppdaterad: <?= $user->updated ?></li>
    <li>Borttagen: <?= $user->deleted ?></li>
</ul>

<ul class="button">
    <li><a href='<?=$this->url->create($_SERVER['HTTP_REFERER'])?>'>Tillbaka</a></li>
</ul>
