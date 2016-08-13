<h1><?= $title ?></h1>
<h2><?= $subtitle ?></h2>

<table id="users">
    <tr>
        <th>Id</th>
        <th>Akronym</th>
        <th>Namn</th>
        <th>Status</th>
        <th>Redigera</th>
    </tr>
    <?php if (isset($users) && !empty($users)) : ?>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td>
                <a href='<?=$this->url->create('users/id/' . $user->id)?>'><?= $user->id ?></a>
            </td>
            <td><?= $user->acronym ?></td>
            <td><?= $user->name ?></td>
            <?php if (isset($user->deleted)) : ?>
                <td><i class="fa fa-user fa-fw" style="color:black"></i></td>
            <?php else :?>
                <?php if (isset($user->active)) : ?>
                    <td><i class="fa fa-user fa-fw" style="color:green"></i></td>
                <?php else :?>
                    <td><i class="fa fa-user fa-fw" style="color:grey"></i></td>
                <?php endif; ?>
            <?php endif; ?>
            <td>
                <a href='<?=$this->url->create('users/update/' . $user->id)?>'><i class="fa fa-pencil-square-o" style="color:green" aria-hidden="true"></i></a>
                <?php if (isset($user->deleted)) : ?>
                    <a href='<?=$this->url->create('users/delete/' . $user->id)?>'><i class="fa fa-trash-o" style="color:red" aria-hidden="true"></i></a>
                <?php else :?>
                    <a href='<?=$this->url->create('users/softDelete/' . $user->id)?>'><i class="fa fa-trash-o" style="color:red" aria-hidden="true"></i></a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else :?>
        <td colspan="5">Hittar inga användare</td>
    <?php endif; ?>
</table>
