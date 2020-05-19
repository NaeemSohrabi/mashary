<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{


    /**
     * Database host
     * @var string
     */
//    const DB_HOST = 'localhost';
//    const DB_NAME = 'masharyc_db';
//    const DB_USER = 'root';
//    const DB_PASSWORD = '';
//    const SHOW_ERRORS = true;
//    const URL_BASE = 'http://mashary.dep/';

    const DB_HOST = 'localhost';
    const DB_NAME = 'masharyc_DB';
    const DB_USER = 'root';
    const DB_PASSWORD = 'root';
    const SHOW_ERRORS = true;
    const URL_BASE = 'http://mashary.dep/';


    const DEPARTMENTS = [
        'support' => 'a.behdashti@novinniroo.co'
//        'naeem' => 'naiem.sohrabi@gmail.com'
    ];

    const LANGUAGE = ['en', 'fa'];


}
