<?php

/**
 * The base configuration for WordPress
 * ...
 * @package WordPress
 */

+ // Force l'affichage des erreurs PHP.
+@ini_set('display_errors', 'On');
+ // Désactive l'interception des erreurs fatales
+define('WP_DISABLE_FATAL_ERROR_HANDLER', true); // 5.2 and later
+ // Active le mode de déboggage
+define('WP_DEBUG', true);
+ // Affiche les erreurs de Wordpress
+define('WP_DEBUG_DISPLAY', true);
