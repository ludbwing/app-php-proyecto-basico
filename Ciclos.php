<?php


class Ciclos
{

    public function ciclos()
    {
        echo <<<'EOT'
        <pre>
            .- for: Repite un bloque de código un número específico de veces, utilizando un contador que cambia en cada iteración.
            .- while: Ejecuta un bloque de código mientras una condición sea verdadera.
            .- do-while: Similar al while, pero garantiza que el bloque de código se ejecute al menos una vez, ya que la condición se evalúa al final.
            .- foreach: Recorre todos los elementos de un array o colección, ejecutando un bloque de código para cada elemento.
            .- break:  Sale inmediatamente de un ciclo, incluso si la condición no ha terminado de cumplirse.
            .- continue:  Omite el resto del ciclo y pasa a la siguiente iteración, sin ejecutar el código posterior en esa vuelta del ciclo.
            .- for-each:  Similar a foreach en PHP, recorre elementos de una colección o estructura de datos, sin necesidad de un índice.
            .- for (in):  Recorre una secuencia de elementos (como una lista o rango) con un índice de posición.
            .- repeat-until:   Similar al do-while, ejecuta el bloque de código al menos una vez, y luego continúa ejecutando mientras la condición sea falsa.
            .- while (true):  Un ciclo que se ejecuta indefinidamente hasta que se interrumpe por una condición interna o externa (por ejemplo, break).
        </pre>
        EOT;
    }
}

