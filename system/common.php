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
    private const METIS_VERSION = '0.0.1';

    private static ?Common $instance = null; //Kann "null" oder eine Instanz von Common sein

    public function __construct()
    {
        // Konstruktor

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
    public static function getInstance(): Common
    {
        // Singleton
        if (self::$instance instanceof self) { //Ist die Instanz schon vorhanden?
            return self::$instance; //Gib eine Instanz zurück
        }

        self::$instance = new Common(); //Erstelle eine neue Instanz
        return self::$instance;
    }
}