<?PHP
class Gato
{
    private $raza;
    private $nombre;
    private $edad;
    private $encargada;

    // Constructor correcto
    public function __construct()//Siempre con dos guines construct ojooooooooooooooooooooooooooooo
    {
        $raza = "Gato";
        $nombre = "Misifus";
        $edad = "8 años";
        $encargada = "Estefania";
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
}












































?>