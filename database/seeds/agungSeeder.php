<?php

use Illuminate\Database\Seeder;

class agungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                         $a=[
              ['Nis'=>'123',
              'Nama'=>'Agung',
              'Tempat_lahir'=>'Jakarta',
              'Tanggal_lahir'=>'2001-05-17',
              'Alamat'=>'bandung',
              'Cita_cita'=>'dokter',
              'hobi'=>'bulu tangkis',
              'photo'=>'tidak ada']
              ];
                DB::table('siswas')->insert($a);    }
}
