<?php
//Activamos la visualización de errores en PHP

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("destructores.php");

$Destruct = new Destruir();
$Destruct->asignarNombre("Destrucción 1");
$Destruct->mostrarDestruccion();
?>

//Contructor
require_once("gato.php");
$GatoBlanco = new gato();
$GatoBlanco->pasear();
$GatoBlanco->tomarleche();
?>
//Setters y getters
<?php
require_once('correo.php');
	$CorreoGmail = new correo();
	$CorreoGmail->setDe("diego@gmail.com");
	echo "De: ".$CorreoGmail->getDe()."<br>";
	$CorreoGmail->setAsunto("Invitación - Familiar");
	echo "Asunto: ".$CorreoGmail->getAsunto()."<br>";
	$CorreoGmail->setMensaje("Hola, los invito a la cena familiar");
	echo "Mensaje: ".$CorreoGmail->getMensaje()."<br>";
	$CorreoGmail->setPara("papa@gmail.com,mama@gmail.com,hermano@gmail.com");
	echo "Para: ".$CorreoGmail->getPara()."<br>";
?>
//This
<?php
require_once('this.php');
$CalculadoraCasio = new Calculadora(9,3);
$CalculadoraCasio->suma();
?>
//Static
<?php
require_once('static.php');
$Circunferencia1 = new Circunferencia(9,3);
$Circunferencia1->valorStatic1();
/*
$Circunferencia1 = new Circunferencia(9,3);
$Circunferencia1->valorStatic2();//como se observa this esta prohibido, en su lugar se observa Self(ir al archivo Self).
*/
?>
//Self
<?php
require_once('self.php');
$Palabra1 = new Palabra("Politecnico");
$Palabra1->mostrarpalabra();
?>
//Parametros-Argumentos
<?php
require_once('parametrosyargumentos.php');
$Ricardo = new persona();
$Ricardo->mostrarInformacion("Diego", 22, "diego@gmail.com");
?>
<?php
// Paso por valor
require_once('parametrosyargumentos.php');
$Ricardo = new persona();
$Ricardo->mostrarInformacion("Diego", 22, "diego@gmail.com");
?>
<?php
// Paso por referencia
require_once('calculadora.php');
$Casio = new Calculadora1();
$numeros = array(5,9,2,3,4,7);
$Casio->sumaArray($numeros);
?>
<?php
// Constructores
require_once('constructores.php');
$Anahi = new Perro("Pastor", "Anahi", 12, "Estefania");
// Acceder a las propiedades usando los métodos getter
echo "Nombre: " . $Anahi->getNombre() . "<br>";
echo "Raza: " . $Anahi->getRaza() . "<br>";
echo "Edad: " . $Anahi->getEdad() . " años<br>";
echo "Encargada: " . $Anahi->getEncargada() . "<br>";
//NOTA:
/*
ATRIBUTOS
Los atributos son las variables que se utilizan para almacenar el estado de un objeto o una instancia de una clase, y describen las características de ese objeto.
Por ejemplo, si tienes una clase que representa un Coche, algunos de sus atributos podrían ser:

color
marca
modelo
velocidad_maxima

ATRIBUTOS PRIVADOS
En programación orientada a objetos, un atributo privado es una variable o propiedad de una clase que solo puede ser accedida o modificada desde dentro de la propia clase. Los atributos privados están diseñados para proteger los datos, evitando que sean modificados o accedidos directamente desde fuera de la clase, y forzando el uso de métodos de acceso (getters) y modificación (setters) para interactuar con ellos de manera controlada.

ATRIBUTOS PUBLICOS
Un atributo público es una variable o propiedad de una clase en programación orientada a objetos que puede ser accedida o modificada directamente desde cualquier parte del código, es decir, no tiene restricciones de acceso. A diferencia de los atributos privados o protegidos, los atributos públicos están disponibles tanto dentro como fuera de la clase donde fueron definidos, lo que permite su libre manipulación.

PARAMETRO
En programación, un parámetro es una variable que se define en la declaración de una función, método o procedimiento, y que se utiliza para recibir valores (llamados argumentos) cuando la función o método es llamado. Los parámetros permiten que las funciones sean reutilizables, ya que se pueden pasar diferentes valores y obtener resultados variados sin necesidad de reescribir el código.

ARGUMENTO
-Son la información que le das a una función para que pueda procesarla.

THIS
this cumple el papel de diferenciar un atributo de un pámetro, dado que por
convención es ideal mantener los nombres, this permite hacer la referencia al objeto
actual (es decir la clase).

DECLARACION
En PHP, una declaración se refiere a cualquier línea de código que realiza una acción o establece un valor. Las declaraciones son fundamentales para la construcción de programas en PHP, y pueden incluir una variedad de estructuras. 
*/

// Constructores2
require_once("calculadora2.php");
$Yamaha = new Calculadora2(54, "-", 12);
$Yamaha->dibujaroperacion();

