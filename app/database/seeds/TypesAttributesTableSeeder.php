<?php

class TypesAttributesTableSeeder extends Seeder {

    public function run()
    {
        $attributes = Site\Admin\Models\Attribute::all()->first();
        $types = Site\Admin\Models\Type::all()->first();
        $typeAttributes = Site\Admin\Models\TypeAttribute::all()->first();

        if (!is_null($attributes) && !is_null($types) && is_null($typeAttributes)){

            $type = Site\Admin\Models\Type::where('name', '=', 'Insurance')->get()->first();

            $attributes = array();
            array_push($attributes, Site\Admin\Models\Attribute::where('name', '=', 'Monthly cost')->get()->first());
            array_push($attributes, Site\Admin\Models\Attribute::where('name', '=', 'Annual cost')->get()->first());
            array_push($attributes, Site\Admin\Models\Attribute::where('name', '=', 'Quality score')->get()->first());

            foreach($attributes as $attribute){
                Site\Admin\Models\TypeAttribute::create(
                    array(
                        'type_id' => $type->id,
                        'attribute_id' => $attribute->id
                    )
                );
            }

            $type = Site\Admin\Models\Type::where('name', '=', 'Smart phone')->get()->first();

            $attributes = array();
            array_push($attributes, Site\Admin\Models\Attribute::where('name', '=', 'Cost')->get()->first());
            array_push($attributes, Site\Admin\Models\Attribute::where('name', '=', 'Quality score')->get()->first());

            foreach($attributes as $attribute){
                Site\Admin\Models\TypeAttribute::create(
                    array(
                        'type_id' => $type->id,
                        'attribute_id' => $attribute->id
                    )
                );
            }

            $type = Site\Admin\Models\Type::where('name', '=', 'Game console')->get()->first();

            foreach($attributes as $attribute){
                Site\Admin\Models\TypeAttribute::create(
                    array(
                        'type_id' => $type->id,
                        'attribute_id' => $attribute->id
                    )
                );
            }

            $type = Site\Admin\Models\Type::where('name', '=', 'Tablet computer')->get()->first();

            foreach($attributes as $attribute){
                Site\Admin\Models\TypeAttribute::create(
                    array(
                        'type_id' => $type->id,
                        'attribute_id' => $attribute->id
                    )
                );
            }

        }

    }

}