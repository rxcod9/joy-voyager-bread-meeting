<?php

namespace Joy\VoyagerBreadMeeting\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'meetings');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'meetings',
                'display_name_singular' => __('joy-voyager-bread-meeting::seeders.data_types.meeting.singular'),
                'display_name_plural'   => __('joy-voyager-bread-meeting::seeders.data_types.meeting.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadMeeting\\Models\\Meeting',
                // 'policy_name'           => 'Joy\\VoyagerBreadMeeting\\Policies\\MeetingPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadMeeting\\Http\\Controllers\\VoyagerBreadMeetingController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
