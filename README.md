# Manual del curso
Bienvenido al curso de introducción a la programación profesional en PHP.

> ### ¿Es necesario otro curso más? ¿Qué tiene éste de diferente?

Existen muchos cursos para aprender PHP junto con otras tecnologías web. Pero en éste nos vamos a centrar en una única cosa: **solamente vamos a aprender PHP**, y nos vamos a asegurarnos de que lo aprendas **bien**. Créeme, es la mejor manera. Si en un mismo curso mezcláramos conceptos de HTML, JavaScript o SQL, no lograríamos que de verdad aprendieras PHP. Es mejor ir **paso a paso**.

Eso no significa que nos olvidemos de lo demás. ¿Ya sabes trabajar con bases de datos? ¡Fenomenal! Hay una unidad en el apéndice que trata sobre **cómo conectar PHP con MySQL**. [Puedes verla en YouTube](http://youtu.be/bVAr1fNFFWY).

Vamos a aprender también a integrar tus páginas PHP con el **servidor web Apache**.

Y también veremos **cómo trabajar con las compañías de alojamiento de páginas web**: qué es en lo que te debes fijar, cómo registrar un dominio, vincularlo a tu alojamiento, conectar por FTP, actualizar el fichero hosts.

Además, es el único curso que está preparado para la última versión de PHP: La 5.6. 

Solamente utilizaremos software libre y/o gratuito. ¡No necesitarás adquirir licencias de paquetes como Dreamweaver! De hecho, ¿sabías que los programadores no solemos trabajar con ese tipo de entornos de desarrollo visuales?

Por supuesto, tienes a tu disposición mucho material: todas las **presentaciones** las puedes descargar de la **[página GitHub del curso](https://github.com/gnoma/cursophp)**; con **ejercicios** pensados para que tú mismo los resuelvas; con más de **200 ejemplos** que tienes a tu disposición para descargar; y con **10 exámenes** para que pongas tus conocimientos a prueba.

> ### ¿Pero es este curso para mí?

Este curso está dirigido a todos aquellos que:

* no saben programar pero desean aprender utilizando PHP.
* tengan alguna noción de programación y deseen aprender PHP.
* ya sepan algo de PHP pero busquen sentar las bases.

Solamente asumiremos que sabes un poco de HTML. ¡Muy poco! Solo lo que puedas aprender tú mismo en un par de días.

Al fin y al cabo, como programadores profesionales de PHP, ahora nos interesa más el *backend* (la tecnología del lado del servidor) que el *frontend* (tecnología del lado del navegador: HTML, CSS y JavaScript).

>### Me has convencido. ¿Podría ver algo antes de empezar?

¡Por supuesto! Toda la documentación del curso es *Open Source*. Lo tienes todo (incluido este documento) en GitHub: [https://github.com/gnoma/cursophp](https://github.com/gnoma/cursophp). El curso se compone de casi 70 unidades. He dejado dos de ellas disponibles para que las consultes en YouTube:

* [**Unidad 1: Introducción**. Unidad de bienvenida al curso](http://youtu.be/oNsFJENri6o) (YouTube).
* [**Unidad 66: MySQL**. Apéndice acerca de cómo integrar PHP con MySQL](http://youtu.be/bVAr1fNFFWY) (YouTube).

## Acerca de su autor
Me llamo Jesús Ruiz-Ayúcar. Soy Ingeniero Técnico Informático de Sistemas y, desde 2007, ejerzo de programador de páginas web *freelance*. ¡Literalmente PHP me da de comer! Además, soy uno de los traductores oficiales de la [documentación de PHP al español](http://www.php.net/manual/es/index.php).

* Twitter: [@chuso](http://twitter.com/chuso)
* Página web: [http://gnoma.es](http://gnoma.es)

Si quieres tener acceso a los videotutoriales, visita la web del curso: [udemy.com](https://www.udemy.com/curso-php-profesional/)

## Contenidos del proyecto en GitHub
* Diapositivas de todas las unidades, en formato HTML, usando la biblioteca [reveal.js](https://github.com/hakimel/reveal.js/).
* Código de los ejemplos utilizados en las diapositivas.
* Ejercicios resueltos.
* Presentación del curso (este mismo documento), en el README.md

## Guía del curso
A continuación se encuentran detallados los contenidos que se estudian en cada una de las unidades del curso.

### Sección 1: Introducción
Aprendizaje y repaso rápido de los conceptos fundamentales para comenzar con el desarrollo web en el lado del servidor con PHP.

#### Clase 1: Fundamentos de páginas web
Presentación del curso. Breve repaso a las tecnologías que utilizamos en el lado del cliente para generar una página web: HTML, CSS y JavaScript.

#### Clase 2: Introducción al HTTP
Conceptos básicos de redes: *Internet*, *protocolo*, *IP*, *dominio*, *HTTP*, *URL*, *navegador*, etc. Proceso de carga de una web. Modelo cliente-servidor. Estructura —y cabeceras— del sistema petición-respuesta de HTTP.

#### Clase 3: Programación en el cliente vs servidor
Lista de tecnologías de programación en el cliente. Fortalezas de la programación en el cliente. Tecnologías de programación en el servidor. Ventajas del desarrollo en el servidor.

#### Clase 4: Introducción a PHP
Características del lenguaje: *open source*, *interpretado*, *multiplataforma*, *orientado a objetos*, *débilmente tipado*, etc. Historia del lenguaje. Uso de PHP actual. Primer ejemplo. Herramientas para trabajar con PHP: (1) editores de código y (2) servidores web. Instalación del servidor en diferentes sistemas operativos. Modos de ejecutar código PHP: como servidor web, en interfaz de consola o con la consola interactiva.

### Sección 2: Sintaxis de PHP
Introducción a la sintaxis de PHP. Repaso de las principales reglas y sentencias que componen el lenguaje.

#### Clase 5: Sintaxis básica
Extensión `.php`. Fichero predeterminado `index.php`. Etiquetas para encerrar código PHP: `<?php` y `?>`. Constructor `echo`. Separación de instrucciones mediante `;`. Comentarios. Tipos de comentarios: de una línea o de varias.

#### Clase 6: Variables I
Concepto de variable. Características de las variables en PHP: *tamaño variable* y *tipado dinámico*. Reglas para los nombres de variables. Creación, mediante el operador `=`. Cómo usar variables. Tipos de datos de PHP. Tipos escalares. Qué es y cómo crear un `strings`, con comillas simples y con comillas dobles (interpolación de variables). Operador `.` para concatenar `strings`. Valores numéricos enteros con `integer`. Operadores matemáticos básicos. Valores reales con `float`. Separador de decimales: `.`. Tipo *booleano* (*verdadero* y *falso*) con `boolean`.

#### Clase 7: Variables II
Tipos de datos compuestos. Qué es y cómo crear un `array`. Diferencia entre arrays *indexados* y *asociativos*. Acceso a elementos de un array. Añadir o actualizar elementos de un array. Concepto de *objeto*. Tipo de dato *resource*. Tipo y valor *null*.

#### Clase 8: Variables III
Conversión entre tipos: casting en PHP. Reglas de conversión entre escalares. Variables predefinidas del sistema: `$_SERVER`, `$_GET`, `$_POST`, `$_FILES`, `$_REQUEST`, `$_COOKIE`, `$_SESSION`, `$_ENV`. Información del cliente mediante `$_SERVER`. Constantes: qué son y cómo crearlas. Constantes predefinidas: `__LINE__`, `__FILE__`, `__DIR__`.

#### Clase 9: Unidad práctica
Unidad con cuatro ejercicios. Resueltos en la carpeta `actividades`.

#### Clase 10: Operadores I
Concepto de operador. Clasificación: (1) por sus operandos y (2) por su función. Operadores aritméticos. Operadores de strings. Operadores lógicos.

#### Clase 11: Operadores II
Operadores de comparación. Operadores de arrays. Operadores de asignación. Operadores de incremento / decremento. 

#### Clase 12: Condicionales I
Problemática. Concepto de condicional. Ejemplo de condición con `if`. Condición con `else`. Condiciones con `elseif`. Sentencia `switch`. Sintaxis alternativa.

#### Clase 13: Condicionales II
Varios `elseif`. Sentencia `switch`. Sintaxis alternativa.

#### Clase 14: Bucles I
Problemática. Concepto de bucle. Presentación de los tipos de bucles. Bucle `while` —0 o más repeticiones. Bucle `do ... while` —1 o más repeticiones. Diferencia entre `while` y `do ...  while`.

#### Clase 15: Bucles II
Bucle `for`. Bucles con arrays: `foreach`. Sentencias `continue` y `break`.

#### Clase 16: Dividir en ficheros.
Problemática. Ventaja de dividir el código en ficheros. Constructores `require` e `include`. Constructores `require_once` e `include_once`. Rutas de ficheros e `include_path`. Fichero de configuración de PHP: `php.ini`. Directivas de `php.ini`.

#### Clases 17 y 18: Unidad práctica
Unidad con cinco ejercicios. Resueltos en la carpeta `actividades`.

### Sección 3: Funciones
Breve introducción a las funciones que incluye el entorno PHP, especialmente aquellas que guardan relación con tipos de datos.

#### Clase 19: Funciones del sistema
Concepto de función. Parámetros y valores devueltos. Componentes de una función. Funciones incluidas en PHP. Documentación de funciones. Cómo leer la documentación de una función en la web de PHP. Pseudotipo `mixed` y `number`. Notación para documentar parámetros opcionales. Notación para documentar parámetros ilimitados. Navegación por la documentación de PHP.

#### Clase 20: Funciones numéricas
Función `is_numeric()`. Funciones `is_int()` y `is_float()` para comprobar el tipo de número. Números binarios. Conversión entre binario y decimal: `decbin()` y `bindec()`. Números octales y notación octal. Conversión entre octal y decimal: `decoct()` y `octdec()`. Números hexadecimales y notación hexadecimal. Conversión entre hexadecimal y decimal: `dechex()` y `hexdec()`. Precisión numérica según la arquitectura. Conversión entre bases arbitrarias: `base_convert()`. De real a entero: `floor()`, `ceil()` y `round()`. Números (pseudo)aleatorios, con `rand()`. Función y constante para el número Pi: `pi()` y `M_PI`. Potencias, con `pow()` y con operador `**` desde PHP 5.6. Raices cuadradas, con `sqrt()`. Funciones trigonométricas. Otras funciones.

#### Clase 21: Funciones de texto
Constructores `echo` y `print`. Averiguar si un dato es string: `is_string()`. Tamaño de un texto, con `strlen()`. Posición de una cadena en un texto, con `strpos()`.

#### Clase 22: Funciones de texto II
Extraer parte de un string: `substr()`. Convertir a mayúsculas y minúsculas: `strtoupper()` y `strtolower()`. Capitalizar letras: `ucfirst()` y `ucwords()`. Eliminar espacios: `trim()`, `ltrim()` y `rtrim()`. 

#### Clase 23: Funciones de texto HTML y URL
PHP y HTML. Cambios de línea a `<br />`: `nl2br()`. Entidades HTML. Seguridad frente ataques XSS. Conversión a entidades HTML: `htmlspecialchars()` y `htmlentities()`. Inversas: `htmlspecialchars_decode()` y `html_entity_decode()`. Función `wordwrap()` para separar un texto en líneas. Analizar y extraer los campos que componen una URL: `parse_url()`. Codificación de URL —*url encode*— con `urlencode()` y `urldecode`. 

#### Clase 24: Funciones avanzadas de texto
Repaso de conceptos. Notación Heredoc. Notación Nowdoc. Curly syntax.

#### Clase 25: Funciones avanzadas de texto II
Juegos de caracteres de un byte: `ASCII`, `ISO-8859-1`, `ISO-8859-15`. Carácter a número y viceversa: `ord()` y `chr()`. Estructura de un `string`. Juego de caracteres multibyte `UTF-8`. Cómo trabajar en PHP con `UTF-8`. Conversión entre `UTF-8` e `ISO-8859-15`: `utf8_encode()` y `utf8_decode()`. Conversión entre juegos de caracteres arbitrarios: `mb_convert_encoding()`. Funciones de strings multibyte. Concepto de función hash. Algoritmos `md5` y `sha1`, con `md5()` y `sha1()`. Arrays y strings: `implode()` y `explode()`.

#### Clase 26: Funciones de arrays I
Función `is_array()`. Contar elementos, con `count()`. Visualizar un array, `print_r()` y `var_dump()`. Repaso de creación de arrays. Sintaxis con corchetes, desde PHP 5.4. Función `range()` para crear un array con un rango numérico. Añadir elementos. Añadir elemento al final con `array_push()`. Añadir elemento al comienzo con `array_unshift()`. Añadir muchos elementos, con `array_merge()` y con operador `+`. Eliminar el último elemento: `array_pop()`. Eliminar el primer elemento:  `array_shift()`. Concepto de pilas y colas.

#### Clase 27: Funciones de arrays II
Extraer un subarray con `array_slice()`. Comprobar si contiene un valor o una clave, con `in_array()` y con `array_key_exists()`. Operaciones con arrays asociativos: `array_keys()` para obtener las claves; `array_values()` para obtener los valores; `array_flip` para intercambiar claves y valores; `array_combine()` para unir dos arrays —uno de claves y otro de valores. Arrays y strings: `implode()` y `explode()`. Constructor `list` para asignar un valor devuelto de tipo array a variables escalares.

#### Clase 28: Funciones de fechas y horas
Introducción. Qué son las *locales*. Cómo establecerlas en PHP, con `setlocale()`. Qué es un *UNIX timestamp*. Obtenerlo con `time()`—ahora— o con `mktime()` —personalizado.

#### Clase 29: Funciones de fechas y horas II
Formatos de fecha y hora con `strftime()`. Análisis de strings para obtener la fecha, con `strptime()`. Formatos de fecha y hora con `date()` —solo en inglés.

#### Clases 30 y 31: Unidad práctica
Unidad con cuatro ejercicios. Resueltos en la carpeta `actividades`.

### Sección 4: Crear funciones
Reglas para la construcción de funciones personalizadas.

#### Clase 32: Introducción de Funciones
Concepto de función. Ventajas de la creación de funciones. Cómo comprobar si existe una función: `function_exists()`. Clasificación: (1) en función de si recibe parámetros o no y (2) en función de si devuelve o no un valor.

#### Clase 33: Introducción de Funciones II
Creación de una función básica: sin parámetros ni valor devuelto. Devolver valores con `return`. Cómo aceptar un parámetro. Varios parámetros, separando por `,`. Parámetros opcionales. Argumentos variables, antes de PHP 5.6 y después. Parámetros por valor y por referencia. 

#### Clase 34: Ámbito de variables y funciones anónima
Funciones variables. Ámbito de variables. Ámbito global. Palabra clave `global`. Variable predefinida `$GLOBALS`. Vida de variables locales. Palabra clave `static`.

#### Clase 35: Ámbito de variables y funciones anónima
Funciones anónimas. Tipo de dato `callable`. Implementación antes de PHP 5.3: mediante *funciones variables* o usando `call_user_func()`.

#### Clases 36, 37 y 38: Unidad práctica
Unidad con tres ejercicios. Resueltos en la carpeta `actividades`.

### Sección 5: Ficheros
Estudio a fondo de cómo trabajar con ficheros desde PHP.

#### Clase 39: Introducción a ficheros
Comprobaciones: si un fichero existe, `file_exists()`; si es un directorio, `is_dir()`; si es un fichero regular, `is_file()`; si tenemos permisos de lectura, `is_readable()`; si tenemos permisos de escritura, `is_writable()`. Obteniendo el nombre del directorio `dirname()`. Obteniendo el tamaño de un fichero en bytes: `filesize()`.

#### Clase 39: Introducción a ficheros II
Copiar un fichero a otra ruta: `copy()`. Renombrar —mover— un fichero: `rename()`. Eliminar un fichero: `unlink()`. Crear un directorio: `mkdir()`. Eliminar un directorio vacío: `rmdir()`. Comprobando espacio de una unidad: `disk_free_space()` y `disk_total_space()`.

#### Clase 41: Leyendo y escribiendo ficheros
Métodos de lectura de ficheros sin recursos: `file_get_contents()` para leer el contenido de un archivo; `file()` para obtener el contenido de un archivo en un array —un elemento por línea; `readfile()` para volcar en la salida el contenido de un fichero.

#### Clase 42: Leyendo y escribiendo ficheros II
Escribir en un fichero: `file_put_contents()`. *Wrappers* (envolturas). Wrappers predeterminados. `stream_get_wrappers()` para conocer los disponibles.

#### Clase 43: Trabajando con recursos
Concepto de recurso (tipo de dato `resource`). Conocer el tipo de recurso: `get_resource_type()`. Concepto de *cursor*. Trabajando con ficheros usando recursos. Ventajas de esta operativa. Abrir un fichero: `fopen()`. Modos de apertura con `fopen()`. Cierre y liberación de recurso, con `fclose()`. Comprobación de final de fichero: `feof()`. Leer `n` bytes: `fread()`. Obtener una línea (hasta `\n`): `fgets()`. Una línea, limpiando etiquetas HTML y PHP: `fgetss()`. Obtener un solo carácter: `fgetc()`. 

#### Clase 44: Trabajando con recursos
Escribir en un fichero: `fwrite()`. Mover el cursor: `fseek()`. Reiniciar cursor: `rewind()`. Consultar posición del cursor: `ftell()`.

#### Clase 45: El wrapper php://
Wrapper `php://`. Qué es el modo CLI (*Command Line Interface*). Paso de parámetros a aplicaciones CLI. Variables predefinidas en CLI: `$argc` (contador de parámetros) y `$argv` (valor de parámetros). Función que analiza los parámetros: `getopt()`.

#### Clase 46: El wrapper php:// II
Entrada y salida estándar: `stdin`, `stdout` y `stderr`. Acceso a la Entrada/Salida estándar desde CLI: `php://stdin`, `php://stdout` y `php://stderr`. Constantes de E/S: `STDIN`, `STDOUT` y `STDERR`. Entrada POST sin procesar: `php://input`. Buffer de salida estándar: `php://output`. Fichero *temporal en memoria*: `php://memory`. Fichero temporal, quizás en disco: `php://temp`. Obtener un fichero temporal: `tmpfile()`. Obtener un nombre único y temporal: `tempnam()`. Filtros de acceso a contenido de ficheros: `php://filter`.

#### Clase 47: Unidad práctica
Unidad con dos ejercicios. Resueltos en la carpeta `actividades`.

### Sección 6: Imágenes
Introducción al manejo de imágenes, con `libgd`.

#### Clase 48: Introducción a las imágenes
Bibliotecas para el manejo de imágenes. Biblioteca `libgd`. Crear una imagen vacía: `imagecreatetruecolo()`. Liberar recurso de una imagen: `imagedestroy()`. Crear recursos *gd* a partir de una imagen existente. Mostrar por pantalla o guardar en disco una imagen. Funciones de salida de imágenes. Introducción a la función `header()`. Consultar ancho y alto de una imagen: `imagesx()` e `imagesy()`.

#### Clase 49: Introducción a las imágenes II
Copiar y/o recortar una imagen sin cambiar tamaño: `imagecopy()`. Copia, escala y recorta una imagen: `imagecopyresampled()`. Rotar una imagen un número determinado de grados: `imagerotate()`. Desde PHP 5.5, voltear una imagen: `imageflip()`. Aplicar un filtro gráfico a una imagen: `imagefilter()`.

#### Clase 50: Creación de textos y formas
Definición de colores RGB, con `imagecolorallocate()`. Consultar y analizar un color: `imagecolorat()` y `imagecolorsforindex()`. Asignar un color a un determinado pixel `x,y`: `imagesetpixel()`. Escribir texto usando una fuente `TTF`: `imagettftext()`. Orden en los cambios.

#### Clase 51: Creación de textos y formas II
Trazar una línea recta: `imageline()`. Rectángulo relleno, con `imagefilledrectangle()`. Elipse rellena, con `imagefilledellipse()`. Polígono con relleno, `imagefilledpolygon()`. Arco con relleno, `imagefilledarc()`. Figuras sin relleno, con `imagearc()`, `imageellipse()`, `imagepolygon` e `imagerectangle()`. Establecer grosor de trazo: `imagesetthickness()`.

### Sección 7: HTTP y mail
Integración de PHP con HTTP: formularios, cookies, sesiones, etc. Envío de correos electrónicos.

#### Clase 52: Header
Recordatorio de HTTP. Una petición HTTP contiene cabeceras y contenido. Concepto de cabeceras y ejemplos. Función `header()` para establecer una cabecera. Cómo realizar una redirección. Constructores `exit` y `die`.

#### Clase 53: Header II
Mostrar un error `404`, *página no encontrada*. Establecer el tipo de contenido devuelto. Ejemplos de tipos de contenido. Forzar la descarga de un recurso.

#### Clase 54: Formularios
Formularios en HTML. Elementos de un formulario. Formularios enviados mediante el método HTTP `GET`. Variable global `$_GET`. Formularios enviados mediante el método HTTP `POST`. Variable global `$_POST`.

#### Clase 55: Formularios II
Elementos de tipo texto. Áreas de texto. Menús desplegables (`select`). Botones radio. Casillas de verificación. Wrapper `php://input`. Integración de arrays y formularios. 

#### Clase 56: Carga de ficheros por HTTP
Elemento de carga de fichero. Cómo debe ser un formulario para el envío de ficheros. Variable global `$_FILES`: campos que contiene cada elemento del mismo. Obteniendo el fichero temporal subido por el usuario: `move_uploaded_file()`. Trabajando con permisos de escritura. Ajustes de `php.ini` que afectan al funcionamiento de la carga de ficheros.

#### Clase 57: Cookies
Problemática. Solución mediante claves por URL. Concepto de cookie. Características de las cookies. Función para asignar una cookie: `setcookie()`. Variable global para consultar el valor de una cookie: `$_COOKIE`.

#### Clase 58: Cookies
Ejemplo: plataforma de identificación de usuarios. Ejemplo: reconociendo al usuario. Asegurando el código mediante funciones *hash*. Cierre de sesión (eliminar una cookie).

#### Clase 59: Sesiones
Problemática. Variables de sesión. Función para comenzar una sesión: `session_start()`. Nombre predeterminado: `PHPSESSID`. Modificar el nombre. Variable predeterminada `$_SESSION`.

#### Clase 60: Sesiones
Tipos de datos aceptados en sesiones. Eliminar datos de sesión, mediante `unset`. Cookies vs Sesiones.

#### Clase 61: Envío de emails
Función `mail()` para el envío de correos electrónicos. Estructura del parámetro `$to`. Estructura del parámetro `$subject`. Campo `$message`: texto plano o HTML. Estructura y contenido del parámetro `$additional_headers`. Correos más complejos: bibliotecas externas. Ejemplo básico. Ejemplo avanzado.

#### Clases 62, 63 y 64: Unidad práctica
Unidad con cuatro ejercicios. Resueltos en la carpeta `actividades`.

### Sección 8: Final
Repaso de lo aprendido y conceptos por los que se puede continuar.

#### Clase 65: Unidad final
Enumeración de contenidos aprendidos. Lista de conceptos pendientes de aprendizaje: modelo de objetos de PHP —objetos, clases, clases abstractas, interfaces, traits; espacios de nombres; extensiones —`pear`, `phar`, `composer`; expresiones regulares; SQL; XML y JSON; API REST; Sistema de excepciones; `cURL`; depuración con `xdebug`; servicios web; memoria caché; biblioteca PHP estándar; streams y contextos.

### Sección 9: Apéndices

#### Clase 66: MySQL
Breve introducción a las bases de datos. Breve introducción al lenguaje SQL. Gestor de bases de datos relacionales MySQL. Conectar, mediante `mysqli_connect()`. Controlar errores de conexión, mediante `mysqli_connect_errno()` y `mysqli_connect_error()`. Cierre de conexión, mediante `mysqli_close()`. Enviar una consulta y obtener el resultado devuelto: `mysqli_query()`. Número de filas devueltas por una consulta: `mysqli_num_rows()`. Obtener todas las filas del resultado de una consulta: `mysqli_fetch_all()`. Obtener una fila en un array: `mysqli_fetch_array()`. Prevención de ataques de inyección SQL: `mysqli_real_escape_string()`. Consultar último ID insertado: `mysqli_insert_id()`. Conocer el número de filas afectadas por una consulta: `mysqli_affected_rows()`. Interfaces MySQL: interfaz MySQLi, interfaz MySQL original (obsoleta) y `PDO_MySQL` de la biblioteca PDO. Drivers MySQL.

#### Clase 67: Apache
Software servidor web. Características que comparten los servidores web de producción. Servidor web Apache. Integración entre PHP y Apache. Fichero de configuración local `.htaccess`. Control de acceso mediante autenticación HTTP: `.htpasswd`. Reescritura de URL: `mod_rewrite`. Ejemplo e integración con PHP.

#### Clase 68: Alojamiento de páginas web
Por qué son necesarias las compañías de *hosting*. En qué parámetros debemos fijarnos al contratar un alojamiento: soporte de PHP, `php.ini`, bases de datos, acceso FTP, acceso SSH, espacio, tráfico, dominios, etc. Tipos de alojamientos: compartido de un dominio, compartido multidominio, virtual, dedicado. Acceso FTP (FTPS y SFTP). Clientes de FTP. Acceso SSH. Dominios y servidores web. Mapeo local de dominios: ventajas. Fichero `/etc/hosts`.