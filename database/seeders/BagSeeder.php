<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BagSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bags')->insert([
            [
                'bag_id' => 1,
                'name' => 'Mochila Urbana 15L',
                'category' => 'Urbana',
                'gender' => 'Unisex',
                'description' => 'Mochila compacta y ligera, ideal para el uso diario en la ciudad. Cuenta con un compartimento acolchado para tablet o libros pequeños, correas ajustables y un diseño minimalista que combina con cualquier estilo.',
                'price' => 15000,
                'liters' => 15,
                'photo' => 'urbana-15l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 2,
                'name' => 'Mochila Urbana 20L',
                'category' => 'Urbana',
                'gender' => 'Unisex',
                'description' => 'Diseñada para estudiantes y profesionales, esta mochila cuenta con compartimento para laptop de hasta 15 pulgadas. Ofrece bolsillos internos para organización y un tejido resistente al desgaste diario.',
                'price' => 18000,
                'liters' => 20,
                'photo' => 'urbana-20l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 3,
                'name' => 'Mochila Urbana 30L',
                'category' => 'Urbana',
                'gender' => 'Mujer',
                'description' => 'Perfecta para quienes necesitan más espacio sin perder estilo. Incluye bolsillos laterales para botellas, cierre reforzado y un respaldo acolchado que garantiza comodidad durante todo el día.',
                'price' => 25000,
                'liters' => 30,
                'photo' => 'urbana-30l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 4,
                'name' => 'Mochila Urbana 35L',
                'category' => 'Urbana',
                'gender' => 'Hombre',
                'description' => 'Mochila versátil con gran capacidad para el día a día en la ciudad. Su diseño moderno incluye múltiples compartimentos internos y tiras reflectantes para mayor seguridad en entornos urbanos.',
                'price' => 28000,
                'liters' => 35,
                'photo' => 'urbana-35l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 5,
                'name' => 'Mochila de Viaje 40L',
                'category' => 'De viaje',
                'gender' => 'Mujer',
                'description' => 'Mochila compacta para escapadas cortas o viajes de fin de semana. Ofrece un diseño ergonómico con correas acolchadas, cinturón lumbar y bolsillos de acceso rápido para documentos y objetos pequeños.',
                'price' => 32000,
                'liters' => 40,
                'photo' => 'viaje-40l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 6,
                'name' => 'Mochila de Viaje 50L',
                'category' => 'De viaje',
                'gender' => 'Hombre',
                'description' => 'Diseñada para mochileros, esta mochila de 50 litros incluye compartimento inferior para calzado o bolsa de dormir. Su estructura interna facilita la distribución del peso, ideal para travesías de varios días.',
                'price' => 39000,
                'liters' => 50,
                'photo' => 'viaje-50l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 7,
                'name' => 'Mochila de Viaje 60L',
                'category' => 'De viaje',
                'gender' => 'Unisex',
                'description' => 'Mochila amplia y resistente al agua, con espacio para todo lo necesario en viajes largos. Incluye cubierta impermeable, múltiples bolsillos externos y tiras ajustables para transportar equipo adicional.',
                'price' => 45000,
                'liters' => 60,
                'photo' => 'viaje-60l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 8,
                'name' => 'Mochila de Viaje 75L',
                'category' => 'De viaje',
                'gender' => 'Hombre',
                'description' => 'Pensada para expediciones, esta mochila de gran capacidad permite llevar equipo completo en climas exigentes. Cuenta con refuerzos en las costuras, cinturón lumbar ajustable y ventilación en la espalda.',
                'price' => 58000,
                'liters' => 75,
                'photo' => 'viaje-75l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 9,
                'name' => 'Mochila de Viaje 90L',
                'category' => 'De viaje',
                'gender' => 'Unisex',
                'description' => 'La mochila más grande de la serie, diseñada para expediciones prolongadas. Su estructura rígida y correas ergonómicas garantizan un transporte seguro de grandes cargas durante días de travesía.',
                'price' => 69000,
                'liters' => 90,
                'photo' => 'viaje-90l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bag_id' => 10,
                'name' => 'Mochila de Viaje deportiva 20L',
                'category' => 'De viaje',
                'gender' => 'Unisex',
                'description' => 'Mochila ligera para entrenamientos y actividades deportivas. Incorpora bolsillos laterales elásticos para botellas y un diseño transpirable en la espalda que evita la acumulación de sudor.',
                'price' => 16000,
                'liters' => 20,
                'photo' => 'deportiva-20l-frente.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
