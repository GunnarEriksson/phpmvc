<?php
/**
 * This is a Anax-MVC front controller for the me page.
 *
 * Contains a short presentation of the author of this page.
 */
require __DIR__ . '/config_with_app.php';

$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);

$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');
$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');

$app->router->add('', function () use ($app) {
    $app->theme->setTitle("Om Mig Själv");

    $content = $app->fileContent->get('me.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
});

$app->router->add('dice', function () use ($app) {
    $app->theme->addStylesheet('css/dice_me.css');
    $app->theme->setTitle("Tärningsspel");

    $newGame = $app->request->getGet('newGame');
    if (isset($newGame)) {
        $app->session->set('diceLogic', null);
    }

    if ($app->session->has('diceLogic')) {
        $diceLogic = $app->session->get('diceLogic');
    } else {
        $diceLogic = new \Anax\Dice\DiceLogic();
        $app->session->set('diceLogic', $diceLogic);
    }

    $rollDice = $app->request->getGet('rollDice');
    if (isset($rollDice)) {
        $diceLogic->roll();
    }

    $shouldSaveScore = $app->request->getGet('savePoints');
    if (isset($shouldSaveScore)) {
        $diceLogic->saveScore();
    }

    $app->views->add('dice/dice', [
        'dice'              => $diceLogic->getDice(),
        'accumulatedScore'  => $diceLogic->getAccumulatedScore(),
        'savedScore'        => $diceLogic->getSavedScore(),
        'message'           => $diceLogic->getMessage(),
    ]);
});

$app->router->add('calendar', function () use ($app) {
    $app->theme->addStylesheet('css/calendar.css');
    $app->theme->setTitle("Kalender");

    $calendar = new \Anax\Calendar\CalendarLogic();

    $month = $app->request->getGet('month');
    if (isset($month)) {
        $calendar->updateCalendar($month);
    }

    $app->views->add('calendar/calendar', [
        'monthImgName'  => $calendar->getMonthImgName(),
        'month'         => $calendar->getMonth(),
        'previousMonth' => $calendar->getPreviousMonth(),
        'nextMonth'     => $calendar->getNextMonth(),
        'year'          => $calendar->getYear(),
        'tableHeader'   => $calendar->getTableHeader(),
        'tableBody'     => $calendar->getTableBody(),
    ]);
});

$app->router->add('report', function () use ($app) {
    $app->theme->setTitle("Redovisning");

    $content = $app->fileContent->get('report.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
});

$app->router->add('source', function () use ($app) {
    $app->theme->addStylesheet('css/source.css');
    $app->theme->setTitle("Källkod");

    $source = new \Mos\Source\CSource([
        'secure_dir' => '../..',
        'base_dir' => '../..',
        'add_ignore' => ['.htaccess'],
    ]);

    $app->views->add('me/source', [
       'content' => $source->View(),
    ]);
});

$app->router->handle();
$app->theme->render();
