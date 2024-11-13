# ProyectoSymfony
Instalaciones:
- Instalacion completa:
symfony new nombre_proyecto --full
- Instalacion basica
symfony new nombre_proyecto --webapp

-- Require:
composer require twig
composer require serializer
composer require debug
composer require doctrine
composer require symfony/security-bundle

-- Servicios:
php bin/console debug:autowiring

-- Comandos
composer install --- Se utiliza para cargar las dependencias de un proyecto

-- symfony
symfony serve: start 
composer require nombre_archivo
php bin/console debug:router ((Conocer las consultas get y post que se tienen actualmente)
dd(dato_seleccionado); -- Para saber si se estan enviando datos
