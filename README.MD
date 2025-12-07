
## Course on Symphony 6.4
* https://symfony.com/doc
* terminal-console - bin/console

<div align="center">
  <img src="https://media.giphy.com/media/dWesBcTLavkZuG35MI/giphy.gif" width="600" height="300"/>
</div>

#### 1. Добавляем репозиторий Ondrej (обязательно)
* sudo apt update
* sudo apt install -y software-properties-common ca-certificates apt-transport-https lsb-release
* sudo add-apt-repository ppa:ondrej/php -y
* sudo apt update
#### 2. Устанавливаем PHP 8.2 и все модули
* sudo apt install -y \
  php8.2 php8.2-cli php8.2-fpm \
  php8.2-mbstring php8.2-xml php8.2-zip php8.2-curl php8.2-intl \
  php8.2-sqlite3 php8.2-mysql php8.2-gd php8.2-redis \
  unzip git
#### 3. Теперь зарегистрируем альтернативу
* sudo update-alternatives --install /usr/bin/php php /usr/bin/php8.2 82
* Теперь можно выбрать:
* sudo update-alternatives --config php
* Выбери пункт с php8.2.
#### 4. Проверка
* php -v
#### 5. Настраиваем PHP-FPM (если нужно для Nginx/Apache)
* sudo systemctl disable php8.0-fpm
  sudo systemctl stop php8.0-fpm
* Включаем PHP 8.2 FPM:
* sudo systemctl enable php8.2-fpm
  sudo systemctl start php8.2-fpm
  sudo systemctl status php8.2-fpm

### 1. Скачиваем и устанавливаем Symfony CLI (официальный способ)
* wget https://get.symfony.com/cli/installer -O - | bash
### 2. Перемещаем Symfony CLI в системный путь
* sudo mv ~/.symfony*/bin/symfony /usr/local/bin/symfony
### 3. Проверяем установку
* symfony -v
### 6. Теперь можно создать проект на Symfony 6.4
* symfony new my_project --webapp --version=6.4
### 7. Переходим в готовый проект
* cd my_project
### 8. Проверяем окружение Symfony
* symfony check:requirements
### 9. Запускаем локальный веб-сервер
* symfony serve -d
### 10. Проверяем версию установленного фреймворка
* php bin/console --version
