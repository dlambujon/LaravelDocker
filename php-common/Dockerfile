FROM php:7.2-apache

RUN a2enmod rewrite

RUN apt-get update \
    && apt-get install -y \
    default-mysql-client \
    vim \
    git \
    cron \
    #Required for gd installation
    zlib1g-dev libfreetype6-dev libjpeg62-turbo-dev \
    #Required for intl installation
    libpng-dev libicu-dev \
    #Required for xml installation
    libxml2-dev \
   && docker-php-ext-install pdo_mysql mysqli json mbstring bcmath zip gd intl xml

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
#  && php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer

RUN service cron restart
