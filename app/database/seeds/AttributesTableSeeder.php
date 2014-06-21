<?php

class AttributesTableSeeder extends Seeder {

    public function run()
    {
        $attributes = Site\Admin\Models\Attribute::all()->first();

        if (is_null($attributes)){

            Site\Admin\Models\Attribute::create(
                array('name' => 'Monthly cost')
            );

            Site\Admin\Models\Attribute::create(
                array('name' => 'Annual cost')
            );

            Site\Admin\Models\Attribute::create(
                array('name' => 'Cost')
            );

            Site\Admin\Models\Attribute::create(
                array('name' => 'Quality score')
            );

        }

    }

}