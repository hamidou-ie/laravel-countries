<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class MK_Macedonia extends CountrySeeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $lang = 'en';

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    public ?string $region = 'europe';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'North Macedonia';

        // Set the country's official name
        $this->official_name = 'Republic of Macedonia'; // Note: The country is now officially recognized as "Republic of North Macedonia"

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'MK';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MKD';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '807';

        // Set the international dialing code
        $this->international_phone = '389';

        // Define the languages spoken in the country
        $this->languages = ['mk', 'sq']; // Macedonian and Albanian are official languages

        // Define the top-level domain(s)
        $this->tld = ['.mk'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '40 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '25 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '78%'; // High internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Macedonia CERT (Computer Emergency Response Team)';

        // List popular web technologies in North Macedonia
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Ruby'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MK';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '718075';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Macedonian denar',
            // Currency code
            'code' => 'MKD',
            // Currency symbol
            'symbol' => 'ден',
            // Main unit
            'main_unit' => 'denar',
            // Subunit
            'sub_unit' => 'deni',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['10', '50', '100', '200', '500', '1000', '2000'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10'],
            // Subunit coins
            'coins_sub' => ['50'],
        ];

        // Set the population
        $this->population = 2083459; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 25713; // km²

        // Set the capital city
        $this->capital = 'Skopje';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Skopje',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '1991-09-08'; // Independence from Yugoslavia

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'North Atlantic Treaty Organization (NATO)',
            'Council of Europe',
            'World Health Organization (WHO)',
            'International Monetary Fund (IMF)',
            'World Trade Organization (WTO)',
            'Organization for Security and Co-operation in Europe (OSCE)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 12.5; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Eastern Orthodoxy)',
            'Islam',
        ];

        // Describe the form of government
        $this->government = 'Parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is highly popular in North Macedonia

        // Define bordering countries
        $this->borders = [
            ['name' => 'Albania', 'iso_alpha_2' => 'AL'],
            ['name' => 'Bulgaria', 'iso_alpha_2' => 'BG'],
            ['name' => 'Greece', 'iso_alpha_2' => 'GR'],
            ['name' => 'Kosovo', 'iso_alpha_2' => 'XK'],
            ['name' => 'Serbia', 'iso_alpha_2' => 'RS'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇰',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1F0',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1F0;',
            // CSS entities
            'css' => '\\1F1F2\\1F1F0',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127472;',
            // Direct UTF-8 string
            'utf8' => '🇲🇰',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDF0',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-mk:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1F0;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#D20000',
                // RGB color values
                'rgb' => '210,0,0',
                // CMYK color values
                'cmyk' => '0,100,100,18',
                // HSL color values
                'hsl' => '0°,100%,41%',
                // HSV color values
                'hsv' => '0°,100%,82%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFCC00',
                // RGB color values
                'rgb' => '255,204,0',
                // CMYK color values
                'cmyk' => '0,20,100,0',
                // HSL color values
                'hsl' => '48°,100%,50%',
                // HSV color values
                'hsv' => '48°,100%,100%',
                // Pantone color code
                'pantone' => 'Pantone 116 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '41.6086',
            // Longitude in decimal degrees
            'longitude' => '21.7453',
            // Degrees with decimal
            'dd' => '41.6086° N, 21.7453° E',
            // Degrees, minutes, seconds
            'dms' => '41°36\'30.96" N, 21°44\'43.08" E',
            // Degrees and decimal minutes
            'dm' => '41°36.516\' N, 21°44.718\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mk"},"geometry":{"type":"Polygon","coordinates":[[[20.82111,40.908882],[20.811943,40.901108],[20.802498,40.899994],[20.759163,40.904442],[20.75333,40.905273],[20.743332,40.907776],[20.735119,40.911057],[20.733887,40.911942],[20.669998,41.088051],[20.654999,41.090271],[20.600613,41.093185],[20.578331,41.162773],[20.519165,41.246384],[20.502499,41.304443],[20.495552,41.320549],[20.492775,41.331108],[20.496109,41.34333],[20.497498,41.347221],[20.50222,41.348053],[20.524166,41.350273],[20.549999,41.373055],[20.562222,41.403885],[20.562496,41.408051],[20.561386,41.411385],[20.50861,41.459717],[20.471664,41.497772],[20.469719,41.500832],[20.460552,41.515831],[20.458885,41.518883],[20.457775,41.522217],[20.458054,41.526382],[20.46611,41.55555],[20.533886,41.63472],[20.514164,41.727776],[20.516941,41.743889],[20.519997,41.75222],[20.533607,41.776939],[20.568951,41.874542],[20.589642,41.882187],[20.605553,41.869164],[20.615276,41.862495],[20.623333,41.858604],[20.631664,41.855827],[20.702499,41.85611],[20.713055,41.856667],[20.726387,41.860275],[20.733055,41.863884],[20.744164,41.874161],[20.773888,41.918884],[20.777222,41.925552],[20.778332,41.929718],[20.778889,41.938332],[20.778053,41.946663],[20.761665,41.974442],[20.759441,41.981384],[20.759163,41.993332],[20.769722,42.04277],[20.771942,42.050827],[20.785,42.074715],[20.792774,42.082497],[20.796108,42.085274],[20.807777,42.089996],[20.914997,42.119995],[21.104721,42.198883],[21.116943,42.202499],[21.12833,42.202499],[21.13361,42.201385],[21.141941,42.198051],[21.215275,42.149994],[21.221107,42.145271],[21.304996,42.147774],[21.30611,42.151382],[21.344444,42.193054],[21.348053,42.195549],[21.459999,42.262497],[21.466663,42.265831],[21.481941,42.267776],[21.61972,42.254166],[21.681389,42.239716],[21.70472,42.232773],[21.710831,42.232216],[21.721386,42.232773],[21.738331,42.237495],[21.778889,42.256943],[21.788609,42.263329],[21.793888,42.274162],[21.794441,42.27861],[21.799721,42.294167],[21.806664,42.303329],[21.841389,42.328331],[21.850277,42.330826],[21.855553,42.331108],[22.023609,42.31694],[22.061943,42.302216],[22.07222,42.300552],[22.083332,42.300552],[22.184719,42.313889],[22.195,42.315277],[22.198887,42.316383],[22.206108,42.32],[22.210831,42.326111],[22.212776,42.329437],[22.213886,42.333611],[22.216389,42.337219],[22.218609,42.339722],[22.221943,42.34166],[22.308609,42.360275],[22.324444,42.361382],[22.332775,42.35833],[22.335552,42.355827],[22.365276,42.323883],[22.407776,42.279442],[22.517776,42.150833],[22.521111,42.148605],[22.609444,42.103333],[22.685833,42.065277],[22.817497,42.027771],[22.828609,42.026939],[22.875832,41.941666],[22.878052,41.934715],[22.895832,41.885277],[22.899441,41.879166],[22.942497,41.807777],[22.961941,41.77861],[22.967499,41.773605],[22.972221,41.771942],[22.999722,41.770271],[23.00972,41.767494],[23.012775,41.765274],[23.014721,41.762215],[23.029999,41.734718],[23.032776,41.728333],[23.031387,41.720551],[23.02972,41.71666],[23.018608,41.699997],[23.011387,41.690826],[22.986942,41.665833],[22.956387,41.641663],[22.952499,41.634438],[22.951664,41.626106],[22.951664,41.59861],[22.959164,41.476387],[22.966663,41.374161],[22.964722,41.366104],[22.960831,41.358604],[22.955555,41.35305],[22.942497,41.344719],[22.935604,41.342125],[22.926388,41.343048],[22.813053,41.34861],[22.803886,41.346939],[22.781387,41.331665],[22.772221,41.32444],[22.763988,41.315315],[22.75972,41.309441],[22.759441,41.305275],[22.760555,41.301941],[22.763611,41.299721],[22.765274,41.296661],[22.761543,41.25174],[22.758053,41.227776],[22.74361,41.16333],[22.741943,41.159164],[22.735832,41.148888],[22.729164,41.144722],[22.720554,41.142776],[22.590275,41.119995],[22.585552,41.119438],[22.58083,41.119995],[22.484722,41.121384],[22.450275,41.121384],[22.434719,41.121384],[22.34333,41.134438],[22.304722,41.153328],[22.262497,41.170555],[22.256664,41.171387],[22.205555,41.16777],[21.980553,41.133606],[21.97361,41.129997],[21.916111,41.095276],[21.909164,41.07444],[21.910553,41.067215],[21.913887,41.056938],[21.913609,41.053329],[21.911942,41.049438],[21.792221,40.932777],[21.780277,40.928886],[21.599998,40.872772],[21.57972,40.872215],[21.573608,40.873055],[21.57,40.874992],[21.548332,40.891106],[21.536663,40.904716],[21.533607,40.907219],[21.52972,40.908882],[21.513611,40.910553],[21.41972,40.919167],[21.415554,40.91777],[21.405552,40.911659],[21.399719,40.906944],[21.380554,40.888054],[21.36861,40.878326],[21.356667,40.874443],[21.343052,40.871941],[21.31472,40.868607],[21.150833,40.857498],[21.121555,40.857216],[20.98349,40.855888],[20.984165,40.891663],[20.983887,40.893608],[20.982445,40.895248],[20.971943,40.906387],[20.968887,40.908607],[20.957222,40.914162],[20.944164,40.919167],[20.848331,40.935555],[20.840832,40.932495],[20.830276,40.92083],[20.82111,40.908882]]]}}]}';
    }
}
