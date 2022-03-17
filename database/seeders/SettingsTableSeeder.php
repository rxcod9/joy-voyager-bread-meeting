<?php

namespace Joy\VoyagerBreadMeeting\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('meeting.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-bread-meeting::seeders.settings.meeting.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Meeting',
            ])->save();
        }

        $setting = $this->findSetting('meeting.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-bread-meeting::seeders.settings.meeting.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'Meeting',
            ])->save();
        }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
