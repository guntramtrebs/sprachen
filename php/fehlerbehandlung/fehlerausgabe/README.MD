# Fehlerausgabe in PHP

## Konfiguration
- die Konfiguration findet normalerweise in den ini-Dateien von PHP statt
- die INI-Konfiguration kann in einer PHP-Datei überschrieben werden
- das Überschreiben der Konfiguration in den PHP-Dateien kann in den ini-Dateien verboten werden

## Welche Fehler sollen angezeigt werden?

error_reporting(bitmaske) bestimmt, welche Fehlertypen ausgegeben werden
- 0: gar keine (alle Bits auf 0)  
- -1: alle (alle Bits auf 1)  
- weitere Masken auf:  https://www.php.net/manual/en/errorfunc.constants.php

## Sollen Fehler im Browser angezeigt werden?
ini_set('display_errors', 'true');

## Sollen Fehler in einer Logdatei geloggt werden?
ini_set('log_errors', 'true');  
ini_set('error_log', 'fehler.log');

## Hinweise
- am besten keine Fehler im Browser anzeigen
- am besten Fehler in Log-Datei loggen und mit tail beobachten
- Log-Dateien auswerten, rotieren und sichern
- Log-Dateien in Ordner anlegen, auf den nicht mit dem Browser zugegriffen werden kann
- ...