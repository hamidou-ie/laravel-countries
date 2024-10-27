<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class TG_Togo extends CountrySeeder
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
    public ?string $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'Togo';

        // Set the country's official name
        $this->official_name = 'Togolese Republic';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'TG';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'TGO';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '768';

        // Set the international dialing code
        $this->international_phone = '228';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.tg'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '8 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '5 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '20%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Agence Nationale de la Cyber-Sécurité (ANCS)';

        // List popular web technologies in Togo
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'TG';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2363686';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'West African CFA franc',
            // Currency code
            'code' => 'XOF',
            // Currency symbol
            'symbol' => 'CFA',
            // Main unit
            'main_unit' => 'franc',
            // Subunit
            'sub_unit' => 'centime',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['500', '1000', '2000', '5000', '10000'],
            // Main coins
            'coins_main' => ['1', '2', '5', '10', '25', '50'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50'],
        ];

        // Set the population
        $this->population = 8278724; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 56785; // km²

        // Set the capital city
        $this->capital = 'Lomé';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/Lome',
                // Standard time offset
                'standard_time' => 'UTC+0',
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1960-04-27'; // Independence from France

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Economic Community of West African States (ECOWAS)',
            'Organisation Internationale de la Francophonie',
            'World Trade Organization (WTO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 7.8; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity',
            'Islam',
            'Traditional African Religions',
        ];

        // Describe the form of government
        $this->government = 'Presidential republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport in Togo

        // Define bordering countries
        $this->borders = [
            ['name' => 'Ghana', 'iso_alpha_2' => 'GH'],
            ['name' => 'Benin', 'iso_alpha_2' => 'BJ'],
            ['name' => 'Burkina Faso', 'iso_alpha_2' => 'BF'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇹🇬',
            // Unicode code points
            'uCode' => 'U+1F1F9 U+1F1EC',
            // HTML entities
            'html' => '&#x1F1F9;&#x1F1EC;',
            // CSS entities
            'css' => '\\1F1F9\\1F1EC',
            // Decimal Unicode entities
            'decimal' => '&#127481;&#127468;',
            // Direct UTF-8 string
            'utf8' => '🇹🇬',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF9\uD83C\uDDEC',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-tg:',
            // Hexadecimal entity
            'hex' => '&#x1F1F9;&#x1F1EC;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#008751',
                // RGB color values
                'rgb' => '0,135,81',
                // CMYK color values
                'cmyk' => '100,0,40,47',
                // HSL color values
                'hsl' => '149°,100%,26%',
                // HSV color values
                'hsv' => '149°,100%,53%',
                // Pantone color code
                'pantone' => '348 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Yellow',
                // Web color name
                'web_name' => 'yellow',
                // Hexadecimal color code
                'hex' => '#FFD100',
                // RGB color values
                'rgb' => '255,209,0',
                // CMYK color values
                'cmyk' => '0,18,100,0',
                // HSL color values
                'hsl' => '48°,100%,50%',
                // HSV color values
                'hsv' => '48°,100%,100%',
                // Pantone color code
                'pantone' => '109 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#D62718',
                // RGB color values
                'rgb' => '214,39,24',
                // CMYK color values
                'cmyk' => '0,82,89,16',
                // HSL color values
                'hsl' => '5°,79%,47%',
                // HSV color values
                'hsv' => '5°,89%,84%',
                // Pantone color code
                'pantone' => '1795 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'White',
                // Web color name
                'web_name' => 'white',
                // Hexadecimal color code
                'hex' => '#FFFFFF',
                // RGB color values
                'rgb' => '255,255,255',
                // CMYK color values
                'cmyk' => '0,0,0,0',
                // HSL color values
                'hsl' => '0°,0%,100%',
                // HSV color values
                'hsv' => '0°,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '8.6195',
            // Longitude in decimal degrees
            'longitude' => '0.8248',
            // Degrees with decimal
            'dd' => '8.6195° N, 0.8248° E',
            // Degrees, minutes, seconds
            'dms' => '8°37\'10.20" N, 0°49\'29.28" E',
            // Degrees and decimal minutes
            'dm' => '8°37.17\' N, 0°49.488\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tg"},"geometry":{"type":"Polygon","coordinates":[[[1.398542,9.429901],[1.398611,9.397221],[1.400278,9.378611],[1.406944,9.344721],[1.416667,9.32111],[1.419444,9.316944],[1.431625,9.301245],[1.452455,9.280415],[1.493611,9.228333],[1.510556,9.210833],[1.526389,9.19861],[1.538611,9.189999],[1.543333,9.187777],[1.551666,9.18222],[1.567222,9.169998],[1.57,9.165833],[1.601944,9.10861],[1.606389,9.099722],[1.607778,9.094166],[1.617778,9.049721],[1.62,9.033333],[1.620555,9.026943],[1.626667,8.846943],[1.626111,8.726665],[1.625396,8.587284],[1.624166,8.425278],[1.617056,8.367107],[1.627222,8.362778],[1.634722,8.357777],[1.638055,7.99861],[1.639444,7.761944],[1.639167,7.757777],[1.641389,7.636389],[1.6425,7.62],[1.649444,7.553333],[1.651944,7.542222],[1.655421,7.52977],[1.650555,7.516944],[1.649722,7.510833],[1.644444,7.443055],[1.643744,7.409674],[1.645555,7.333888],[1.6425,6.995555],[1.558396,6.997183],[1.556389,6.997222],[1.552222,6.996666],[1.548523,6.995179],[1.560833,6.953333],[1.563889,6.943055],[1.577024,6.909273],[1.598055,6.901667],[1.603333,6.899444],[1.606111,6.895277],[1.609167,6.880833],[1.6075,6.796666],[1.591666,6.717777],[1.588611,6.713611],[1.575278,6.679722],[1.614444,6.600833],[1.619167,6.591666],[1.6475,6.573055],[1.655421,6.570669],[1.658056,6.575],[1.661389,6.578333],[1.666389,6.578888],[1.670278,6.575833],[1.693055,6.549166],[1.749166,6.456666],[1.770555,6.417222],[1.7725,6.412499],[1.795278,6.308332],[1.799327,6.281057],[1.797799,6.280254],[1.7425,6.269722],[1.700278,6.261944],[1.680833,6.259722],[1.675567,6.258356],[1.6525,6.250278],[1.628984,6.23805],[1.630555,6.232222],[1.635404,6.218721],[1.560555,6.206111],[1.476944,6.188611],[1.460833,6.184166],[1.408889,6.167777],[1.403552,6.165345],[1.301666,6.14111],[1.291111,6.137777],[1.281389,6.134166],[1.198891,6.100546],[1.202778,6.117777],[1.201111,6.16],[1.115,6.160832],[1.099975,6.160341],[1.062222,6.219444],[1.002778,6.322778],[1.000278,6.327777],[0.904722,6.329444],[0.791667,6.411944],[0.785,6.419167],[0.758889,6.447778],[0.728333,6.499166],[0.726389,6.503888],[0.723333,6.518332],[0.722222,6.530555],[0.724675,6.535642],[0.741389,6.552777],[0.746389,6.561666],[0.744722,6.573333],[0.74,6.582222],[0.736667,6.585833],[0.731111,6.587222],[0.724167,6.5875],[0.713055,6.584999],[0.7,6.584444],[0.690555,6.588888],[0.686389,6.591666],[0.661389,6.608611],[0.658056,6.612222],[0.644167,6.639166],[0.643055,6.644722],[0.643055,6.651667],[0.647222,6.676666],[0.650555,6.701388],[0.650833,6.714999],[0.648333,6.72611],[0.646389,6.730833],[0.640278,6.73861],[0.571111,6.813333],[0.566944,6.816111],[0.525,6.947778],[0.583333,6.991111],[0.588889,6.992222],[0.5925,6.995555],[0.608055,7.014444],[0.609444,7.02],[0.64,7.205555],[0.652222,7.282777],[0.652951,7.369641],[0.650555,7.390277],[0.646667,7.4],[0.641944,7.402222],[0.631389,7.398889],[0.606944,7.389166],[0.589722,7.38611],[0.577222,7.384999],[0.570278,7.385278],[0.564722,7.386666],[0.560833,7.389722],[0.543056,7.407222],[0.539722,7.410555],[0.531667,7.423055],[0.510556,7.460555],[0.512778,7.531111],[0.514167,7.557777],[0.519444,7.580277],[0.523056,7.590555],[0.587222,7.694166],[0.592778,7.702222],[0.596389,7.705555],[0.622926,7.89673],[0.598333,8.085554],[0.596667,8.103888],[0.611667,8.21611],[0.638333,8.237499],[0.664444,8.252777],[0.669444,8.254721],[0.704444,8.273054],[0.726944,8.285],[0.729167,8.289721],[0.729444,8.296389],[0.728889,8.309721],[0.727222,8.321388],[0.725278,8.326111],[0.698889,8.388611],[0.652778,8.469166],[0.646944,8.476944],[0.633889,8.491665],[0.630556,8.495277],[0.538333,8.555555],[0.476667,8.589998],[0.4725,8.592777],[0.465556,8.599722],[0.414722,8.68611],[0.41,8.695],[0.389444,8.736111],[0.3875,8.740833],[0.382735,8.760756],[0.4825,8.791666],[0.4875,8.79361],[0.490833,8.796944],[0.493889,8.801109],[0.511171,8.842487],[0.512778,8.844444],[0.520833,8.885555],[0.520278,8.891943],[0.514444,8.918888],[0.5125,8.920832],[0.448056,9.019999],[0.448333,9.032221],[0.449167,9.038332],[0.455278,9.060276],[0.501111,9.157499],[0.519444,9.188055],[0.5275,9.206388],[0.551944,9.361111],[0.553611,9.37361],[0.553889,9.394165],[0.550833,9.411388],[0.548889,9.414999],[0.506111,9.468887],[0.502778,9.472221],[0.498056,9.474443],[0.462778,9.488333],[0.440556,9.494165],[0.421944,9.496666],[0.414722,9.496944],[0.364444,9.489721],[0.358889,9.488609],[0.350278,9.483055],[0.3475,9.479166],[0.340556,9.451111],[0.338333,9.446388],[0.335,9.442778],[0.331389,9.439444],[0.287778,9.421389],[0.276389,9.41861],[0.256944,9.420555],[0.240278,9.424999],[0.230833,9.429443],[0.227784,9.432596],[0.2175,9.457222],[0.216944,9.463333],[0.221944,9.540833],[0.224444,9.559444],[0.253056,9.65361],[0.2575,9.663332],[0.263333,9.671389],[0.324444,9.76222],[0.352778,10.025],[0.353611,10.031111],[0.359167,10.032499],[0.400229,10.030489],[0.4,10.054998],[0.398333,10.066666],[0.395555,10.070833],[0.388889,10.077776],[0.378333,10.081665],[0.366667,10.083887],[0.3575,10.088888],[0.352778,10.098055],[0.349722,10.115276],[0.357778,10.196943],[0.364722,10.248888],[0.368333,10.259443],[0.303333,10.389444],[0.289722,10.410276],[0.286389,10.413887],[0.282222,10.416666],[0.228889,10.409443],[0.120599,10.521669],[0.045833,10.586111],[0.041667,10.588888],[0.031944,10.593332],[-0.002222,10.608332],[-0.055278,10.625832],[-0.06,10.628054],[-0.068056,10.633888],[-0.071667,10.63722],[-0.077222,10.645555],[-0.080278,10.656111],[-0.083611,10.69861],[-0.082058,10.702602],[-0.059444,10.782221],[-0.020278,10.85861],[0.031111,10.984165],[0.033333,10.995832],[0.034722,11.021387],[0.035556,11.062498],[0.034444,11.074999],[0.029722,11.084166],[0.025556,11.086943],[0,11.096848],[-0.010278,11.100832],[-0.021111,11.103611],[-0.034722,11.104721],[-0.041111,11.104166],[-0.046667,11.102777],[-0.051111,11.100277],[-0.070833,11.092222],[-0.083611,11.09111],[-0.096667,11.092222],[-0.101667,11.094166],[-0.138333,11.113609],[-0.144444,11.121387],[-0.148333,11.131109],[-0.149762,11.13854],[-0.142222,11.137777],[-0.089722,11.127222],[0.050278,11.098888],[0.19,11.070555],[0.218889,11.064165],[0.416944,11.024443],[0.504167,11.006666],[0.506944,11.002499],[0.516389,10.979443],[0.513333,10.971388],[0.504167,10.936943],[0.630833,10.983889],[0.666111,10.996111],[0.724444,10.996944],[0.811944,10.996944],[0.91797,10.996399],[0.890556,10.91111],[0.893611,10.866943],[0.879444,10.799721],[0.809722,10.727777],[0.804444,10.718887],[0.802186,10.712442],[0.800555,10.701666],[0.800278,10.68111],[0.803333,10.643888],[0.804722,10.638332],[0.8075,10.607222],[0.806944,10.579721],[0.805,10.567499],[0.800555,10.551109],[0.795555,10.542221],[0.789722,10.534166],[0.785278,10.524443],[0.776667,10.376665],[0.999373,10.22007],[1.066944,10.174444],[1.172404,10.108603],[1.187222,10.099998],[1.307778,10.025276],[1.355,9.995277],[1.358889,9.914721],[1.37,9.636389],[1.368333,9.596666],[1.3375,9.5425],[1.361111,9.485554],[1.364254,9.481348],[1.385,9.494444],[1.388611,9.492222],[1.393055,9.479166],[1.398542,9.429901]]]}}]}';
    }
}
