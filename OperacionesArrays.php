<?php


class OperacionesArrays
{

    public function operacionesArrays()
    {
        echo <<<'EOT'
        <pre>
            .- array_push():  Agrega uno o más elementos al final de un array.
            .- array_pop(): Elimina el último elemento de un array y lo devuelve.
            .- array_shift(): Elimina el primer elemento de un array y lo devuelve, desplazando los demás elementos.
            .- array_unshift():  Agrega uno o más elementos al principio de un array.
            .- array_merge():  Combina dos o más arrays en uno solo, añadiendo los elementos de los arrays adicionales al final.
            .- array_slice():  Devuelve una porción de un array, sin modificar el original, especificando el índice de inicio y la longitud.
            .- in_array():  Verifica si un valor existe en un array, devolviendo true si se encuentra o false si no.
            .- array_key_exists():  Verifica si una clave existe en un array asociativo.
            .- array_map():   Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
            .- array_filter():  Filtra los elementos de un array utilizando una función de callback, devolviendo solo aquellos que pasen el filtro.
        </pre>
        EOT;
    }
}

