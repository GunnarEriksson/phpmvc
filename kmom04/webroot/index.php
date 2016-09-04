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
    ], 'main-wide');
});

$app->router->add('dice', function () use ($app) {
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

    $month = $app->request->getGet('month');
    if (!isset($month)) {
        // Calendar via menu bar.
        $app->session->set('calendar', null);
        $calendar = new \Anax\Calendar\CalendarLogic();
        $app->session->set('calendar', $calendar);
    } else {
        // Calendar via buttons to get previous or next month.
        $calendar = $app->session->get('calendar');
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

$app->router->add('comments1', function () use ($app) {
    $app->theme->setTitle("Anax-MVC kommentarsida 1");
    $app->views->add('comment/index', [
        'pageTitle' => $app->theme->getVariable("title")
    ], 'main-wide');

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params'     => ['comments1'],
    ]);
});

$app->router->add('comments2', function () use ($app) {
    $app->theme->setTitle("Anax-MVC kommentarsida 2");
    $app->views->add('comment/index', [
        'pageTitle' => $app->theme->getVariable("title")
    ], 'main-wide');

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params'     => ['comments2'],
    ]);
});

$app->router->add('regions', function () use ($app) {

    $app->theme->addStylesheet('css/anax-grid/regions_demo.css');
    $app->theme->setTitle("Regioner");

    $app->views->addString('flash', 'flash')
               ->addString('featured-1', 'featured-1')
               ->addString('featured-2', 'featured-2')
               ->addString('featured-3', 'featured-3')
               ->addString('main', 'main')
               ->addString('sidebar', 'sidebar')
               ->addString('triptych-1', 'triptych-1')
               ->addString('triptych-2', 'triptych-2')
               ->addString('triptych-3', 'triptych-3')
               ->addString('footer-col-1', 'footer-col-1')
               ->addString('footer-col-2', 'footer-col-2')
               ->addString('footer-col-3', 'footer-col-3')
               ->addString('footer-col-4', 'footer-col-4');

});

$app->router->add('typography', function () use ($app) {
    $app->theme->addStylesheet('css/anax-grid/grid_background.css');
    $app->theme->setTitle("Typografi");

    $content = $app->fileContent->get('typography.php');

    $app->views->add('me/page', ['content' => $content], 'main')
                ->add('me/page', ['content' => $content], 'sidebar');

});

$app->router->add('fontawesome', function () use ($app) {
    $app->theme->setTitle("Font Awesome");

    $content = $app->fileContent->get('fontawesome.php');
    $app->views->add('me/page', ['content' => $content], 'main');

    $content = $app->fileContent->get('fontawesome2.php');
    $app->views->add('me/page', ['content' => $content], 'sidebar');

});

$app->router->add('users', function () use ($app) {
    $app->dispatcher->forward([
        'controller' => 'users',
        'action'     => 'list',
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
    ], 'main-wide');
});

$app->router->add('source', function () use ($app) {
    $app->theme->setTitle("Källkod");

    $source = new \Mos\Source\CSource([
        'secure_dir' => '../..',
        'base_dir' => '../..',
        'add_ignore' => ['.htaccess'],
    ]);

    $app->views->add('me/source', [
       'content' => $source->View(),
    ], 'main-wide');
});

$app->router->handle();
$app->theme->render();
