<?php

use Illuminate\Database\Seeder;

class RecadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recados')->insert(
			['titulo_recado' => 'Mensagem Teste', 'msg_recado' => 'Mensagem para testar o banco de dados...', 'id_remetente' => 1]
		);
    }
}
