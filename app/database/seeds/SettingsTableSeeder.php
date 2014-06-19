<?php

class SettingsTableSeeder extends Seeder {

    public function run()
    {
        Site\Admin\Models\Settings::create(
            array('setting' => 'site_title', 'value' => 'Comparison Site')
        );

        Site\Admin\Models\Settings::create(
            array('setting' => 'site_title', 'value' => 'The worlds best site for comparing stuff!')
        );

        Site\Admin\Models\Settings::create(
            array('setting' => 'root_url', 'value' => Request::root())
        );
    }

}