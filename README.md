## Gestión de Categorías PHP v1

_Primera version en php sobre gestión de categorías para la materia Simulacion de Sistemas_

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Todas las instrucciones** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_XAMPP en cualquier plataforma_
_Ejemplo en linux_
_Ingresar a la pagina https://www.apachefriends.org/es/download.html y Elige la arquitectura para tu Linux OS, versión de 32-bits o de 64-bits._
_Situate en la direccion donde se descargo el paquete._
_Y cambia los permisos al instalador_

```
chmod 755 xampp-linux-*-installer.run
```
_Ejecuta el instalador_

```
sudo ./xampp-linux-*-installer.run
```

_Luego inicia el servidor_

```
sudo /opt/lampp/lampp start
```

### Instalación 🔧

_Se necesita tener creado una base de datos para poner en funcionamiento el mini-proyecto._

_Abrir el navegador y coloca la siguiente direccion en la barra de busqueda_

```
localhost/phpmyadmin
```

_Cree una base de datos con el nombre de dbembolcruz y en la pestaña SQL ejecute lo siguiente_

```
CREATE TABLE Usuario(
	Id_Usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Login TEXT,
    Password TEXT,
    Estado TEXT
);

CREATE TABLE Categoria(
	Id_Categoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nombre TEXT,
    Descripcion TEXT,
    Estado TEXT
);

INSERT INTO Usuario(Login, Password, Estado) Values ("Usuario","1234",1);

```

_Con eso ya estaria listo la base de datos._
_Abre una terminal en linux e ingresa en la siguiente ruta_


```
cd /opt/lamp/htdocs/
```

_Despues clona el repositorio con permisos de superusuario_

```
sudo git clone https://github.com/DarkUriel/php-v1
```

_Ve al navegador y coloca la siguiente direccion_

```
localhost/php-v1
```

## Ejecutando las pruebas ⚙️

_La Aplicacion le pedira que ingrese usuario y clave donde se colocara Usuario y 1234 como clave._
_Despues se le mostrara una interfaz donde podra registrar categorias y descripcion, al lado derecho se mostrara en tiempo real las categorias existentes en la base de datos_
_La aplicacion cuenta con las funciones principales CRUD para su uso_

## Construido con 🛠️

_E aqui una lista de las herramientas que se utilizo para el desarrollo de la aplicacion_

* [VScode](https://code.visualstudio.com/) - Editor de codigo 
* [XAMPP](https://www.apachefriends.org/es/index.html) - Distribucion de Apache para el desarrollo web
* [BOOTSTRAP](https://getbootstrap.com/) - biblioteca o conjunto de herramientas para diseño de sitios
* [AJAX](https://developer.mozilla.org/es/docs/Web/Guide/AJAX) - Conjunto de tecnicas de desarrollo web

## Autores ✒️


* **Jose Justo Cruz Zarate** - *Trabajo Inicial* - [DarkUriel](https://github.com/DarkUriel)

## Licencia 📄

Codigo abierto para todo aquel que quiera probar la app.

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita un pollo 🍗 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* etc.



---
⌨️ con ❤️ por [DarkUriel](https://github.com/DarkUriel) 😊
