# Manual del curso

## Contenidos

### Bloque 1: Introducción

#### Fundamentos de páginas web

Presentación del curso. Breve repaso a las tecnologías que utilizamos en el lado del cliente para generar una página web: HTML, CSS y JavaScript.

#### Introducción al HTTP
Conceptos básicos de redes: *Internet*, *protocolo*, *IP*, *dominio*, *HTTP*, *URL*, *navegador*, etc. Proceso de carga de una web. Modelo cliente-servidor. Estructura —y cabeceras— del sistema petición-respuesta de HTTP.

#### Programación en el cliente vs servidor
Lista de tecnologías de programación en el cliente. Fortalezas de la programación en el cliente. Tecnologías de programación en el servidor. Ventajas del desarrollo en el servidor.

#### Introducción a PHP
Características del lenguaje: *open source*, *interpretado*, *multiplataforma*, *orientado a objetos*, *débilmente tipado*, etc. Historia del lenguaje. Uso de PHP actual. Primer ejemplo. Herramientas para trabajar con PHP: (1) editores de código y (2) servidores web. Instalación del servidor en diferentes sistemas operativos. Modos de ejecutar código PHP: como servidor web, en interfaz de consola o con la consola interactiva.

### Bloque 2: Sintaxis de PHP

#### Sintaxis básica
Extensión `.php`. Fichero predeterminado `index.php`. Etiquetas para encerrar código PHP: `<?php` y `?>`. Constructor `echo`. Separación de instrucciones mediante `;`. Comentarios. Tipos de comentarios: de una línea o de varias.

#### Variables I
Concepto de variable. Características de las variables en PHP: *tamaño variable* y *tipado dinámico*. Reglas para los nombres de variables. Creación, mediante el operador `=`. Cómo usar variables. Tipos de datos de PHP. Tipos escalares. Qué es y cómo crear un `strings`, con comillas simples y con comillas dobles (interpolación de variables). Operador `.` para concatenar `strings`. Valores numéricos enteros con `integer`. Operadores matemáticos básicos. Valores reales con `float`. Separador de decimales: `.`. Tipo *booleano* (*verdadero* y *falso*) con `boolean`.

#### Variables II
Tipos de datos compuestos. Qué es y cómo crear un `array`. Diferencia entre arrays *indexados* y *asociativos*. Acceso a elementos de un array. Añadir o actualizar elementos de un array. Concepto de *objeto*. Tipo de dato *resource*. Tipo y valor *null*.

#### Variables III
Conversión entre tipos: casting en PHP. Reglas de conversión entre escalares. Variables predefinidas del sistema: `$_SERVER`, `$_GET`, `$_POST`, `$_FILES`, `$_REQUEST`, `$_COOKIE`, `$_SESSION`, `$_ENV`. Información del cliente mediante `$_SERVER`. Constantes: qué son y cómo crearlas. Constantes predefinidas: `__LINE__`, `__FILE__`, `__DIR__`.

#### Unidad práctica
Unidad con cuatro ejercicios. Resueltos en la carpeta `actividades`.

#### Operadores
Concepto de operador. Clasificación: (1) por sus operandos y (2) por su función. Operadores aritméticos. Operadores de strings. Operadores lógicos. Operadores de comparación. Operadores de arrays. Operadores de asignación. Operadores de incremento / decremento. 

#### Condicionales
Problemática. Concepto de condicional. Ejemplo de condición con `if`. Condición con `else`. Condiciones con `elseif`. Sentencia `switch`. Sintaxis alternativa.

#### Bucles
Problemática. Concepto de bucle. Presentación de los tipos de bucles. Bucle `while` —0 o más repeticiones. Bucle `do ... while` —1 o más repeticiones. Diferencia entre `while` y `do ...  while`. Bucle `for`. Bucles con arrays: `foreach`. Sentencias `continue` y `break`.

#### Dividir en ficheros.
Problemática. Ventaja de dividir el código en ficheros. Constructores `require` e `include`. Constructores `require_once` e `include_once`. Rutas de ficheros e `include_path`. Fichero de configuración de PHP: `php.ini`. Directivas de `php.ini`.

#### Unidad práctica
Unidad con cinco ejercicios. Resueltos en la carpeta `actividades`.

### Bloque 3: Funciones

#### Funciones del sistema
Concepto de función. Parámetros y valores devueltos. Componentes de una función. Funciones incluidas en PHP. Documentación de funciones. Cómo leer la documentación de una función en la web de PHP. Pseudotipo `mixed` y `number`. Notación para documentar parámetros opcionales. Notación para documentar parámetros ilimitados. Navegación por la documentación de PHP.

#### Funciones numéricas
Función `is_numeric()`. Funciones `is_int()` y `is_float()` para comprobar el tipo de número. Números binarios. Conversión entre binario y decimal: `decbin()` y `bindec()`. Números octales y notación octal. Conversión entre octal y decimal: `decoct()` y `octdec()`. Números hexadecimales y notación hexadecimal. Conversión entre hexadecimal y decimal: `dechex()` y `hexdec()`. Precisión numérica según la arquitectura. Conversión entre bases arbitrarias: `base_convert()`. De real a entero: `floor()`, `ceil()` y `round()`. Números (pseudo)aleatorios, con `rand()`. Función y constante para el número Pi: `pi()` y `M_PI`. Potencias, con `pow()` y con operador `**` desde PHP 5.6. Raices cuadradas, con `sqrt()`. Funciones trigonométricas. Otras funciones.

#### Funciones de texto
Constructores `echo` y `print`. Averiguar si un dato es string: `is_string()`. Tamaño de un texto, con `strlen()`. Posición de una cadena en un texto, con `strpos()`. Extraer parte de un string: `substr()`. Convertir a mayúsculas y minúsculas: `strtoupper()` y `strtolower()`. Capitalizar letras: `ucfirst()` y `ucwords()`. Eliminar espacios: `trim()`, `ltrim()` y `rtrim()`. 

#### Funciones de texto HTML y URL
PHP y HTML. Cambios de línea a `&lt;br /&gt;`: `nl2br()`. Entidades HTML. Seguridad frente ataques XSS. Conversión a entidades HTML: `htmlspecialchars()` y `htmlentities()`. Inversas: `htmlspecialchars_decode()` y `html_entity_decode()`. Función `wordwrap()` para separar un texto en líneas. Analizar y extraer los campos que componen una URL: `parse_url()`. Codificación de URL —*url encode*— con `urlencode()` y `urldecode`. 

#### Funciones avanzadas de texto
Repaso de conceptos. Notación Heredoc. Notación Nowdoc. Curly syntax. Juegos de caracteres de un byte: `ASCII`, `ISO-8859-1`, `ISO-8859-15`. Carácter a número y viceversa: `ord()` y `chr()`. Estructura de un `string`. Juego de caracteres multibyte `UTF-8`. Cómo trabajar en PHP con `UTF-8`. Conversión entre `UTF-8` e `ISO-8859-15`: `utf8_encode()` y `utf8_decode()`. Conversión entre juegos de caracteres arbitrarios: `mb_convert_encoding()`. Funciones de strings multibyte. Concepto de función hash. Algoritmos `md5` y `sha1`, con `md5()` y `sha1()`. Arrays y strings: `implode()` y `explode()`.

#### Funciones de arrays I










