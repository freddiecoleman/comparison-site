<?php

class SubjectsTableSeeder extends Seeder {

    public function run()
    {
        $subjects = Site\Admin\Models\Subject::all()->first();

        if (is_null($subjects)){

            $type = Site\Admin\Models\Type::where('name', '=', 'Insurance')->get()->first();

            Site\Admin\Models\Subject::create(
                array('name' => 'Car Insurance', 'type_id' => $type->id)
            );

            Site\Admin\Models\Subject::create(
                array('name' => 'Home Insurance', 'type_id' => $type->id)
            );

            $type = Site\Admin\Models\Type::where('name', '=', 'Tablet computer')->get()->first();

            Site\Admin\Models\Subject::create(
                array('name' => 'Tablet', 'type_id' => $type->id)
            );

            $type = Site\Admin\Models\Type::where('name', '=', 'Smart phone')->get()->first();

            Site\Admin\Models\Subject::create(
                array('name' => 'Mobile phone', 'type_id' => $type->id)
            );

        }

    }

}