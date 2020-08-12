<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;	

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('estudantes')->insert([
	            'nome' => $faker->name,
	            'foto' => $faker->name,
	            'dataNascimento' => $faker->date(),
	            'dataEmissaoBilhete' => $faker->date(),
	            'dataExpiracaoBilhete' => $faker->date(),
	            'localNascimento' => $faker->name,
	            'numeroBilhete' => $faker->name,
	            'sexo' => $faker->name,
	            'morada' => $faker->name,
	            'bairro' => $faker->name,
	            'nomeEncarregado' => $faker->name,
	            'relacaoComEncarregado' => $faker->name,
	            'numeroEncarregado' => $faker->name,
	            'criadoPor' => $faker->name,
	            'editadoPor' => $faker->name,
	            'matriculado' => '0',
	            
	        ]);

	         DB::table('professores')->insert([
	            'nome' => $faker->name,
	            'foto' => $faker->name,
	            'dataNascimento' => $faker->date(),
	            'localNascimento' => $faker->name,
	            'numeroBilhete' => $faker->name,
	            'sexo' => $faker->name,
	            'morada' => $faker->name,
	            'bairro' => $faker->name,
	            'estadoCivil' => $faker->name,
	            'nivelAcademico' => $faker->name,
	            'funcao' => $faker->name,
	            'numeroAgente' => '0',
	            'criadoPor' => $faker->name,
	            'editadoPor' => $faker->name,
	            
	        ]);

	        // DB::table('disciplinas')->insert([
	        //     'nome' => $faker->name,
	        //     'classe' => $faker->name,
	        //     'notas' => $faker->name,
	        
	            
	        // ]);

	         DB::table('users')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'password' => bcrypt('secret'),
	        ]);
	}
    }
}
