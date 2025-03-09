<?php
//Getters

/*Getters: hace referencia a la acción de obtener, sirve para obtener (recuperar
o acceder) el valor ya asignado a un atributo y ser utilizado.
*/
class Correo
{
	private $de;
	private $asunto;
	private $mensaje;
	private $para;

	public function setDe($de)
	{
		$this->de = $de;
	}
	// Getter para el remitente
    public function getDe() 
    {
        return $this->de;
    }

    // Setter para el destinatario
    public function setPara($para) 
    {
        $this->para = $para;
    }

    // Getter para el destinatario
    public function getPara() 
    {
        return $this->para;
    }

    // Setter para el asunto
    public function setAsunto($asunto) 
    {
        $this->asunto = $asunto;
    }

    // Getter para el asunto
    public function getAsunto() 
    {
        return $this->asunto;
    }

    // Setter para el mensaje
    public function setMensaje($mensaje) 
    {
        $this->mensaje = $mensaje;
    }

    // Getter para el mensaje
    public function getMensaje() 
    {
        return $this->mensaje;
    }
}































?>