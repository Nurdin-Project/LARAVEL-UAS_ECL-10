<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'nama_kelas'=> 'XII-TKJ1',
        	'jurusan'	=> 'Teknik Komputer Jaringan'
        ];

        DB::table('table_kelas')->insert($data);

		$data = [
        	'nama_kelas'=> 'XII-TKJ2',
        	'jurusan'	=> 'Teknik Komputer Jaringan'
        ];

        DB::table('table_kelas')->insert($data);
    }
}
