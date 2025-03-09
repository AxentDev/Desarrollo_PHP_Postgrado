<?php

// Definir la clase Tweet
class Tweet
{
    public $id;    // Propiedad pública para el ID del tweet
    public $text;  // Propiedad pública para el texto del tweet

    // Constructor para inicializar las propiedades
    public function __construct($id, $text)
    {
        $this->id = $id;       // Asignar el ID
        $this->text = $text;   // Asignar el texto
    }

    // Método opcional para mostrar el tweet
    public function showTweet()
    {
        echo "Tweet ID: " . $this->id . " - Texto: " . $this->text;
    }
}

?>
