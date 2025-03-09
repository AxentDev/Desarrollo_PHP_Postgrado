<?php
/*
Las características de este método son:
El objetivo principal es liberar recursos que solicitó el objeto (conexión a la
base de datos, creación de imágenes dinámicas, etc.),
- Es el último método que se ejecuta de la clase.
- Se ejecuta en forma automática, es decir, no tenemos que llamarlo.
- Debe llamarse __destruct.
- No retorna datos.
- Es menos común su uso que el constructor, ya que PHP gestiona bastante
bien la liberación de recursos en forma automática.
*/
class Destruir
{
    private $nombreDestruccion;
    private $destruido = false; // Control para evitar múltiples impresiones

    // Constructor
    public function __construct()
    {
        echo "En el constructor <br>";
    }

    // Asignar nombre a la destrucción
    public function asignarNombre($nombreDestruccion)
    {
        $this->nombreDestruccion = $nombreDestruccion;
    }

    // Mostrar el nombre de la destrucción
    public function mostrarDestruccion()
    {
        echo $this->nombreDestruccion . "<br>";
    }

    // Método para destruir el objeto
    public function destruir()
    {
        if (!$this->destruido) {
            echo "Destruyendo Objeto <br>"; // Imprimir solo una vez
            $this->destruido = true; // Marcar como destruido
        }
    }

    // Destructor
    public function __destruct()
    {
        // Sin salida aquí
    }
}









































?>