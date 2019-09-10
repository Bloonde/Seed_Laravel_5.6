<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities\Database\Seeds;

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'created_at' => '2019-03-18 17:49:22',
                    'updated_at' => '2019-03-18 17:49:22',
                    'name' => 'Saint Martin',
                    'code' => '',
                ),
            1 =>
                array (
                    'id' => 2,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Antigua and Barbuda',
                    'code' => '',
                ),
            2 =>
                array (
                    'id' => 3,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'New Zealand',
                    'code' => '',
                ),
            3 =>
                array (
                    'id' => 4,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Moldova',
                    'code' => '',
                ),
            4 =>
                array (
                    'id' => 5,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Turks and Caicos Islands',
                    'code' => '',
                ),
            5 =>
                array (
                    'id' => 6,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Chile',
                    'code' => '',
                ),
            6 =>
                array (
                    'id' => 7,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Namibia',
                    'code' => '',
                ),
            7 =>
                array (
                    'id' => 8,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guernsey',
                    'code' => '',
                ),
            8 =>
                array (
                    'id' => 9,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Jamaica',
                    'code' => '',
                ),
            9 =>
                array (
                    'id' => 10,
                    'created_at' => '2019-03-18 17:49:23',
                    'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Sao Tome and Principe',
                    'code' => '',
                ),
            10 =>
                array (
                    'id' => 11,
                                        'created_at' => '2019-03-18 17:49:23', 
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Andorra',
                    'code' => 'AD',
                ),
            11 =>
                array (
                    'id' => 12,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'United Arab Emirates',
                    'code' => 'AE',
                ),
            12 =>
                array (
                    'id' => 13,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Afghanistan',
                    'code' => 'AF',
                ),
            13 =>
                array (
                    'id' => 14,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Antigua and Barbuda',
                    'code' => 'AG',
                ),
            14 =>
                array (
                    'id' => 15,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Anguilla',
                    'code' => 'AI',
                ),
            15 =>
                array (
                    'id' => 16,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Albania',
                    'code' => 'AL',
                ),
            16 =>
                array (
                    'id' => 17,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Armenia',
                    'code' => 'AM',
                ),
            17 =>
                array (
                    'id' => 18,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Angola',
                    'code' => 'AO',
                ),
            18 =>
                array (
                    'id' => 19,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Antarctica',
                    'code' => 'AQ',
                ),
            19 =>
                array (
                    'id' => 20,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Argentina',
                    'code' => 'AR',
                ),
            20 =>
                array (
                    'id' => 21,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'American Samoa',
                    'code' => 'AS',
                ),
            21 =>
                array (
                    'id' => 22,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Austria',
                    'code' => 'AT',
                ),
            22 =>
                array (
                    'id' => 23,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Australia',
                    'code' => 'AU',
                ),
            23 =>
                array (
                    'id' => 24,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Aruba',
                    'code' => 'AW',
                ),
            24 =>
                array (
                    'id' => 25,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Åland',
                    'code' => 'AX',
                ),
            25 =>
                array (
                    'id' => 26,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Azerbaijan',
                    'code' => 'AZ',
                ),
            26 =>
                array (
                    'id' => 27,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bosnia and Herzegovina',
                    'code' => 'BA',
                ),
            27 =>
                array (
                    'id' => 28,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Barbados',
                    'code' => 'BB',
                ),
            28 =>
                array (
                    'id' => 29,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bangladesh',
                    'code' => 'BD',
                ),
            29 =>
                array (
                    'id' => 30,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Belgium',
                    'code' => 'BE',
                ),
            30 =>
                array (
                    'id' => 31,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Burkina Faso',
                    'code' => 'BF',
                ),
            31 =>
                array (
                    'id' => 32,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bulgaria',
                    'code' => 'BG',
                ),
            32 =>
                array (
                    'id' => 33,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bahrain',
                    'code' => 'BH',
                ),
            33 =>
                array (
                    'id' => 34,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Burundi',
                    'code' => 'BI',
                ),
            34 =>
                array (
                    'id' => 35,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Benin',
                    'code' => 'BJ',
                ),
            35 =>
                array (
                    'id' => 36,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saint Barthélemy',
                    'code' => 'BL',
                ),
            36 =>
                array (
                    'id' => 37,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bermuda',
                    'code' => 'BM',
                ),
            37 =>
                array (
                    'id' => 38,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Brunei',
                    'code' => 'BN',
                ),
            38 =>
                array (
                    'id' => 39,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bolivia',
                    'code' => 'BO',
                ),
            39 =>
                array (
                    'id' => 40,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bonaire',
                    'code' => 'BQ',
                ),
            40 =>
                array (
                    'id' => 41,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Brazil',
                    'code' => 'BR',
                ),
            41 =>
                array (
                    'id' => 42,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bahamas',
                    'code' => 'BS',
                ),
            42 =>
                array (
                    'id' => 43,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bhutan',
                    'code' => 'BT',
                ),
            43 =>
                array (
                    'id' => 44,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Bouvet Island',
                    'code' => 'BV',
                ),
            44 =>
                array (
                    'id' => 45,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Botswana',
                    'code' => 'BW',
                ),
            45 =>
                array (
                    'id' => 46,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Belarus',
                    'code' => 'BY',
                ),
            46 =>
                array (
                    'id' => 47,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Belize',
                    'code' => 'BZ',
                ),
            47 =>
                array (
                    'id' => 48,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Canada',
                    'code' => 'CA',
                ),
            48 =>
                array (
                    'id' => 49,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cocos [Keeling] Islands',
                    'code' => 'CC',
                ),
            49 =>
                array (
                    'id' => 50,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Democratic Republic of the Congo',
                    'code' => 'CD',
                ),
            50 =>
                array (
                    'id' => 51,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Central African Republic',
                    'code' => 'CF',
                ),
            51 =>
                array (
                    'id' => 52,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Republic of the Congo',
                    'code' => 'CG',
                ),
            52 =>
                array (
                    'id' => 53,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Switzerland',
                    'code' => 'CH',
                ),
            53 =>
                array (
                    'id' => 54,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Ivory Coast',
                    'code' => 'CI',
                ),
            54 =>
                array (
                    'id' => 55,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cook Islands',
                    'code' => 'CK',
                ),
            55 =>
                array (
                    'id' => 56,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Chile',
                    'code' => 'CL',
                ),
            56 =>
                array (
                    'id' => 57,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cameroon',
                    'code' => 'CM',
                ),
            57 =>
                array (
                    'id' => 58,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'China',
                    'code' => 'CN',
                ),
            58 =>
                array (
                    'id' => 59,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Colombia',
                    'code' => 'CO',
                ),
            59 =>
                array (
                    'id' => 60,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Costa Rica',
                    'code' => 'CR',
                ),
            60 =>
                array (
                    'id' => 61,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cuba',
                    'code' => 'CU',
                ),
            61 =>
                array (
                    'id' => 62,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cape Verde',
                    'code' => 'CV',
                ),
            62 =>
                array (
                    'id' => 63,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Curacao',
                    'code' => 'CW',
                ),
            63 =>
                array (
                    'id' => 64,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Christmas Island',
                    'code' => 'CX',
                ),
            64 =>
                array (
                    'id' => 65,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cyprus',
                    'code' => 'CY',
                ),
            65 =>
                array (
                    'id' => 66,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Czechia',
                    'code' => 'CZ',
                ),
            66 =>
                array (
                    'id' => 67,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Germany',
                    'code' => 'DE',
                ),
            67 =>
                array (
                    'id' => 68,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Djibouti',
                    'code' => 'DJ',
                ),
            68 =>
                array (
                    'id' => 69,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Denmark',
                    'code' => 'DK',
                ),
            69 =>
                array (
                    'id' => 70,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Dominica',
                    'code' => 'DM',
                ),
            70 =>
                array (
                    'id' => 71,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Dominican Republic',
                    'code' => 'DO',
                ),
            71 =>
                array (
                    'id' => 72,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Algeria',
                    'code' => 'DZ',
                ),
            72 =>
                array (
                    'id' => 73,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Ecuador',
                    'code' => 'EC',
                ),
            73 =>
                array (
                    'id' => 74,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Estonia',
                    'code' => 'EE',
                ),
            74 =>
                array (
                    'id' => 75,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Egypt',
                    'code' => 'EG',
                ),
            75 =>
                array (
                    'id' => 76,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Western Sahara',
                    'code' => 'EH',
                ),
            76 =>
                array (
                    'id' => 77,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Eritrea',
                    'code' => 'ER',
                ),
            77 =>
                array (
                    'id' => 78,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Spain',
                    'code' => 'ES',
                ),
            78 =>
                array (
                    'id' => 79,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Ethiopia',
                    'code' => 'ET',
                ),
            79 =>
                array (
                    'id' => 80,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Finland',
                    'code' => 'FI',
                ),
            80 =>
                array (
                    'id' => 81,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Fiji',
                    'code' => 'FJ',
                ),
            81 =>
                array (
                    'id' => 82,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Falkland Islands',
                    'code' => 'FK',
                ),
            82 =>
                array (
                    'id' => 83,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Micronesia',
                    'code' => 'FM',
                ),
            83 =>
                array (
                    'id' => 84,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Faroe Islands',
                    'code' => 'FO',
                ),
            84 =>
                array (
                    'id' => 85,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'France',
                    'code' => 'FR',
                ),
            85 =>
                array (
                    'id' => 86,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Gabon',
                    'code' => 'GA',
                ),
            86 =>
                array (
                    'id' => 87,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'United Kingdom',
                    'code' => 'GB',
                ),
            87 =>
                array (
                    'id' => 88,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Grenada',
                    'code' => 'GD',
                ),
            88 =>
                array (
                    'id' => 89,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Georgia',
                    'code' => 'GE',
                ),
            89 =>
                array (
                    'id' => 90,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'French Guiana',
                    'code' => 'GF',
                ),
            90 =>
                array (
                    'id' => 91,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guernsey',
                    'code' => 'GG',
                ),
            91 =>
                array (
                    'id' => 92,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Ghana',
                    'code' => 'GH',
                ),
            92 =>
                array (
                    'id' => 93,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Gibraltar',
                    'code' => 'GI',
                ),
            93 =>
                array (
                    'id' => 94,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Greenland',
                    'code' => 'GL',
                ),
            94 =>
                array (
                    'id' => 95,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Gambia',
                    'code' => 'GM',
                ),
            95 =>
                array (
                    'id' => 96,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guinea',
                    'code' => 'GN',
                ),
            96 =>
                array (
                    'id' => 97,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guadeloupe',
                    'code' => 'GP',
                ),
            97 =>
                array (
                    'id' => 98,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Equatorial Guinea',
                    'code' => 'GQ',
                ),
            98 =>
                array (
                    'id' => 99,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Greece',
                    'code' => 'GR',
                ),
            99 =>
                array (
                    'id' => 100,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'South Georgia and the South Sandwich Islands',
                    'code' => 'GS',
                ),
            100 =>
                array (
                    'id' => 101,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guatemala',
                    'code' => 'GT',
                ),
            101 =>
                array (
                    'id' => 102,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guam',
                    'code' => 'GU',
                ),
            102 =>
                array (
                    'id' => 103,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guinea-Bissau',
                    'code' => 'GW',
                ),
            103 =>
                array (
                    'id' => 104,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Guyana',
                    'code' => 'GY',
                ),
            104 =>
                array (
                    'id' => 105,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Hong Kong',
                    'code' => 'HK',
                ),
            105 =>
                array (
                    'id' => 106,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Heard Island and McDonald Islands',
                    'code' => 'HM',
                ),
            106 =>
                array (
                    'id' => 107,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Honduras',
                    'code' => 'HN',
                ),
            107 =>
                array (
                    'id' => 108,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Croatia',
                    'code' => 'HR',
                ),
            108 =>
                array (
                    'id' => 109,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Haiti',
                    'code' => 'HT',
                ),
            109 =>
                array (
                    'id' => 110,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Hungary',
                    'code' => 'HU',
                ),
            110 =>
                array (
                    'id' => 111,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Indonesia',
                    'code' => 'ID',
                ),
            111 =>
                array (
                    'id' => 112,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Ireland',
                    'code' => 'IE',
                ),
            112 =>
                array (
                    'id' => 113,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Israel',
                    'code' => 'IL',
                ),
            113 =>
                array (
                    'id' => 114,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Isle of Man',
                    'code' => 'IM',
                ),
            114 =>
                array (
                    'id' => 115,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'India',
                    'code' => 'IN',
                ),
            115 =>
                array (
                    'id' => 116,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'British Indian Ocean Territory',
                    'code' => 'IO',
                ),
            116 =>
                array (
                    'id' => 117,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Iraq',
                    'code' => 'IQ',
                ),
            117 =>
                array (
                    'id' => 118,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Iran',
                    'code' => 'IR',
                ),
            118 =>
                array (
                    'id' => 119,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Iceland',
                    'code' => 'IS',
                ),
            119 =>
                array (
                    'id' => 120,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Italy',
                    'code' => 'IT',
                ),
            120 =>
                array (
                    'id' => 121,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Jersey',
                    'code' => 'JE',
                ),
            121 =>
                array (
                    'id' => 122,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Jamaica',
                    'code' => 'JM',
                ),
            122 =>
                array (
                    'id' => 123,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Jordan',
                    'code' => 'JO',
                ),
            123 =>
                array (
                    'id' => 124,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Japan',
                    'code' => 'JP',
                ),
            124 =>
                array (
                    'id' => 125,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Kenya',
                    'code' => 'KE',
                ),
            125 =>
                array (
                    'id' => 126,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Kyrgyzstan',
                    'code' => 'KG',
                ),
            126 =>
                array (
                    'id' => 127,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cambodia',
                    'code' => 'KH',
                ),
            127 =>
                array (
                    'id' => 128,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Kiribati',
                    'code' => 'KI',
                ),
            128 =>
                array (
                    'id' => 129,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Comoros',
                    'code' => 'KM',
                ),
            129 =>
                array (
                    'id' => 130,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saint Kitts and Nevis',
                    'code' => 'KN',
                ),
            130 =>
                array (
                    'id' => 131,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'North Korea',
                    'code' => 'KP',
                ),
            131 =>
                array (
                    'id' => 132,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'South Korea',
                    'code' => 'KR',
                ),
            132 =>
                array (
                    'id' => 133,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Kuwait',
                    'code' => 'KW',
                ),
            133 =>
                array (
                    'id' => 134,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Cayman Islands',
                    'code' => 'KY',
                ),
            134 =>
                array (
                    'id' => 135,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Kazakhstan',
                    'code' => 'KZ',
                ),
            135 =>
                array (
                    'id' => 136,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Laos',
                    'code' => 'LA',
                ),
            136 =>
                array (
                    'id' => 137,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Lebanon',
                    'code' => 'LB',
                ),
            137 =>
                array (
                    'id' => 138,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saint Lucia',
                    'code' => 'LC',
                ),
            138 =>
                array (
                    'id' => 139,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Liechtenstein',
                    'code' => 'LI',
                ),
            139 =>
                array (
                    'id' => 140,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Sri Lanka',
                    'code' => 'LK',
                ),
            140 =>
                array (
                    'id' => 141,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Liberia',
                    'code' => 'LR',
                ),
            141 =>
                array (
                    'id' => 142,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Lesotho',
                    'code' => 'LS',
                ),
            142 =>
                array (
                    'id' => 143,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Lithuania',
                    'code' => 'LT',
                ),
            143 =>
                array (
                    'id' => 144,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Luxembourg',
                    'code' => 'LU',
                ),
            144 =>
                array (
                    'id' => 145,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Latvia',
                    'code' => 'LV',
                ),
            145 =>
                array (
                    'id' => 146,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Libya',
                    'code' => 'LY',
                ),
            146 =>
                array (
                    'id' => 147,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Morocco',
                    'code' => 'MA',
                ),
            147 =>
                array (
                    'id' => 148,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Monaco',
                    'code' => 'MC',
                ),
            148 =>
                array (
                    'id' => 149,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Moldova',
                    'code' => 'MD',
                ),
            149 =>
                array (
                    'id' => 150,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Montenegro',
                    'code' => 'ME',
                ),
            150 =>
                array (
                    'id' => 151,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saint Martin',
                    'code' => 'MF',
                ),
            151 =>
                array (
                    'id' => 152,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Madagascar',
                    'code' => 'MG',
                ),
            152 =>
                array (
                    'id' => 153,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Marshall Islands',
                    'code' => 'MH',
                ),
            153 =>
                array (
                    'id' => 154,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Macedonia',
                    'code' => 'MK',
                ),
            154 =>
                array (
                    'id' => 155,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Mali',
                    'code' => 'ML',
                ),
            155 =>
                array (
                    'id' => 156,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Myanmar [Burma]',
                    'code' => 'MM',
                ),
            156 =>
                array (
                    'id' => 157,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Mongolia',
                    'code' => 'MN',
                ),
            157 =>
                array (
                    'id' => 158,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Macao',
                    'code' => 'MO',
                ),
            158 =>
                array (
                    'id' => 159,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Northern Mariana Islands',
                    'code' => 'MP',
                ),
            159 =>
                array (
                    'id' => 160,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Martinique',
                    'code' => 'MQ',
                ),
            160 =>
                array (
                    'id' => 161,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Mauritania',
                    'code' => 'MR',
                ),
            161 =>
                array (
                    'id' => 162,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Montserrat',
                    'code' => 'MS',
                ),
            162 =>
                array (
                    'id' => 163,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Malta',
                    'code' => 'MT',
                ),
            163 =>
                array (
                    'id' => 164,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Mauritius',
                    'code' => 'MU',
                ),
            164 =>
                array (
                    'id' => 165,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Maldives',
                    'code' => 'MV',
                ),
            165 =>
                array (
                    'id' => 166,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Malawi',
                    'code' => 'MW',
                ),
            166 =>
                array (
                    'id' => 167,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Mexico',
                    'code' => 'MX',
                ),
            167 =>
                array (
                    'id' => 168,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Malaysia',
                    'code' => 'MY',
                ),
            168 =>
                array (
                    'id' => 169,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Mozambique',
                    'code' => 'MZ',
                ),
            169 =>
                array (
                    'id' => 170,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Namibia',
                    'code' => 'NA',
                ),
            170 =>
                array (
                    'id' => 171,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'New Caledonia',
                    'code' => 'NC',
                ),
            171 =>
                array (
                    'id' => 172,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Niger',
                    'code' => 'NE',
                ),
            172 =>
                array (
                    'id' => 173,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Norfolk Island',
                    'code' => 'NF',
                ),
            173 =>
                array (
                    'id' => 174,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Nigeria',
                    'code' => 'NG',
                ),
            174 =>
                array (
                    'id' => 175,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Nicaragua',
                    'code' => 'NI',
                ),
            175 =>
                array (
                    'id' => 176,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Netherlands',
                    'code' => 'NL',
                ),
            176 =>
                array (
                    'id' => 177,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Norway',
                    'code' => 'NO',
                ),
            177 =>
                array (
                    'id' => 178,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Nepal',
                    'code' => 'NP',
                ),
            178 =>
                array (
                    'id' => 179,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Nauru',
                    'code' => 'NR',
                ),
            179 =>
                array (
                    'id' => 180,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Niue',
                    'code' => 'NU',
                ),
            180 =>
                array (
                    'id' => 181,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'New Zealand',
                    'code' => 'NZ',
                ),
            181 =>
                array (
                    'id' => 182,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Oman',
                    'code' => 'OM',
                ),
            182 =>
                array (
                    'id' => 183,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Panama',
                    'code' => 'PA',
                ),
            183 =>
                array (
                    'id' => 184,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Peru',
                    'code' => 'PE',
                ),
            184 =>
                array (
                    'id' => 185,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'French Polynesia',
                    'code' => 'PF',
                ),
            185 =>
                array (
                    'id' => 186,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Papua New Guinea',
                    'code' => 'PG',
                ),
            186 =>
                array (
                    'id' => 187,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Philippines',
                    'code' => 'PH',
                ),
            187 =>
                array (
                    'id' => 188,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Pakistan',
                    'code' => 'PK',
                ),
            188 =>
                array (
                    'id' => 189,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Poland',
                    'code' => 'PL',
                ),
            189 =>
                array (
                    'id' => 190,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saint Pierre and Miquelon',
                    'code' => 'PM',
                ),
            190 =>
                array (
                    'id' => 191,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Pitcairn Islands',
                    'code' => 'PN',
                ),
            191 =>
                array (
                    'id' => 192,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Puerto Rico',
                    'code' => 'PR',
                ),
            192 =>
                array (
                    'id' => 193,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Palestine',
                    'code' => 'PS',
                ),
            193 =>
                array (
                    'id' => 194,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Portugal',
                    'code' => 'PT',
                ),
            194 =>
                array (
                    'id' => 195,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Palau',
                    'code' => 'PW',
                ),
            195 =>
                array (
                    'id' => 196,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Paraguay',
                    'code' => 'PY',
                ),
            196 =>
                array (
                    'id' => 197,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Qatar',
                    'code' => 'QA',
                ),
            197 =>
                array (
                    'id' => 198,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Réunion',
                    'code' => 'RE',
                ),
            198 =>
                array (
                    'id' => 199,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Romania',
                    'code' => 'RO',
                ),
            199 =>
                array (
                    'id' => 200,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Serbia',
                    'code' => 'RS',
                ),
            200 =>
                array (
                    'id' => 201,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Russia',
                    'code' => 'RU',
                ),
            201 =>
                array (
                    'id' => 202,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Rwanda',
                    'code' => 'RW',
                ),
            202 =>
                array (
                    'id' => 203,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saudi Arabia',
                    'code' => 'SA',
                ),
            203 =>
                array (
                    'id' => 204,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Solomon Islands',
                    'code' => 'SB',
                ),
            204 =>
                array (
                    'id' => 205,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Seychelles',
                    'code' => 'SC',
                ),
            205 =>
                array (
                    'id' => 206,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Sudan',
                    'code' => 'SD',
                ),
            206 =>
                array (
                    'id' => 207,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Sweden',
                    'code' => 'SE',
                ),
            207 =>
                array (
                    'id' => 208,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Singapore',
                    'code' => 'SG',
                ),
            208 =>
                array (
                    'id' => 209,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saint Helena',
                    'code' => 'SH',
                ),
            209 =>
                array (
                    'id' => 210,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Slovenia',
                    'code' => 'SI',
                ),
            210 =>
                array (
                    'id' => 211,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Svalbard and Jan Mayen',
                    'code' => 'SJ',
                ),
            211 =>
                array (
                    'id' => 212,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Slovakia',
                    'code' => 'SK',
                ),
            212 =>
                array (
                    'id' => 213,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Sierra Leone',
                    'code' => 'SL',
                ),
            213 =>
                array (
                    'id' => 214,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'San Marino',
                    'code' => 'SM',
                ),
            214 =>
                array (
                    'id' => 215,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Senegal',
                    'code' => 'SN',
                ),
            215 =>
                array (
                    'id' => 216,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Somalia',
                    'code' => 'SO',
                ),
            216 =>
                array (
                    'id' => 217,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Suriname',
                    'code' => 'SR',
                ),
            217 =>
                array (
                    'id' => 218,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'South Sudan',
                    'code' => 'SS',
                ),
            218 =>
                array (
                    'id' => 219,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'São Tomé and Príncipe',
                    'code' => 'ST',
                ),
            219 =>
                array (
                    'id' => 220,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'El Salvador',
                    'code' => 'SV',
                ),
            220 =>
                array (
                    'id' => 221,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Sint Maarten',
                    'code' => 'SX',
                ),
            221 =>
                array (
                    'id' => 222,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Syria',
                    'code' => 'SY',
                ),
            222 =>
                array (
                    'id' => 223,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Swaziland',
                    'code' => 'SZ',
                ),
            223 =>
                array (
                    'id' => 224,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Turks and Caicos Islands',
                    'code' => 'TC',
                ),
            224 =>
                array (
                    'id' => 225,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Chad',
                    'code' => 'TD',
                ),
            225 =>
                array (
                    'id' => 226,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'French Southern Territories',
                    'code' => 'TF',
                ),
            226 =>
                array (
                    'id' => 227,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Togo',
                    'code' => 'TG',
                ),
            227 =>
                array (
                    'id' => 228,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Thailand',
                    'code' => 'TH',
                ),
            228 =>
                array (
                    'id' => 229,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Tajikistan',
                    'code' => 'TJ',
                ),
            229 =>
                array (
                    'id' => 230,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Tokelau',
                    'code' => 'TK',
                ),
            230 =>
                array (
                    'id' => 231,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'East Timor',
                    'code' => 'TL',
                ),
            231 =>
                array (
                    'id' => 232,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Turkmenistan',
                    'code' => 'TM',
                ),
            232 =>
                array (
                    'id' => 233,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Tunisia',
                    'code' => 'TN',
                ),
            233 =>
                array (
                    'id' => 234,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Tonga',
                    'code' => 'TO',
                ),
            234 =>
                array (
                    'id' => 235,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Turkey',
                    'code' => 'TR',
                ),
            235 =>
                array (
                    'id' => 236,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Trinidad and Tobago',
                    'code' => 'TT',
                ),
            236 =>
                array (
                    'id' => 237,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Tuvalu',
                    'code' => 'TV',
                ),
            237 =>
                array (
                    'id' => 238,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Taiwan',
                    'code' => 'TW',
                ),
            238 =>
                array (
                    'id' => 239,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Tanzania',
                    'code' => 'TZ',
                ),
            239 =>
                array (
                    'id' => 240,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Ukraine',
                    'code' => 'UA',
                ),
            240 =>
                array (
                    'id' => 241,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Uganda',
                    'code' => 'UG',
                ),
            241 =>
                array (
                    'id' => 242,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'U.S. Minor Outlying Islands',
                    'code' => 'UM',
                ),
            242 =>
                array (
                    'id' => 243,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'United States',
                    'code' => 'US',
                ),
            243 =>
                array (
                    'id' => 244,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Uruguay',
                    'code' => 'UY',
                ),
            244 =>
                array (
                    'id' => 245,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Uzbekistan',
                    'code' => 'UZ',
                ),
            245 =>
                array (
                    'id' => 246,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Vatican City',
                    'code' => 'VA',
                ),
            246 =>
                array (
                    'id' => 247,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Saint Vincent and the Grenadines',
                    'code' => 'VC',
                ),
            247 =>
                array (
                    'id' => 248,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Venezuela',
                    'code' => 'VE',
                ),
            248 =>
                array (
                    'id' => 249,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'British Virgin Islands',
                    'code' => 'VG',
                ),
            249 =>
                array (
                    'id' => 250,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'U.S. Virgin Islands',
                    'code' => 'VI',
                ),
            250 =>
                array (
                    'id' => 251,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Vietnam',
                    'code' => 'VN',
                ),
            251 =>
                array (
                    'id' => 252,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Vanuatu',
                    'code' => 'VU',
                ),
            252 =>
                array (
                    'id' => 253,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Wallis and Futuna',
                    'code' => 'WF',
                ),
            253 =>
                array (
                    'id' => 254,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Samoa',
                    'code' => 'WS',
                ),
            254 =>
                array (
                    'id' => 255,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Kosovo',
                    'code' => 'XK',
                ),
            255 =>
                array (
                    'id' => 256,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Yemen',
                    'code' => 'YE',
                ),
            256 =>
                array (
                    'id' => 257,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Mayotte',
                    'code' => 'YT',
                ),
            257 =>
                array (
                    'id' => 258,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'South Africa',
                    'code' => 'ZA',
                ),
            258 =>
                array (
                    'id' => 259,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Zambia',
                    'code' => 'ZM',
                ),
            259 =>
                array (
                    'id' => 260,
                     'created_at' => '2019-03-18 17:49:23',
                     'updated_at' => '2019-03-18 17:49:23',
                    'name' => 'Zimbabwe',
                    'code' => 'ZW',
                ),
        ));


    }
}
