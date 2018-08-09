<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->insert(array (
            1 => array ('name' => 'Acre', 'initials' => 'AC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            2 => array ('name' => 'Alagoas', 'initials' => 'AL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            3 => array ('name' => 'Amazonas', 'initials' => 'AM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            4 => array ('name' => 'Amapá', 'initials' => 'AP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            5 => array ('name' => 'Bahia', 'initials' => 'BA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            6 => array ('name' => 'Ceará', 'initials' => 'CE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            7 => array ('name' => 'Distrito Federal', 'initials' => 'DF', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            8 => array ('name' => 'Espírito Santo', 'initials' => 'ES', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            9 => array ('name' => 'Goiás', 'initials' => 'GO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            10 => array ('name' => 'Maranhão', 'initials' => 'MA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            11 => array ('name' => 'Minas Gerais', 'initials' => 'MG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            12 => array ('name' => 'Mato Grosso do Sul', 'initials' => 'MS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            13 => array ('name' => 'Mato Grosso', 'initials' => 'MT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            14 => array ('name' => 'Pará', 'initials' => 'PA', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            15 => array ('name' => 'Paraíba', 'initials' => 'PB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            16 => array ('name' => 'Pernambuco', 'initials' => 'PE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            17 => array ('name' => 'Piauí', 'initials' => 'PI', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            18 => array ('name' => 'Paraná', 'initials' => 'PR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            19 => array ('name' => 'Rio de Janeiro', 'initials' => 'RJ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            20 => array ('name' => 'Rio Grande do Norte', 'initials' => 'RN', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            21 => array ('name' => 'Rondônia', 'initials' => 'RO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            22 => array ('name' => 'Roraima', 'initials' => 'RR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            23 => array ('name' => 'Rio Grande do Sul', 'initials' => 'RS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            24 => array ('name' => 'Santa Catarina', 'initials' => 'SC', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            25 => array ('name' => 'Sergipe', 'initials' => 'SE', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            26 => array ('name' => 'São Paulo', 'initials' => 'SP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            27 => array ('name' => 'Tocantins', 'initials' => 'TO', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        ));
    }
}
