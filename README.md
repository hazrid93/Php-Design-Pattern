# NOTE
-- php version : `7.4.x`
-- vscode plugins : 
    1. Php Debug
    2. Php Intelephense
    3. Php Namespace Resolver

## update psr-4
`php composer.phar dump-autoload`

## run testcases
`./vendor/bin/phpunit tests`

## debug 
-- install php debug in vscode
-- install xdebug for php `(brew --prefix php@7.4)/bin/pecl install --force xdebug`
-- restart httpd
-- add in php.ini 
xdebug.mode = debug
xdebug.start_with_request = yes
-- restart httpd & php