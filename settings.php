<?php
/**
 * Part of the Platform Settings extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the WTFPL license.
 *
 * @package    Platform Settings extension
 * @version    3.0.0
 * @author     Sanatorium
 * @license    WTFPL
 * @copyright  2016, Sanatorium
 * @link       http://sanatorium.ninja
 */

return [

    // Section title
    'title' => 'Obecná nastavení',

    // Group
    'admin' => [

        // Group title
        'title' => 'Admin',

        // Fields
        'field' => [
            'help' => 'Nápověda',
        ],

    ],

    // Group
    'application' => [

        // Group title
        'title' => 'Nastavení aplikace',

        // Fields
        'field' => [
            'title'     => 'Název',
            'tagline'   => 'Podtitulek',
            'copyright' => 'Copyright',
        ],

    ],

    // Group
    'email' => [

        // Group title
        'title' => 'Nastavení e-mailu',

        // Fields
        'field' => [
            'driver'        => 'Mail Driver',
            'host'          => 'Host adresa',
            'port'          => 'Host port',
            'encryption'    => 'Šifrovací protokol',
            'from_address'  => 'Odesílatel (adresa)',
            'from_name'     => 'Odesílatel (jméno)',
            'username'      => 'Uživatelské jméno',
            'password'      => 'Heslo',
            'sendmail_path' => 'Sendmail System Path',
            'pretend'       => 'Režim "Pretend"',
        ],

    ],

];
