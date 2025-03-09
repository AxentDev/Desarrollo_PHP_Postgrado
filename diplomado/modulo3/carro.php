<?php
class Mazda
{
    private $velocidad = 0; // Inicializar en 0
    private $estadoCarro = "apagado";
    private $personas = 1;

    public function encender()
    {
        echo "Encendiendo la Mazda Cx-5 <br>";
        $this->estadoCarro = "Encendido";
        echo "Mazda Cx-5 encendida <br>";
    }
    public function cambiarEstado($estadoCarro)
    {
        echo "El estado del carro era: ".$this->estadoCarro."<br>";
        $this->estadoCarro = $estadoCarro;
        echo "El estado del carro ahora es: ".$this->estadoCarro."<br>";
    }
    public function frenar($rapidez)
    {
        echo "Frenando la Mazda Cx-5 <br>";
        $this->velocidad -= $rapidez;
        if ($this->velocidad < 0) {
            $this->velocidad = 0; // Evitar velocidad negativa
        }
        echo "La velocidad de la Mazda Cx-5 ahora es: " . $this->velocidad . "<br>";
    }

    public function apagar()
    {
        echo "Apagando la Mazda Cx-5 <br>";
        $this->estadoCarro = "Apagado";
        $this->velocidad = 0; // Detener el carro al apagar
        echo "Mazda Cx-5 apagada <br>";
    }

    public function acelerar($rapidez) // Añadir parámetro $rapidez
    {
        echo "Acelerando la Mazda Cx-5 <br>";
        $this->velocidad += $rapidez;
        echo "La velocidad de la Mazda Cx-5 ahora es: " . $this->velocidad . "<br>";
    }

    public function subirPasajero()
    {
        $this->personas++;
        echo "Tienes " . $this->personas . " pasajeros en la Mazda Cx-5 <br>";
    }

    public function choque()
    {
        if ($this->velocidad >= 100) {
            echo "¡¡¡Accidente!!! <br>";
        } elseif ($this->velocidad > 80) {
            echo "Cuidado con las fotomultas <br>";
        }
    }
}


































?>