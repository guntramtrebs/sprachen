<?php

# alle Fehler reporten
error_reporting(-1);

# keine Fehler in Webseite anzeigen
ini_set('display_errors', 'false');

# Fehler in Datei loggen
ini_set('log_errors', 'true');

# Log-Datei ist fehler.log
ini_set('error_log', 'fehler.log');
