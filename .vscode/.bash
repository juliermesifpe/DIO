code=$(cygpath "C:\Program Files\Microsoft VS Code\bin")
bash=$(cygpath "C:\Program Files\Git\bin")
php=$(cygpath -u "D:\Dev\Tools\php\php-7.4.25")
composer=$(cygpath -u "D:\Dev\Tools\composer\composer-2.1.12")
PATH=$code:$bash:$php:$composer:$PATH
