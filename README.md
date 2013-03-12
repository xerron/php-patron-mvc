# Patrón de Diseño Arquitectonico - MVC

Este es el patron arquitectónico MVC con una estructura de carpetas real, puede que se paresca a tu framework favorito esto es porque es una buena practica.
Claro esta que este proyecto tiene fines didacticos -> **aprendizaje**.

**importante** : Este proyecto lo aplasare para el mes de **mayo 2013**. ahora me encuentro ocupado.

## Características:

* **modelo** - Encargado de accesar a los datos. (Ej. BD)
* **vista** - Encargada de mostrar los datos procesados por el *controlador*.
* **controlador** - Encargado de obtener datos del *modelo* y enviarlos a la *vista*

Para más información [Modelo-Vista-Controlador](http://es.wikipedia.org/wiki/Modelo_Vista_Controlador)

## Funcionamiento:

1. Se realiza una petición por una URI. 
2. Un **controlador** captura la URI.
3. Este *controlador* recoge datos de algun  **modelo**.
4. Una vez obtenido los datos el *controlador* lo envia a una **vista**

OBS: El **contralador** puede o no hacer uso de **modelos**.

## Buenas prácticas:

1. Estructura de carpetas para una programación real.
2. Uso del Paradigma de programación orientado a objetos.
3. Uso del estandar [SP1]().
4. Uso de las mejoras de PHP 5.3+
5. Uso de patrones del patron de diseño singleton. (Database, Config)
4. code Poetic, lo mas sencillo posible.

### Creditos

Edwin Manuel Cerrón Angeles














