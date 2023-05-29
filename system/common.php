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

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Nette\Utils\FileSystem;

// Debugging Nachrichten aktivieren
if(IS_DEBUG) { //Sehe config\system.php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

/**
 * Enthält alle Kern-Systemfunktionen von Metis
 * Class Common
 */
class Common {
    /**
     * @return string
     */
    private const METIS_VERSION = '0.0.1';

    /**
     * @var Common|null
     */
    private static ?Common $instance = null; //Kann "null" oder eine Instanz von Common sein

    /**
     * @var Smarty
     */
    private Smarty $smarty; //Smarty Instanz

    /**
     * @var Logger
     */
    private Logger $log; //Logger Instanz

    /**
     * Common constructor.
     */
    public function __construct() {
        //Initialisiere den Logger
        $this->log = new Logger('common');

        //Füge dem Logger einen StreamHandler hinzu (Schreibt in die Datei common.log)
        $this->log->pushHandler(new StreamHandler(_ROOT_.'/system/logs/common.log', Level::Debug));

        // Prüfe ob die benötigten Verzeichnisse existieren und erstelle sie ggf.
        $dirs = ['cache/template/default', 'template_c/default']; //Ordner die erstellt werden sollen (recursive)
        foreach ($dirs as $dir) {
            //Prüfe ob der Ordner bereits existiert und ob er erstellt werden konnte
            if(!is_dir(_ROOT_ . '/' . $dir) && !FileSystem::createDir(_ROOT_ . '/' . $dir)) {
                //Schreibe eine Warnung in die Logdatei wenn der Ordner nicht erstellt werden konnte
                $this->log->warning('Der Ordner "'.$dir.'" konnte nicht erstellt werden!');
            }
        }

        //Initialisiere das Smarty Template System
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir(_ROOT_.'/template/default'); //Setze den Template Ordner
        $this->smarty->setConfigDir(_ROOT_.'/config/template/default'); //Setze den Konfigurations Ordner
        $this->smarty->setCompileDir(_ROOT_.'/template_c/default'); //Setze den Kompilierungs Ordner
        $this->smarty->setCacheDir(_ROOT_.'/cache/template/default'); //Setze den Cache Ordner
        $this->smarty->setForceCompile(SMARTY_DEBUG); //Erzwinge das Kompilieren der Templates (nur wenn Debugging aktiviert ist)
        $this->smarty->setDebugging(SMARTY_DEBUG); //Aktiviere das Debugging (sehe config\system.php)
    }

    /**
     * Gibt eine Instanz von Smarty zurück
     * @return Smarty
     */
    public function getSmarty(): Smarty {
        //Erstelle eine Kopie von Smarty und gib diese zurück
        return clone $this->smarty;
    }

    /**
     * Liefert eine Instanz von Logger zurück
     * @return Logger
     */
    public function getLog(): Logger {
        return $this->log;
    }

    /**
     * Gibt die PHP Version zurück
     * @return string
     */
    public function getPHPVersion(): string {
        return PHP_VERSION;
    }

    /**
     * Gibt das Betriebssystem zurück
     * @return string
     */
    public function getOS(): string {
        return PHP_OS;
    }

    /**
     * Gibt die Metis Version zurück
     * @return string
     */
    public function getMetisVersion(): string {
        return self::METIS_VERSION;
    }

    /**
     * Gibt die Instanz von Common zurück
     * @return Common
     */
    public static function getInstance(): Common {
        // Singleton
        if (self::$instance instanceof self) { //Ist die Instanz schon vorhanden?
            return self::$instance; //Gib eine Instanz zurück
        }

        self::$instance = new Common(); //Erstelle eine neue Instanz
        return self::$instance;
    }
}