<?php
include "./Padre.php";

class OperacionesString extends Padre
{
    public function llamarPadre()
    {
        //parent::saludo();
        $this->saludo();
    }

    public function funcionesString()
    {
        echo <<<'EOT'
        <pre>
            .-strlen(): Devuelve la longitud de una cadena.
            .-strtolower(): Convierte una cadena a minúsculas.
            .- strtoupper(): Convierte una cadena a mayúsculas.
            .- substr(): Devuelve una parte de una cadena.
            .- str_replace(): Reemplaza todas las ocurrencias de una subcadena por otra.
            .- ucfirst(): Convierte la primera letra de una cadena a mayúscula.
            .- ucwords(): Convierte la primera letra de cada palabra de una cadena a mayúscula.
            .- strrev(): Invierte una cadena de texto.
            .- strpos(): Devuelve la posición de la primera ocurrencia de un substring dentro de una cadena.
            .- trim(): Elimina los espacios en blanco o caracteres especiales al inicio y al final de una cadena.
        </pre>
        EOT;
    }
}

