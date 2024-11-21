<?php


class OperacionesAritmeticos
{

    public function operacionesAritmeticos()
    {
        echo <<<'EOT'
        <pre>
            .- Suma (+): Es la operación que consiste en agregar dos o más números para obtener su total.
            Ejemplo: 5+3=8
            .- Resta (−): Es la operación que consiste en sustraer un número de otro, obteniendo la diferencia entre ambos.
            Ejemplo: 5-3=2
            .- Multiplicación (×): Es la operación que consiste en agregar un número a sí mismo varias veces según la cantidad indicada por otro número.
            Ejemplo: 5x3=15
            .- División (÷): Es la operación que consiste en repartir un número en partes iguales según otro número, obteniendo el cociente.
            Ejemplo: 10/2=5
            .- Potenciación (^):  Es la operación que consiste en multiplicar un número por sí mismo una cantidad determinada de veces.
            Ejemplo: 5^2=25
            .- Raíz cuadrada (√):  Es la operación inversa de la potenciación, donde se busca el número que, elevado al cuadrado, da como resultado el número original.
            Ejemplo: √16=4
            .- Módulo (%):  Es la operación que obtiene el residuo de una división entre dos números.
            Ejemplo: 10%3=1 (porque 10 dividido entre 3 da 3 con un residuo de 1).
            .- Incremento (++):  Es una operación que aumenta en 1 el valor de una variable.
            Ejemplo: x++ incrementa el valor de x en 1.
            .- Decremento (--):  Es una operación que disminuye en 1 el valor de una variable.
            Ejemplo: y-- decrementa el valor de y en 1.
            .- Valor absoluto (| |):  Es la operación que devuelve el valor numérico de un número sin importar su signo, es decir, su distancia desde cero.
            Ejemplo: |-5|=5
        </pre>
        EOT;
    }
}

