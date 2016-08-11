<div id="user-admin">
    <h1><?= $title ?></h1>
    <h2><?= $subtitle ?></h2>

    <a href="<?=$this->di->get('url')->create('users')?>"><i class="fa fa-users fa-fw"></i> Visa alla användare</a>
    <br><a href="<?=$this->di->get('url')->create('users/active')?>"><i class="fa fa-user fa-fw"></i> Visa aktiva användare</a>
    <br><span id="user-inactive"><a href="<?=$this->di->get('url')->create('users/inactive')?>"><i class="fa fa-user fa-fw user-inactive"></i> Visa inaktiva användare</a></span>
    <br><a href="<?=$this->di->get('url')->create('users/add')?>"><i class="fa fa-user-plus fa-fw"></i> Lägg till användare</a>
    <br><span id="user-discarded"><a href="<?=$this->di->get('url')->create('users/discarded')?>"><i class="fa fa-user-times fa-fw"></i> Visa användare i papperskorgen</a></span>
    <span id="reset-database"><br><a href="<?=$this->di->get('url')->create('users/resetDb')?>"><i class="fa fa-database fa-fw"></i> Återställ databasen</a></span>
</div>
