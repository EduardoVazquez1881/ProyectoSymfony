<h1>Proyecto Symfony</h1>

<h2>Índice</h2>
<ol>
  <li><a href="#instalaciones">Instalaciones</a></li>
  <li><a href="#requerimientos">Requerimientos</a></li>
  <li><a href="#servicios">Servicios</a></li>
  <li><a href="#comandos">Comandos</a></li>
  <li><a href="#tailwind-css">Tailwind CSS</a></li>
  <li><a href="#nuevas-rutas">Nuevas Rutas</a></li>
</ol>

<h2 id="instalaciones">Instalaciones</h2>

<h3>Instalación Completa</h3>
<p>Para crear un proyecto Symfony con todos los componentes necesarios:</p>
<pre><code>symfony new nombre_proyecto --full</code></pre>

<h3>Instalación Básica</h3>
<p>Para una instalación mínima con una configuración de <code>webapp</code>:</p>
<pre><code>symfony new nombre_proyecto --webapp</code></pre>

<h3>Inicialización de npm</h3>
<p>Para iniciar npm en el proyecto:</p>
<pre><code>npm init -y</code></pre>

<h2 id="requerimientos">Requerimientos</h2>

<p>Para agregar componentes adicionales necesarios en Symfony, usa los siguientes comandos:</p>

<ul>
  <li><strong>Twig</strong>: Motor de plantillas<br>
    <code>composer require twig</code>
  </li>
  <li><strong>Serializer</strong>: Serialización de datos<br>
    <code>composer require serializer</code>
  </li>
  <li><strong>Debug</strong>: Herramientas de depuración<br>
    <code>composer require debug</code>
  </li>
  <li><strong>Doctrine</strong>: Manejo de bases de datos<br>
    <code>composer require doctrine</code>
  </li>
  <li><strong>Security Bundle</strong>: Seguridad en Symfony<br>
    <code>composer require symfony/security-bundle</code>
  </li>
  <li><strong>Form</strong>: Formularios en Symfony<br>
    <code>composer require symfony/form</code>
  </li>
</ul>

<h2 id="servicios">Servicios</h2>
<p>Para ver una lista de los servicios y dependencias disponibles en el contenedor de Symfony:</p>
<pre><code>php bin/console debug:autowiring</code></pre>
<pre><code>php bin/console debug:container</code></pre>


<h2 id="comandos">Comandos</h2>

<h3>Composer</h3>
<ul>
  <li><strong>Instalación de dependencias</strong><br>
    <code>composer install</code>
  </li>
</ul>

<h3>Symfony</h3>
<ul>
  <li><strong>Iniciar servidor de desarrollo</strong><br>
    <code>symfony serve:start</code>
  </li>
  <li><strong>Instalar un paquete</strong><br>
    <code>composer require nombre_paquete</code>
  </li>
  <li><strong>Debug de rutas</strong><br>
    <code>php bin/console debug:router</code><br>
    (Para ver las rutas GET y POST configuradas)
  </li>
  <li><strong>Depuración rápida</strong><br>
    <code>dd(dato_seleccionado);</code><br>
    (Para inspeccionar los datos que se están enviando)
  </li>
</ul>

<h2 id="tailwind-css">Tailwind CSS</h2>

<h3>Instalación</h3>
<ol>
  <li>Instalación de Tailwind<br>
    <code>npm install -D tailwindcss</code>
  </li>
  <li>Inicializar configuración de Tailwind<br>
    <code>npx tailwindcss init</code>
  </li>
  <li>Ruta del archivo de estilos<br>
    Coloca las directivas de Tailwind en <code>ProyectoName/assets/styles/tailwind.css</code>:
    <pre><code>@tailwind base;
@tailwind components;
@tailwind utilities;
</code></pre>
  </li>
  <li>Configuración de Tailwind<br>
    Agrega el siguiente código en <code>tailwind.config.js</code> para escanear plantillas en <code>.html.twig</code>:
    <pre><code>module.exports = {
  content: ['./templates/**/*.html.twig'],
  theme: { extend: {} },
  plugins: [],
};
</code></pre>
  </li>
  <li>Compilar Tailwind CSS<br>
    <code>npx tailwindcss -i ./assets/styles/tailwind.css -o ./public/build/tailwind.css --watch</code>
  </li>
</ol>

<h3>Base de Plantillas</h3>
<p>Agrega el enlace en la plantilla base en <code>ProyectoName/templates/base.html.twig</code>:</p>
<pre><code>&lt;link href="{{ asset('build/tailwind.css') }}" rel="stylesheet"&gt;
</code></pre>

<p>Para heredar la plantilla base en vistas individuales:</p>
<pre><code>{% extends "base.html.twig" %}
{% block title %}Título{% endblock %}
{% block body %}Contenido{% endblock %}
</code></pre>
<p>De esa forma tendremos que poner {% block %} {% endblock %} para ir haciendo la estructura ya sea para tittle, body, javascripts, stylesheets, etc.</p>

<h2 id="nuevas-rutas">Nuevas Rutas</h2>
<p>Para crear nuevas rutas, agrega archivos en la carpeta <code>src/Controller/</code>, y coloca las vistas correspondientes en <code>templates/</code>.</p>
