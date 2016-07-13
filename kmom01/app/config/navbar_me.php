<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',

    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Hem',
            'url'   => $this->di->get('url')->create(''),
            'title' => 'Första sida i PHP MVC'
        ],

        // This is a menu item
        'dice'  => [
            'text'  => 'Tärningsspel',
            'url'   => $this->di->get('url')->create('dice'),
            'title' => 'Tärningsspelet 100'
        ],

        // This is a menu item
        'calendar'  => [
            'text'  => 'Kalender',
            'url'   => $this->di->get('url')->create('calendar'),
            'title' => 'En årskalender'
        ],

        // This is a menu item
        'report'  => [
            'text'  => 'Redovisning',
            'url'   => $this->di->get('url')->create('report'),
            'title' => 'Redovisning för kursmoment i kursen PHPMVC'
        ],

        // This is a menu item
        'source' => [
            'text'  =>'Källkod',
            'url'   => $this->di->get('url')->create('source'),
            'title' => 'Visar källkoden för Anax-MVC',
            'mark-if-parent-of' => 'controller',
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    'callback' => function ($url) {
        if ($url == $this->di->get('request')->getCurrentUrl(false)) {
            return true;
        }
    },



    /**
     * Callback to check if current page is a decendant of the menuitem, this check applies for those
     * menuitems that has the setting 'mark-if-parent' set to true.
     *
     */
    'is_parent' => function ($parent) {
        $route = $this->di->get('request')->getRoute();
        return !substr_compare($parent, $route, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
   /*
    'create_url' => function ($url) {
        return $this->di->get('url')->create($url);
    },
    */
];
