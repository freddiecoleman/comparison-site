<?php

class TypesTableSeeder extends Seeder {

    public function run()
    {
        $types = Site\Admin\Models\Type::all()->first();

        if (is_null($types)){

            Site\Admin\Models\Type::create(
                array('name' => 'Insurance')
            );

            Site\Admin\Models\Type::create(
                array('name' => 'Smart phone')
            );

            Site\Admin\Models\Type::create(
                array('name' => 'Game console')
            );

            Site\Admin\Models\Type::create(
                array('name' => 'Tablet computer')
            );

        }

    }

}