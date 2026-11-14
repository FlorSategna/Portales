<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => '¿Cómo elegir la mochila ideal para viajar?',
                'category' => 'De viaje',
                'content' => 'Elegir la mochila adecuada puede marcar una gran diferencia durante cualquier viaje. Antes de comprar una, es importante tener en cuenta aspectos como la capacidad, la comodidad y la organización del espacio. Una mochila debe adaptarse al tipo de viaje que vamos a realizar y a la cantidad de cosas que necesitamos llevar.

La capacidad es uno de los primeros aspectos que debemos analizar. Para viajes cortos puede ser suficiente una mochila pequeña, mientras que para viajes de varios días será necesario contar con más espacio para llevar ropa, accesorios y otros elementos personales.

La comodidad también es fundamental. Las correas acolchadas, un respaldo cómodo y una correcta distribución del peso permiten transportar la mochila durante varias horas sin generar molestias.

Por último, una buena organización ayuda a aprovechar mejor el espacio disponible. Los compartimentos y bolsillos permiten separar los objetos y acceder fácilmente a aquello que necesitamos durante el viaje.

Antes de elegir una mochila, conviene pensar en la duración del viaje, el tipo de actividades que vamos a realizar y todo aquello que necesitamos transportar.',
                'published_at' => '2026-10-07',
                'tag' => 'equipaje',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mochilas urbanas para el día a día',
                'category' => 'Urbana',
                'content' => 'Una mochila urbana debe ser práctica, cómoda y resistente para acompañarnos durante las actividades cotidianas. Tanto para ir a estudiar como para trabajar o recorrer la ciudad, elegir un modelo adecuado puede hacer que transportar nuestras cosas sea mucho más sencillo.

Uno de los aspectos más importantes es la distribución de los compartimentos. Contar con espacios separados permite organizar mejor objetos como una computadora portátil, libros, documentos, cargadores y otros accesorios que utilizamos habitualmente.

La comodidad también es fundamental cuando vamos a utilizar la mochila durante varias horas. Las correas ajustables y un respaldo acolchado ayudan a distribuir mejor el peso y hacen que el transporte sea más confortable.

Otro aspecto a tener en cuenta es la resistencia de los materiales. Una mochila de uso diario está expuesta constantemente al desgaste, por lo que conviene elegir materiales que puedan soportar el uso frecuente y las condiciones habituales de la ciudad.

Una buena mochila urbana debe combinar funcionalidad, comodidad y diseño para adaptarse a las necesidades de cada persona.',
                'published_at' => '2026-10-05',
                'tag' => 'organización',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '¿Cuántos litros necesito para viajar?',
                'category' => 'De viaje',
                'content' => 'Elegir la capacidad adecuada de una mochila depende principalmente de la duración del viaje, el tipo de actividad que vamos a realizar y la cantidad de elementos que necesitamos transportar. No siempre una mochila más grande es la mejor opción.

Para viajes cortos de uno o dos días, una mochila de menor capacidad puede ser suficiente. Permite llevar ropa, elementos personales y algunos accesorios sin necesidad de transportar un volumen excesivo.

En viajes de varios días puede ser conveniente optar por una mochila de mayor capacidad. Esto permite llevar más ropa y equipamiento, aunque también es importante evitar cargar objetos innecesarios que aumenten el peso.

Las mochilas de mayor capacidad suelen ser más apropiadas para viajes largos o actividades que requieren transportar equipamiento adicional. Sin embargo, la elección siempre debe depender de las necesidades concretas de cada viaje.

Antes de elegir una mochila, es recomendable hacer una lista de todo lo que necesitamos llevar y pensar cuánto espacio ocupa. De esta manera podremos elegir una capacidad adecuada sin cargar con más peso del necesario.',
                'published_at' => '2026-10-02',
                'tag' => 'capacidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '¿Cómo cuidar tu mochila para que dure más?',
                'category' => 'Urbana',
                'content' => 'Una mochila puede acompañarnos durante muchos años si recibe los cuidados adecuados. Mantenerla limpia, evitar sobrecargarla y prestar atención a pequeños daños son algunas de las formas más sencillas de prolongar su vida útil.

La limpieza debe realizarse de acuerdo con los materiales de cada mochila. Es recomendable retirar periódicamente el polvo y la suciedad acumulada, especialmente en las zonas que están en contacto con el suelo o con otras superficies.

También es importante evitar sobrecargar la mochila. Llevar más peso del recomendado puede deteriorar las costuras, los cierres y las correas, además de afectar la comodidad durante su uso.

Los cierres y las costuras deberían revisarse periódicamente. Si aparece algún pequeño desperfecto, solucionarlo a tiempo puede evitar que el problema se vuelva más grande y termine afectando otras partes de la mochila.

Por último, cuando la mochila no se utiliza durante un período prolongado, conviene guardarla limpia y seca, en un lugar donde no esté expuesta a humedad excesiva.

Con unos cuidados simples y constantes podemos mantener nuestra mochila en buenas condiciones y extender considerablemente su vida útil.',
                'published_at' => '2026-09-30',
                'tag' => 'mantenimiento',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}