<IfMOdule mod_rewrite.c>

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)＄ index.php

<Ifmodule>