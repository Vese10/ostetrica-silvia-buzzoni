<?php
// Interruttore FAQ: impostare a true per pubblicare le FAQ
// (pagina /faq, voce di menu e sezioni FAQ in tutte le pagine dei servizi).
// Ricordarsi anche di decommentare l'URL /faq in sitemap.xml.
if (!defined('FAQ_ENABLED')) {
  define('FAQ_ENABLED', false);
}

// Interruttore Blog: impostare a true per pubblicare il blog
// (pagine /storie-di-nascita, /parla-l'ostetrica, articoli in /blog/ e sezione appunti.php).
// Se disattivato, le pagine reindirizzano (302) alla home.
if (!defined('BLOG_ENABLED')) {
  define('BLOG_ENABLED', false);
}
