<?php


class TipoDatos
{

    public function tipoDatos()
    {
        echo <<<'EOT'
        <pre>
            .- Entero (int): Representa números enteros, tanto positivos como negativos, sin decimales.
            .- Flotante (float): Representa números reales o decimales. Se usa para cálculos que requieren precisión decimal.
            .- Cadena (string): Representa una secuencia de caracteres, como palabras o frases.
            .- Booleano (bool): Representa un valor de verdad, que puede ser true (verdadero) o false (falso).
            .- Arreglo (array):  Almacena múltiples valores en una sola variable. Puede ser indexado (con índices numéricos) o asociativo (con claves).
            .- Objeto (object):   Representa una instancia de una clase. Los objetos pueden tener propiedades (atributos) y métodos (funciones).
            .- Nulo (null):  Representa una variable sin valor o un valor vacío.
            .- Recurso (resource):  Representa una referencia a un recurso externo, como una conexión de base de datos o un archivo abierto.
            .- Caracter (char):  Representa un solo carácter, generalmente usado en lenguajes de programación como C. En PHP, se maneja con strings de longitud 1.
            .- Tipo de dato complejo:  En algunos lenguajes, es posible combinar varios tipos de datos en estructuras complejas, como listas, tuplas, diccionarios, etc.
        </pre>
        EOT;
    }
}

