<?php

use Illuminate\Database\Seeder;

class EmprestimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Emprestimo::class, 5)->create();
    }
}
