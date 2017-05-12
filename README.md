# Symfony project .gitignore file with the recomendation github for MAVEN project structure
# https://github.com/github/gitignore/blob/master/Symfony.gitignore

# System files
.DS_Store
.classpath
.project
.settings
.buildpath
.idea/

# Cache and logs (Symfony2)
/bin/cache/*
/bin/logs/*
!bin/cache/.gitkeep
!bin/logs/.gitkeep

# Email spool folder
/bin/spool/*

# Cache, session files and logs (Symfony3)
/var/cache/*
/var/logs/*
/var/sessions/*
!var/cache/.gitkeep
!var/logs/.gitkeep
!var/sessions/.gitkeep

# Parameters
/bin/config/parameters.yml
/bin/config/parameters.ini

# Managed by Composer
/bin/bootstrap.php.cache
/var/bootstrap.php.cache
!bin/console
!bin/symfony_requirements
/vendor/

# Assets and user uploads
/web/bundles/
/web/uploads/

# Assets managed by Bower
/web/assets/vendor/

# PHPUnit
/bin/phpunit.xml
/phpunit.xml

# Bin
/bin/

# Build data
/build/

# Composer PHAR
/composer.phar
/composer.lock

# Backup entities generated with doctrine:generate:entities command
*/Entity/*~