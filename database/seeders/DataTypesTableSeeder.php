<?php

namespace Joy\VoyagerBreadQuote\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'quotes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'quotes',
                'display_name_singular' => __('joy-voyager-bread-quote::seeders.data_types.quote.singular'),
                'display_name_plural'   => __('joy-voyager-bread-quote::seeders.data_types.quote.plural'),
                'icon'                  => 'voyager-bread voyager-bread-quote voyager-file-code',
                'model_name'            => 'Joy\\VoyagerBreadQuote\\Models\\Quote',
                // 'policy_name'           => 'Joy\\VoyagerBreadQuote\\Policies\\QuotePolicy',
                // 'controller'            => 'Joy\\VoyagerBreadQuote\\Http\\Controllers\\VoyagerBreadQuoteController',
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
