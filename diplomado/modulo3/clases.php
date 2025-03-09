<?PHP
/*
Clases

Las clases son declaraciones de objetos, también se podrían definir como
abstracciones de objetos o moldes. Esto quiere decir que la definición de un objeto
es una clase. Cuando se programa un objeto y se definen sus características y
funcionalidades en realidad lo que se hace es programar una clase.

La definición básica de una clase comienza con la palabra reservada class,
seguida de un nombre de clase, y continuando con un par de llaves que encierran
las definiciones de las propiedades y métodos pertenecientes a dicha clase.
*/
class Persona
{
	public $nombre = "Diego";
	public $apellido = "Palacio";
	public $edad = 22;
	public $genero = "Masculino";
	public function cantar()
	{
		echo "Estoy cantando";
	}
	public function hablar()
	{
		echo "Estoy hablando";
	}
	public function caminar()
	{
		echo "Estoy caminando";
	}
	public function bailar()
	{
		echo "¿Bailamos?";
	}

}
// Crear una instancia de la clase Persona
$persona1 = new Persona();

// Acceder a las propiedades e imprimirlas
echo "Nombre: " . $persona1->nombre ." Apellido: " . $persona1->apellido." Edad: " . $persona1->edad." Género: " . $persona1->genero."<br>";

// Llamar a los métodos de la clase
$persona1->cantar();
echo "<br>";
//----------------------------------------------------------------------------------------------------------
class Gato
{
    private $raza;
    private $nombre;
    private $edad;
    private $encargada;

    // Constructor correcto
    public function __construct()
    {
        $this->raza = "Gato";
        $this->nombre = "Misifus";
        $this->edad = "8 años";
        $this->encargada = "Estefania";
    }
    // Método para tomar leche
    public function tomarleche()
    {
        echo "El gato está tomando leche"."<br>";
    }

    // Método para pasear
    public function pasear()
    {
        echo "Ir al parque"."<br>";
    }

    // Métodos para obtener las propiedades privadas (Getters)
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getRaza()
    {
        return $this->raza;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getEncargada()
    {
        return $this->encargada;
    }
}

// Crear una instancia de la clase Gato
$gato1 = new Gato();

// Imprimir las propiedades usando los métodos getter
echo "Nombre: " . $gato1->getNombre() . " raza: " . $gato1->getRaza() . " edad: " . $gato1->getEdad() . " encargada: " . $gato1->getEncargada() . "<br>";

// Llamar al método tomarleche
$gato1->tomarleche();
echo "<br>";



































?>
