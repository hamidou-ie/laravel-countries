<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GM_Gambia extends CountrySeeder
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
        $this->name = 'Gambia';

        // Set the country's official name
        $this->official_name = 'Republic of the Gambia';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GM';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GMB';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '270';

        // Set the international dialing code
        $this->international_phone = '220';

        // Define the languages spoken in the country
        $this->languages = ['en']; // English is the official language

        // Define the top-level domain(s)
        $this->tld = ['.gm'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '15 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '7 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '19%'; // As of recent estimates

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'National Cyber Security Authority';

        // List popular web technologies in the Gambia
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'GM';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '2413451';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Gambian dalasi',
            // Currency code
            'code' => 'GMD',
            // Currency symbol
            'symbol' => 'D',
            // Main unit
            'main_unit' => 'dalasi',
            // Subunit
            'sub_unit' => 'butut',
            // Sub_unit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200'],
            // Main coins
            'coins_main' => ['1'],
            // Subunit coins
            'coins_sub' => ['1', '5', '10', '25', '50 bututs'],
        ];

        // Set the population
        $this->population = 2416668; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 10689; // km²

        // Set the capital city
        $this->capital = 'Banjul';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Africa/Banjul',
                // Standard time offset
                'standard_time' => 'UTC+0', // Greenwich Mean Time (GMT)
                // No daylight saving time observed
            ],
        ];

        // Set the independence day
        $this->independence_day = '1965-02-18'; // Independence from the United Kingdom

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'African Union (AU)',
            'Economic Community of West African States (ECOWAS)',
            'Commonwealth of Nations',
            'Organisation of Islamic Cooperation (OIC)',
            'Non-Aligned Movement',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 1.9; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Islam',
        ];

        // Describe the form of government
        $this->government = 'Presidential republic';

        // Set the national sport
        $this->national_sport = 'Wrestling'; // Wrestling is traditional, but football is also popular

        // Define bordering countries
        $this->borders = [
            ['name' => 'Senegal', 'iso_alpha_2' => 'SN'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇲',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1F2',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1F2;',
            // CSS entities
            'css' => '\\1F1EC\\1F1F2',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127474;',
            // Direct UTF-8 string
            'utf8' => '🇬🇲',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDF2',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gm:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1F2;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#CE1126',
                // RGB color values
                'rgb' => '206,17,38',
                // CMYK color values
                'cmyk' => '0,92,82,19',
                // HSL color values
                'hsl' => '350,84%,44%',
                // HSV color values
                'hsv' => '350,92%,81%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#003F87',
                // RGB color values
                'rgb' => '0,63,135',
                // CMYK color values
                'cmyk' => '100,53,0,47',
                // HSL color values
                'hsl' => '212,100%,26%',
                // HSV color values
                'hsv' => '212,100%,53%',
                // Pantone color code
                'pantone' => '286 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Green',
                // Web color name
                'web_name' => 'green',
                // Hexadecimal color code
                'hex' => '#007A33',
                // RGB color values
                'rgb' => '0,122,51',
                // CMYK color values
                'cmyk' => '100,0,58,52',
                // HSL color values
                'hsl' => '149,100%,24%',
                // HSV color values
                'hsv' => '149,100%,48%',
                // Pantone color code
                'pantone' => '348 C',
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
                'hsl' => '0,0%,100%',
                // HSV color values
                'hsv' => '0,0%,100%',
                // Pantone color code
                'pantone' => 'White',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '13.4432',
            // Longitude in decimal degrees
            'longitude' => '-15.3101',
            // Degrees with decimal
            'dd' => '13.4432° N, 15.3101° W',
            // Degrees, minutes, seconds
            'dms' => '13°26\'35.52" N, 15°18\'36.36" W',
            // Degrees and decimal minutes
            'dm' => '13°26.592\' N, 15°18.606\' W',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "gm" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-16.73167, 13.44972],
            [-16.714725, 13.467777],
            [-16.707226, 13.474165],
            [-16.703056, 13.477221],
            [-16.686668, 13.488888],
            [-16.681946, 13.49],
            [-16.620834, 13.475555],
            [-16.609735, 13.472003],
            [-16.600002, 13.468887],
            [-16.591114, 13.463888],
            [-16.587502, 13.460554],
            [-16.581947, 13.451666],
            [-16.581112, 13.445555],
            [-16.584167, 13.434999],
            [-16.588058, 13.43222],
            [-16.59528, 13.431944],
            [-16.611389, 13.440832],
            [-16.619724, 13.434721],
            [-16.622223, 13.430555],
            [-16.622501, 13.425833],
            [-16.610558, 13.426943],
            [-16.60667, 13.402222],
            [-16.599724, 13.380554],
            [-16.576668, 13.324444],
            [-16.562778, 13.303055],
            [-16.558334, 13.297499],
            [-16.551113, 13.291111],
            [-16.546669, 13.28861],
            [-16.421669, 13.256943],
            [-16.379448, 13.275555],
            [-16.260281, 13.318609],
            [-16.253891, 13.319721],
            [-16.247501, 13.319443],
            [-16.236668, 13.316387],
            [-16.229168, 13.309721],
            [-16.223892, 13.301109],
            [-16.221668, 13.296389],
            [-16.22028, 13.283333],
            [-16.225559, 13.261665],
            [-16.224724, 13.255554],
            [-16.221668, 13.251389],
            [-16.200836, 13.251665],
            [-16.188614, 13.253611],
            [-16.178059, 13.2575],
            [-16.164722, 13.265833],
            [-16.154724, 13.276667],
            [-16.155003, 13.281944],
            [-16.156601, 13.281734],
            [-16.1875, 13.264721],
            [-16.192501, 13.262499],
            [-16.198059, 13.260832],
            [-16.203613, 13.261944],
            [-16.207226, 13.265276],
            [-16.223614, 13.323055],
            [-16.224724, 13.329166],
            [-16.224445, 13.342499],
            [-16.222778, 13.353611],
            [-16.214725, 13.372499],
            [-16.204445, 13.383333],
            [-16.162224, 13.425278],
            [-16.155281, 13.425554],
            [-16.14389, 13.423332],
            [-16.129448, 13.416943],
            [-16.118057, 13.414721],
            [-16.089447, 13.409166],
            [-16.083614, 13.408054],
            [-16.052223, 13.405277],
            [-16.04528, 13.405554],
            [-15.773335, 13.433054],
            [-15.636667, 13.452776],
            [-15.560278, 13.502222],
            [-15.55139, 13.5075],
            [-15.544168, 13.507776],
            [-15.538612, 13.506666],
            [-15.490002, 13.484999],
            [-15.406946, 13.449165],
            [-15.396667, 13.445555],
            [-15.368057, 13.439722],
            [-15.349724, 13.437777],
            [-15.328335, 13.43861],
            [-15.317223, 13.441944],
            [-15.307501, 13.446388],
            [-15.30139, 13.454166],
            [-15.296946, 13.46361],
            [-15.293335, 13.480276],
            [-15.295834, 13.491665],
            [-15.297176, 13.491055],
            [-15.30028, 13.478611],
            [-15.303057, 13.474165],
            [-15.309168, 13.466389],
            [-15.320835, 13.456944],
            [-15.336668, 13.451387],
            [-15.355835, 13.449999],
            [-15.362223, 13.450554],
            [-15.397501, 13.46361],
            [-15.484385, 13.501389],
            [-15.541389, 13.527222],
            [-15.549446, 13.530277],
            [-15.556667, 13.529999],
            [-15.658335, 13.504166],
            [-15.722778, 13.47611],
            [-15.811945, 13.456388],
            [-16.091114, 13.43111],
            [-16.103336, 13.432499],
            [-16.111946, 13.437777],
            [-16.119446, 13.444443],
            [-16.131947, 13.452776],
            [-16.136669, 13.454443],
            [-16.14389, 13.454166],
            [-16.149445, 13.452776],
            [-16.192501, 13.431389],
            [-16.226948, 13.409166],
            [-16.229446, 13.404999],
            [-16.23278, 13.394444],
            [-16.235001, 13.390276],
            [-16.264446, 13.363333],
            [-16.272781, 13.357498],
            [-16.331947, 13.338333],
            [-16.394726, 13.330555],
            [-16.406948, 13.332222],
            [-16.417778, 13.334999],
            [-16.479446, 13.355833],
            [-16.513336, 13.36861],
            [-16.50639, 13.382221],
            [-16.502781, 13.391943],
            [-16.500278, 13.403055],
            [-16.501667, 13.416111],
            [-16.551945, 13.560833],
            [-16.555836, 13.570833],
            [-16.56567, 13.589998],
            [-16.170834, 13.592499],
            [-16.088604, 13.592222],
            [-15.929724, 13.592777],
            [-15.645834, 13.59111],
            [-15.574722, 13.590555],
            [-15.48889, 13.589443],
            [-15.487501, 13.592222],
            [-15.484085, 13.640791],
            [-15.477222, 13.661665],
            [-15.47139, 13.676388],
            [-15.458612, 13.704443],
            [-15.452501, 13.712221],
            [-15.435556, 13.730276],
            [-15.420279, 13.743332],
            [-15.364445, 13.781387],
            [-15.345001, 13.790554],
            [-15.328335, 13.795277],
            [-15.314724, 13.795277],
            [-15.30389, 13.792221],
            [-15.29389, 13.788332],
            [-15.289446, 13.785831],
            [-15.277779, 13.776667],
            [-15.27389, 13.773333],
            [-15.267223, 13.766109],
            [-15.25139, 13.74472],
            [-15.216667, 13.763887],
            [-15.164446, 13.794998],
            [-15.070278, 13.826387],
            [-14.920279, 13.804165],
            [-14.903057, 13.800554],
            [-14.883057, 13.793055],
            [-14.860279, 13.780832],
            [-14.856335, 13.778612],
            [-14.836113, 13.763332],
            [-14.821667, 13.75],
            [-14.816113, 13.74111],
            [-14.804724, 13.717499],
            [-14.799446, 13.701111],
            [-14.793612, 13.67861],
            [-14.791945, 13.653332],
            [-14.718613, 13.611944],
            [-14.714445, 13.614721],
            [-14.700834, 13.629166],
            [-14.693335, 13.635555],
            [-14.668335, 13.653332],
            [-14.64889, 13.662222],
            [-14.643333, 13.663887],
            [-14.631945, 13.666943],
            [-14.619446, 13.668888],
            [-14.59889, 13.670277],
            [-14.570278, 13.664444],
            [-14.554445, 13.659721],
            [-14.540001, 13.653332],
            [-14.531389, 13.648054],
            [-14.511667, 13.634443],
            [-14.497501, 13.621666],
            [-14.485279, 13.598888],
            [-14.48139, 13.58861],
            [-14.477779, 13.570833],
            [-14.472778, 13.534443],
            [-14.44639, 13.526388],
            [-14.435001, 13.509722],
            [-14.424168, 13.499722],
            [-14.398335, 13.483332],
            [-14.376667, 13.470276],
            [-14.363056, 13.463333],
            [-14.337778, 13.453888],
            [-14.331945, 13.454166],
            [-14.240835, 13.478333],
            [-14.233334, 13.484722],
            [-14.228056, 13.493055],
            [-14.217779, 13.503887],
            [-14.205278, 13.512499],
            [-14.191389, 13.519999],
            [-14.176111, 13.52611],
            [-14.087778, 13.558887],
            [-14.076946, 13.562222],
            [-13.987501, 13.582499],
            [-13.973333, 13.583055],
            [-13.924446, 13.569721],
            [-13.913889, 13.566666],
            [-13.900557, 13.558611],
            [-13.886112, 13.545555],
            [-13.883057, 13.541388],
            [-13.878334, 13.531944],
            [-13.8685, 13.508034],
            [-13.85, 13.499722],
            [-13.841112, 13.494444],
            [-13.827501, 13.480555],
            [-13.806112, 13.447777],
            [-13.80139, 13.43861],
            [-13.798613, 13.419722],
            [-13.798613, 13.406387],
            [-13.80139, 13.389166],
            [-13.805557, 13.379721],
            [-13.820557, 13.359722],
            [-13.827501, 13.352499],
            [-13.85, 13.333055],
            [-13.858334, 13.327776],
            [-13.867224, 13.322498],
            [-13.878889, 13.319166],
            [-13.992779, 13.3025],
            [-14.048889, 13.294443],
            [-14.095556, 13.285],
            [-14.126112, 13.263887],
            [-14.13389, 13.257221],
            [-14.151669, 13.246387],
            [-14.182501, 13.234444],
            [-14.194168, 13.231667],
            [-14.214724, 13.230555],
            [-14.351112, 13.237778],
            [-14.38389, 13.246387],
            [-14.393612, 13.25111],
            [-14.521112, 13.313889],
            [-14.547777, 13.335939],
            [-14.647779, 13.343887],
            [-14.673056, 13.347221],
            [-14.684168, 13.349722],
            [-14.695002, 13.352499],
            [-14.714724, 13.360554],
            [-14.731945, 13.371944],
            [-14.73889, 13.379166],
            [-14.75528, 13.404444],
            [-14.765001, 13.423054],
            [-14.775835, 13.425833],
            [-14.833334, 13.435276],
            [-14.92528, 13.460554],
            [-14.954723, 13.471943],
            [-14.972502, 13.482498],
            [-14.989723, 13.493055],
            [-15.041113, 13.525],
            [-15.049446, 13.531111],
            [-15.078611, 13.557777],
            [-15.085556, 13.564999],
            [-15.111668, 13.595833],
            [-15.134724, 13.59111],
            [-15.145834, 13.587776],
            [-15.155556, 13.583055],
            [-15.175058, 13.552801],
            [-15.200556, 13.531111],
            [-15.202501, 13.519165],
            [-15.204168, 13.494444],
            [-15.204168, 13.48111],
            [-15.204723, 13.461943],
            [-15.208889, 13.439165],
            [-15.212778, 13.429165],
            [-15.217779, 13.420555],
            [-15.230835, 13.405832],
            [-15.247223, 13.393888],
            [-15.264446, 13.383055],
            [-15.285002, 13.374443],
            [-15.295834, 13.371111],
            [-15.334167, 13.365833],
            [-15.360279, 13.366388],
            [-15.418056, 13.375277],
            [-15.803612, 13.347776],
            [-15.809446, 13.33111],
            [-15.809446, 13.245277],
            [-15.809723, 13.159721],
            [-15.862501, 13.159721],
            [-15.895559, 13.160555],
            [-15.99889, 13.163055],
            [-16.618336, 13.164999],
            [-16.689724, 13.164444],
            [-16.700558, 13.16111],
            [-16.705559, 13.151667],
            [-16.750874, 13.059977],
            [-16.784447, 13.140833],
            [-16.818611, 13.272499],
            [-16.821392, 13.284166],
            [-16.821667, 13.323332],
            [-16.819168, 13.368889],
            [-16.815063, 13.372408],
            [-16.801945, 13.380278],
            [-16.787224, 13.386944],
            [-16.78167, 13.388611],
            [-16.773613, 13.394444],
            [-16.746391, 13.416666],
            [-16.743057, 13.420277],
            [-16.73167, 13.44972]
          ]
        ]
      }
    }
  ]
}
';
    }
}
