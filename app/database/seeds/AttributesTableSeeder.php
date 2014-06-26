<?php

class AttributesTableSeeder extends Seeder {

    public function run()
    {
        $attributes = Site\Admin\Models\Attribute::all()->first();

        if (is_null($attributes)){

            Site\Admin\Models\Attribute::create(
                array('name' => 'Monthly cost', 'alias' => 'monthlyCost')
            );

            Site\Admin\Models\Attribute::create(
                array('name' => 'Annual cost', 'alias' => 'annualCost')
            );

            Site\Admin\Models\Attribute::create(
                array('name' => 'Cost', 'alias' => 'cost')
            );

            Site\Admin\Models\Attribute::create(
                array('name' => 'Quality score', 'alias' => 'qualityScore')
            );

        }

    }

}