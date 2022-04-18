<?php
/**
 *
 * @package      CaseApi1
 * @since        1.0.0
 * @link         https://github.com/ugurakcil/caseapi1
 * @author       Uğur AKÇIL <ugurakcil@gmail.com>
 * @copyright    Copyright (c) 2022, Uğur AKÇIL
 * @license      https://github.com/ugurakcil/caseapi1/blob/master/LICENSE MIT License
 *
 */

declare(strict_types=1);

/*
* Configurations
* All requests are allowed in development mode
* Don't forget to set the development mode to false when going live
* */
$developmentMode = true;

/*
* Header information, debugging, dependencies
* */
if($developmentMode) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    header('Access-Control-Allow-Origin: *');
}

header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Origin: *');

require __DIR__ . '/vendor/autoload.php';

require 'router.php';

\App\Lib\App::run();
