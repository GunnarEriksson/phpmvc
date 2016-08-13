<h1>Kalender</h1>

<div class='calendar-wrapper'>
    <div class='calendar-header'>
        <img src='img/calendar/<?= $monthImgName ?>' alt='Bild för månaden <?= $month ?>'/>
        <a href='<?=$this->url->create("calendar?month={$previousMonth}")?>'>&lt;&lt;</a>
        <h2 class='calendar-date'><?= $month ?> <?= $year ?></h2>
        <a class='text-align-right' href='<?=$this->url->create("calendar?month={$nextMonth}")?>'>>></a>
    </div>
    <table class='calendar'>
        <?= $tableHeader ?>
        <?= $tableBody ?>
    </table>
</div>
