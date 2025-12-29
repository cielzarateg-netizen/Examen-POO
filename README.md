🚀 Proyecto: Sistema de Gestión de Libros y Cómics (POO PHP)
Este es un proyecto educativo desarrollado bajo la metodología Fast Track para demostrar el dominio de los pilares fundamentales de la Programación Orientada a Objetos (POO) utilizando PHP.

📝 Descripción
El sistema simula la estructura de una tienda de libros, permitiendo la creación de objetos de tipo Book y su especialización en Comic. El proyecto se centra en la organización de código limpio, reutilización de lógica mediante herencia y manejo de errores robusto.

🛠️ Conceptos de POO Aplicados
En este repositorio encontrarás ejemplos prácticos de:

Constructores Modernos: Uso de Constructor Property Promotion de PHP 8 para una sintaxis más limpia.

Encapsulamiento: Uso de niveles de visibilidad (private, public, protected) para proteger la integridad de los datos.

Herencia: La clase Comic extiende de Book, heredando sus atributos y métodos.

Sobrescritura de Métodos: Uso de parent::getInfo() para extender la funcionalidad del padre sin repetir código.

Manejo de Excepciones: Implementación de bloques try-catch para validar que los precios y el stock sean valores lógicos.

💻 Cómo ejecutar el proyecto
Clona este repositorio en tu carpeta local de XAMPP (htdocs).

Bash

git clone https://github.com/tu-usuario/nombre-del-repo.git
Asegúrate de tener activo el módulo Apache en el Panel de Control de XAMPP.

Abre tu navegador y dirígete a:

http://localhost/nombre-del-repo/Comic.php
📂 Estructura del Código
Book.php: Clase base con propiedades de autor, título, precio e ID. Incluye validación de excepciones en el constructor.

Comic.php: Clase hija que añade propiedades específicas como ilustradores y volumen.