/*Es admitible la declaración de un constructor vacío, pero ¿cómo se
inicializarán los valores? Aquí vuelven a aplicar los getters y setters, intenta
aplicarlos al ejercicios de la calculadora.
*/
/*
DESTRUCTORES
/*
El método destructor será llamado tan pronto como no haya otras referencias
a un objeto determinado, o en cualquier otra circunstancia de finalización.
*/
require_once("destructores.php");
// Crear el objeto
$Destruct = new Destruir(); // Se llama al constructor
// Asignar nombre
$Destruct->asignarNombre("Destrucción 1");
// Mostrar el nombre de la destrucción
$Destruct->mostrarDestruccion();
// Llamar al método para destruir el objeto
$Destruct->destruir(); // Esto imprimirá "Destruyendo Objeto"
// Fin del script; el destructor se llamará automáticamente aquí, pero no imprimirá nada
/*
METODOS
Son procesos o acciones disponibles para el objeto, creados a partir de una
clase.
Un método es una abstracción de una operación que puede hacer o
realizarse con un objeto. Una clase puede declarar cualquier número de métodos
que lleven a cabo operaciones de todo tipo con los objetos.
La estructura general para implementar los métodos dentro de las clases es
la siguiente:
- Modificador de acceso.
- Palabra reservada function.
- Nombre del método.
- Parámetros.
*/
require_once("carro.php");
$MazdaCx5 = new Mazda();
$MazdaCx5->encender();
$MazdaCx5->subirPasajero();
$MazdaCx5->subirPasajero();
$MazdaCx5->acelerar(30);
$MazdaCx5->frenar(30);
$MazdaCx5->apagar();
$MazdaCx5->subirPasajero();
$MazdaCx5->encender();
$MazdaCx5->acelerar(40);
$MazdaCx5->acelerar(40);
$MazdaCx5->choque();
$MazdaCx5->frenar(10);
$MazdaCx5->acelerar(20);
$MazdaCx5->choque();
$MazdaCx5->acelerar(20);
$MazdaCx5->choque();
$MazdaCx5->cambiarEstado("Optimo Más Que Super Humano Alejo");
/*
ADIVINAR
Otro ejemplo de los métodos en acción es el siguiente ejemplo de la clase
adivinar, hay muchos conceptos y es interesante prestar atención a su
funcionamiento.
Suponga que se debe generar una lotería a partir de un límite inferior y
superior, y acercar el número aleatorio que se genere. Hay que implementar una
clase y un método que realice todo el proceso.
*/
require_once("adivina.php");
$Juego = new Adivina(1,5,4);
/*
Metodos VOID
La utilidad de los métodos void radica en que son métodos
que no cuentan con ningún tipo de retorno.
Algunas características de este tipo de método son:
- Se centran en realizar acciones que no requieren retornar un valor en
específico, también suele ser usado para mostrar mensajes.
- Se caracterizan por no tener un tipo de dato asociado.
- El modificador de acceso más común es public.
- Puede o no recibir parámetros.
- Los nombres deben ser muy claros y descriptivos con la acción que van a
realizar.
Observa algunos ejemplos de métodos void
*/
/*
Metodos de Tipo
La utilidad de los métodos de tipo radica en que son
métodos que cuentan un retorno en base al tipo de dato que fue declarado.
Algunas características de este tipo de método son:
- Se centran en realizar acciones que deben contar con un retorno obligatorio
con base al tipo de dato definido.
- Se caracterizan por tener un tipo de dato asociado.
- El modificador de acceso más común es public.
- Puede o no recibir parámetros.
- Se debe tener en cuenta la correcta identificación de los nombres de los
métodos.
- Los nombres deben ser muy claros y descriptivos con la acción que van a
realizar.
Observa algunos ejemplos de métodos de tipo
*/
require_once("metodotipo.php");
$miCasita = new Casa(650000000);
$precioCasita = $miCasita->aumentarPrecio(100000000);
echo "El nuevo precio de la casita es: ".$precioCasita."<br>";
/*
Ojo con declaracion estricta de int, string y bool
*/
require_once("declaracionestricta.php");
$miCasita = new CasaCerezal(650000000, "Clara Inés Tovar", true);
$precioCasita = $miCasita->aumentarPrecio(100000000);
$miCasita->cambiarPropietario("Alejandro De Mendoza");
$estadoCasita = $miCasita->cambioEstadoCasa();
echo "El nuevo precio de la casita es: ".number_format($precioCasita)." y el propietario es ".$miCasita->obtenerPropietario()." y está ".$estadoCasita."<br>";
/*
usas getRaza() para acceder a la propiedad protegida raza.
*/
require_once("modificadoresdeacceso.php");
$miPerro = new PerroR("Rex", "Alejandro", "Labrador");
echo "Nombre del perro: ".$miPerro->nombre."<br>";
$miPerro->ladrar();
echo "Propietario del perro: ".$miPerro->getPropietario()."<br>";
echo "Raza del perro: ".$miPerro->getRaza()."<br>";

require_once("tweet.php");
$tweet = new Tweet(54, "Hola que tal");
echo $tweet->text."<br>";
$tweet2 = clone $tweet;
echo $tweet2->id."<br>";
$tweet2->id = 3;
echo $tweet2->id."<br>";



















?>
