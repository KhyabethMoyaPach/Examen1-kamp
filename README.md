# Examen1-kamp
Primer examen parcial
Khyabeth Andrea Moya Pacheco 
Instalación del Proyecto
Clonar el repositorio
git clone https://github.com/KhyabethMoyaPach/Examen1-kamp.git
cd Examen1-kamp
Instalar dependencias de Composer
composer install
Configurar .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kamp
DB_USERNAME=root
DB_PASSWORD=
Ejecutar migraciones
php artisan migrate
Ejecutar seeders para datos de prueba
php artisan db:seed
Iniciar el servidor de desarrollo
php artisan serve