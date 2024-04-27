FROM php:8.2-apache

#install all the system dependencies and enable PHP modules
RUN apt-get update && apt-get install -y \
      libicu-dev \
      libpq-dev \
      libmcrypt-dev \
      libpng-dev \
      git \
      zip \
      unzip \
      libzip-dev \
      libzip-dev \
      libonig-dev \
      && rm -r /var/lib/apt/lists/*

RUN docker-php-ext-install \
      intl \
      mbstring \
      bcmath \
      gd \
      pcntl \
      pdo \
      mysqli \
      pdo_mysql \
      pdo_pgsql \
      pgsql \
      zip \
      opcache

#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

#set our application folder as an environment variable
ENV APP_HOME /var/www/html
WORKDIR $APP_HOME

#change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

#change the web_root to laravel /var/www/html/public folder
RUN sed -i -e "s/html/html\/public/g" /etc/apache2/sites-enabled/000-default.conf

#copy source files and run composer
COPY ./src $APP_HOME
COPY docker/production/start-container /usr/local/bin/start

# install all PHP dependencies
RUN composer install --no-interaction

#change ownership of our applications
RUN chown -R www-data:www-data $APP_HOME && chmod u+x /usr/local/bin/start && a2enmod rewrite

EXPOSE 80

CMD ["/usr/local/bin/start"]
