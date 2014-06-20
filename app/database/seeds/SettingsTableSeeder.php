<?php

class SettingsTableSeeder extends Seeder {

    public function run()
    {
        $siteTitle = Site\Admin\Models\Settings::where('setting','=','site_title')->get()->first();

        if (is_null($siteTitle)){

            Site\Admin\Models\Settings::create(
                array('setting' => 'site_title', 'value' => 'Comparison Site')
            );

        }

        $rootUrl = Site\Admin\Models\Settings::where('setting','=','root_url')->get()->first();

        if (is_null($rootUrl)){

            Site\Admin\Models\Settings::create(
                array('setting' => 'root_url', 'value' => Request::root())
            );

        }

    }

}