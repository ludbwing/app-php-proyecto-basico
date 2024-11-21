<?php


class Condicionales
{

    public function condicionales()
    {
        echo <<<'EOT'
        <pre>
            .- if: Ejecuta un bloque de código si una condición es verdadera.
            .- else: Se ejecuta cuando la condición del if es falsa.
            .- elseif: Se utiliza para comprobar múltiples condiciones, después de un if, cuando la primera condición es falsa.
            .- switch: Evalúa una variable y ejecuta el bloque de código correspondiente al valor coincidente de esa variable.
            .- Operador ternario (?:): Es una forma compacta de escribir un if-else, evaluando una condición y retornando uno de dos valores posibles.
            .- and: Compara dos condiciones y devuelve true solo si ambas son verdaderas.
            .- or:  Compara dos condiciones y devuelve true si al menos una de ellas es verdadera.
            .- xor:  Compara dos condiciones y devuelve true solo si exactamente una de ellas es verdadera (no ambas).
            .- isset(): Comprueba si una variable está definida y no es null.
            .- empty():  Verifica si una variable está vacía, es decir, si no está definida, es null, es un string vacío, entre otros.
        </pre>
        EOT;
    }
}

