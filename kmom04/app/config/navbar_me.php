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
        'comments'  => [
            'text'  => 'Kommentarer',
            'url'   => '',
            'title' => '',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'comments1'  => [
                        'text'  => 'Kommentar1',
                        'url'   => $this->di->get('url')->create('comments1'),
                        'title' => 'Anax-MVC kommentarsida 1'
                    ],

                    // This is a menu item of the submenu
                    'comments2'  => [
                        'text'  => 'Kommentar2',
                        'url'   => $this->di->get('url')->create('comments2'),
                        'title' => 'Anax-MVC kommentarsida 2',
                    ],
                ],
            ],
        ],

        // This is a menu item
        'theme'  => [
            'text'  => 'Tema',
            'url'   => '',
            'title' => '',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item
                    'regions'  => [
                        'text'  => 'Regioner',
                        'url'   => $this->di->get('url')->create('regions'),
                        'title' => 'Regioner'
                    ],

                    // This is a menu item
                    'typography'  => [
                        'text'  => 'Typografi',
                        'url'   => $this->di->get('url')->create('typography'),
                        'title' => 'Typografi'
                    ],

                    // This is a menu item
                    'fontawesome'  => [
                        'text'  => 'Font Awesome',
                        'url'   => $this->di->get('url')->create('fontawesome'),
                        'title' => 'Font Awesome'
                    ],
                ],
            ],
        ],

        // This is a menu item
        'users'  => [
            'text'  => 'Användare',
            'url'   => $this->di->get('url')->create('users'),
            'title' => 'Användare'
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
