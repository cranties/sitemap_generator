# sitemap.xml PHP Class Generator

PHP Class for dynamic generate sitemap.xml google compatible file.

See sitemap_generator.php to view how to use.

First modify sitemap.config.php with the domain you need for.

Add sitemap_generator.php to your crontab like this:

0 4 * * * /usr/bin/php /var/www/html/miastation/cron/sitemap_generator.php >/dev/null 2>&1
