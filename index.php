<?php
/**
 * MIT License
 * Copyright (c) 2023 ILS - PHP - Datenbankentwickler

 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

// minimum php version
if (PHP_VERSION_ID < 80100) {
    die('<b>PHP 8.1+ ist erforderlich!</b>');
}

define("_ROOT_", __DIR__);

/**
 * Lade die Composer Autoload Funktion
 */
require_once('vendor/autoload.php');

/**
 * Lade die Konfiguration von Metis
 */
require_once('config/system.php'); //Lade die Konfiguration

/**
 * Lade die Kern-Systemfunktionen von Metis
 */
require_once('system/common.php'); //Lade die Systemfunktionen

/**
 * Hole eine Instanz von Common zum starten des PHP-Skriptes
 */
$common = Common::getInstance();


//TEST AUSGABE

$smarty = $common->getSmarty();
$smarty->assign('title', 'Hallo Welt');
$smarty->assign('content', 'Hallo Welt ich bin es Metis in Version: '.
    $common->getMetisVersion().'!<br>Ich laufe auf PHP: '.
    $common->getPHPVersion().' und '.$common->getOS());
$smarty->display('index.tpl');