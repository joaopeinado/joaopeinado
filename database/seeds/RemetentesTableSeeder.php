<?php

use Illuminate\Database\Seeder;

class RemetentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('remetentes')->insert([
		['nome_remetente' => 'Joao Peinado', 'email_remetente' => 'a15030@bcc.unifal-mg.edu.br', 'tel_remetente' => '19995110153'],
		['nome_remetente' => 'Nome Aleatorio', 'email_remetente' => 'aleatorio@gmail.com', 'tel_remetente' => '19990000000']
	]);
        
    }
}
