<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            ['fecha' => '2024-06-11 16:30:00', 'lugar' => 'Estadio Santiago Bernabéu', 'campeonato_id' => 1, 'equipo_local_id' => 1, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-06-11 16:00:00', 'lugar' => 'Old Trafford', 'campeonato_id' => 1, 'equipo_local_id' => 3, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-06-11 18:00:00', 'lugar' => 'Camp Nou', 'campeonato_id' => 1, 'equipo_local_id' => 2, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-06-12 20:00:00', 'lugar' => 'Wembley Stadium', 'campeonato_id' => 1, 'equipo_local_id' => 1, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-06-22 20:00:00', 'lugar' => 'Santiago Bernabéu', 'campeonato_id' => 1, 'equipo_local_id' => 2, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-07-02 16:00:00', 'lugar' => 'MetLife Stadium', 'campeonato_id' => 2, 'equipo_local_id' => 4, 'equipo_visitante_id' => 5],
            ['fecha' => '2024-07-02 16:00:00', 'lugar' => 'Lambeau Field', 'campeonato_id' => 2, 'equipo_local_id' => 6, 'equipo_visitante_id' => 4],
            ['fecha' => '2024-06-20 12:00:00', 'lugar' => 'Anfield', 'campeonato_id' => 2, 'equipo_local_id' => 5, 'equipo_visitante_id' => 6],
            ['fecha' => '2024-07-15 12:00:00', 'lugar' => 'Sant Jordi Club', 'campeonato_id' => 2, 'equipo_local_id' => 4, 'equipo_visitante_id' => 6],
            ['fecha' => '2024-07-15 12:00:00', 'lugar' => 'Estadio Azteca', 'campeonato_id' => 2, 'equipo_local_id' => 5, 'equipo_visitante_id' => 4],
            ['fecha' => '2024-08-20 18:00:00', 'lugar' => 'Staples Center', 'campeonato_id' => 3, 'equipo_local_id' => 7, 'equipo_visitante_id' => 8],
            ['fecha' => '2024-08-20 18:00:00', 'lugar' => 'Madison Square Garden', 'campeonato_id' => 3, 'equipo_local_id' => 9, 'equipo_visitante_id' => 7],
            ['fecha' => '2024-09-02 18:00:00', 'lugar' => 'Rogers Arena', 'campeonato_id' => 3, 'equipo_local_id' => 8, 'equipo_visitante_id' => 9],
            ['fecha' => '2024-09-10 16:30:00', 'lugar' => 'KeyArena', 'campeonato_id' => 3, 'equipo_local_id' => 7, 'equipo_visitante_id' => 9],
            ['fecha' => '2024-09-10 16:30:00', 'lugar' => 'Mercedes-Benz Arena', 'campeonato_id' => 3, 'equipo_local_id' => 8, 'equipo_visitante_id' => 7],
        ]);        
    }
}
