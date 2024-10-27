<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Database\Seeders\Builder;
use Lwwcas\LaravelCountries\Abstract\CountrySeeder;

class GF_FrenchGuiana extends CountrySeeder
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
    public ?string $region = 'americas';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Set the country's common name
        $this->name = 'French Guiana';

        // Set the country's official name
        $this->official_name = 'French Guiana';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'GF';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'GUF';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '254';

        // Set the international dialing code
        $this->international_phone = '594';

        // Define the languages spoken in the country
        $this->languages = ['fr']; // French is the official language

        // Define the top-level domain(s)
        $this->tld = ['.gf'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '30 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '20 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '60%'; // Internet access in French Guiana

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'None'; // No dedicated cybersecurity agency

        // List popular web technologies in French Guiana
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'WordPress'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'FG';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3381670';

        // Define the currency information
        $this->currency = [
            // Currency name
            'name' => 'Euro',
            // Currency code
            'code' => 'EUR',
            // Currency symbol
            'symbol' => '€',
            // Main unit
            'main_unit' => 'euro',
            // Subunit
            'sub_unit' => 'cent',
            // Subunit to main unit conversion
            'sub_unit_to_unit' => 100,
            // Banknotes in circulation
            'banknotes' => ['5', '10', '20', '50', '100', '200', '500'],
            // Main coins
            'coins_main' => ['1', '2'],
            // Subunit coins
            'coins_sub' => ['1', '2', '5', '10', '20', '50 cents'],
        ];

        // Set the population
        $this->population = 298682; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 83534; // km²

        // Set the capital city
        $this->capital = 'Cayenne';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'America/Cayenne',
                // Standard time offset
                'standard_time' => 'UTC-3',
            ],
        ];

        // Set the independence day
        $this->independence_day = null; // French Guiana is an overseas department of France

        // List international organizations the country is part of
        $this->international_organizations = [
            'European Union (EU)',
            'Overseas Countries and Territories Association (OCTA)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 4.9; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Roman Catholicism)',
        ];

        // Describe the form of government
        $this->government = 'Overseas department of France';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is the most popular sport

        // Define bordering countries
        $this->borders = [
            ['name' => 'Brazil', 'iso_alpha_2' => 'BR'],
            ['name' => 'Suriname', 'iso_alpha_2' => 'SR'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇬🇫',
            // Unicode code points
            'uCode' => 'U+1F1EC U+1F1EB',
            // HTML entities
            'html' => '&#x1F1EC;&#x1F1EB;',
            // CSS entities
            'css' => '\\1F1EC\\1F1EB',
            // Decimal Unicode entities
            'decimal' => '&#127468;&#127467;',
            // Direct UTF-8 string
            'utf8' => '🇬🇫',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDEC\uD83C\uDDEB',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-gf:',
            // Hexadecimal entity
            'hex' => '&#x1F1EC;&#x1F1EB;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Blue',
                // Web color name
                'web_name' => 'blue',
                // Hexadecimal color code
                'hex' => '#002395',
                // RGB color values
                'rgb' => '0,35,149',
                // CMYK color values
                'cmyk' => '100,77,0,42',
                // HSL color values
                'hsl' => '228,100%,29%',
                // HSV color values
                'hsv' => '228,100%,58%',
                // Pantone color code
                'pantone' => 'Reflex Blue C',
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
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#ED2939',
                // RGB color values
                'rgb' => '237,41,57',
                // CMYK color values
                'cmyk' => '0,83,76,7',
                // HSL color values
                'hsl' => '355,84%,55%',
                // HSV color values
                'hsv' => '355,83%,93%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '3.9339',
            // Longitude in decimal degrees
            'longitude' => '-53.1258',
            // Degrees with decimal
            'dd' => '3.9339° N, 53.1258° W',
            // Degrees, minutes, seconds
            'dms' => '3°56\'2.04" N, 53°7\'32.88" W',
            // Degrees and decimal minutes
            'dm' => '3°56.034\' N, 53°7.548\' W',
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
      "properties": { "cca2": "gf" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [-53.494339, 5.572342],
            [-53.483612, 5.568055],
            [-53.40834, 5.548888],
            [-53.30278, 5.523055],
            [-53.186394, 5.499166],
            [-53.08445, 5.483333],
            [-52.976112, 5.474166],
            [-52.970284, 5.471944],
            [-52.937782, 5.458333],
            [-52.893059, 5.425278],
            [-52.880005, 5.415277],
            [-52.799728, 5.341944],
            [-52.787506, 5.321944],
            [-52.736389, 5.260555],
            [-52.616112, 5.133888],
            [-52.606117, 5.124999],
            [-52.575562, 5.1025],
            [-52.559448, 5.090833],
            [-52.422226, 4.992499],
            [-52.333618, 4.948889],
            [-52.327782, 4.948889],
            [-52.30056, 4.943333],
            [-52.295006, 4.941667],
            [-52.285278, 4.937499],
            [-52.278061, 4.93111],
            [-52.064445, 4.733889],
            [-52.02639, 4.689444],
            [-52.020561, 4.681944],
            [-51.998894, 4.647778],
            [-51.995003, 4.638333],
            [-51.985283, 4.61361],
            [-51.978058, 4.586944],
            [-51.957504, 4.498055],
            [-51.955002, 4.486666],
            [-51.950836, 4.456666],
            [-51.950836, 4.423888],
            [-51.952507, 4.412777],
            [-51.956673, 4.403333],
            [-51.962784, 4.395555],
            [-51.969727, 4.388888],
            [-51.994446, 4.372222],
            [-52.008057, 4.365555],
            [-52.021118, 4.358333],
            [-52.036949, 4.346389],
            [-52.041389, 4.337777],
            [-52.040001, 4.331388],
            [-51.994446, 4.347221],
            [-51.989449, 4.349166],
            [-51.958618, 4.366388],
            [-51.950836, 4.372222],
            [-51.936668, 4.385555],
            [-51.929169, 4.398333],
            [-51.927223, 4.403333],
            [-51.923615, 4.420278],
            [-51.923615, 4.433888],
            [-51.926392, 4.465278],
            [-51.928612, 4.477221],
            [-51.93, 4.496388],
            [-51.931396, 4.529166],
            [-51.931396, 4.57],
            [-51.926392, 4.612778],
            [-51.922501, 4.629167],
            [-51.918892, 4.639722],
            [-51.912224, 4.653333],
            [-51.905281, 4.660277],
            [-51.89473, 4.663333],
            [-51.875282, 4.663055],
            [-51.862785, 4.661666],
            [-51.85778, 4.659166],
            [-51.850563, 4.653333],
            [-51.794449, 4.605556],
            [-51.76889, 4.544167],
            [-51.767227, 4.53861],
            [-51.763062, 4.523611],
            [-51.759171, 4.500278],
            [-51.756393, 4.477221],
            [-51.752502, 4.455277],
            [-51.744171, 4.421111],
            [-51.716667, 4.320555],
            [-51.711113, 4.305277],
            [-51.705284, 4.291111],
            [-51.699722, 4.283055],
            [-51.674446, 4.253333],
            [-51.657784, 4.228889],
            [-51.653618, 4.221944],
            [-51.64917, 4.206388],
            [-51.647781, 4.194166],
            [-51.648056, 4.167222],
            [-51.652229, 4.137221],
            [-51.659172, 4.089444],
            [-51.661392, 4.078055],
            [-51.664452, 4.067499],
            [-51.674446, 4.049444],
            [-51.684067, 4.034163],
            [-51.70417, 4.026111],
            [-51.72834, 4.015833],
            [-51.746117, 4.006389],
            [-51.761673, 3.994722],
            [-51.768616, 3.987222],
            [-51.775002, 3.979722],
            [-51.783615, 3.961111],
            [-51.793892, 3.916667],
            [-51.807388, 3.883402],
            [-51.8125, 3.875],
            [-51.822044, 3.865488],
            [-51.906395, 3.790833],
            [-51.923615, 3.780833],
            [-51.930557, 3.773056],
            [-51.97834, 3.7075],
            [-51.982506, 3.698055],
            [-51.985001, 3.686944],
            [-51.990005, 3.6575],
            [-51.992783, 3.633055],
            [-51.998894, 3.618611],
            [-52.100281, 3.448889],
            [-52.165283, 3.342222],
            [-52.220284, 3.260278],
            [-52.226395, 3.252778],
            [-52.240005, 3.238889],
            [-52.244171, 3.238889],
            [-52.248337, 3.241666],
            [-52.251114, 3.245833],
            [-52.255005, 3.248611],
            [-52.260559, 3.248611],
            [-52.270279, 3.244444],
            [-52.278336, 3.238889],
            [-52.285278, 3.232222],
            [-52.34494, 3.157403],
            [-52.353058, 3.131667],
            [-52.345558, 3.091111],
            [-52.34417, 3.085833],
            [-52.351952, 3.04],
            [-52.375839, 2.981111],
            [-52.382507, 2.967222],
            [-52.408615, 2.922222],
            [-52.464172, 2.813333],
            [-52.51973, 2.697778],
            [-52.553894, 2.623611],
            [-52.551674, 2.618889],
            [-52.540283, 2.589444],
            [-52.539452, 2.583333],
            [-52.540283, 2.570278],
            [-52.544174, 2.560833],
            [-52.560005, 2.528611],
            [-52.567505, 2.515555],
            [-52.594452, 2.473889],
            [-52.671951, 2.377222],
            [-52.675285, 2.373888],
            [-52.683334, 2.368333],
            [-52.789452, 2.303333],
            [-52.882782, 2.224722],
            [-52.885002, 2.219722],
            [-52.89389, 2.2075],
            [-52.897224, 2.204166],
            [-52.909729, 2.195833],
            [-52.948059, 2.178055],
            [-52.958336, 2.174722],
            [-52.964447, 2.173889],
            [-52.987785, 2.175278],
            [-53.000839, 2.176111],
            [-53.05278, 2.185555],
            [-53.056946, 2.188333],
            [-53.063614, 2.195278],
            [-53.075562, 2.210833],
            [-53.08223, 2.217778],
            [-53.092506, 2.221111],
            [-53.105003, 2.2225],
            [-53.118614, 2.2225],
            [-53.196114, 2.213611],
            [-53.239174, 2.208333],
            [-53.226112, 2.264444],
            [-53.296539, 2.319005],
            [-53.315834, 2.345],
            [-53.31945, 2.348611],
            [-53.328339, 2.353333],
            [-53.33445, 2.354167],
            [-53.339729, 2.352777],
            [-53.343338, 2.348611],
            [-53.344727, 2.343055],
            [-53.345558, 2.33],
            [-53.346672, 2.324722],
            [-53.348892, 2.319722],
            [-53.352226, 2.316389],
            [-53.458618, 2.2575],
            [-53.523056, 2.249166],
            [-53.529724, 2.249166],
            [-53.535278, 2.250556],
            [-53.701668, 2.310277],
            [-53.723618, 2.335],
            [-53.72084, 2.338889],
            [-53.719452, 2.344444],
            [-53.722229, 2.348611],
            [-53.737228, 2.367777],
            [-53.74028, 2.371666],
            [-53.745003, 2.373888],
            [-53.761948, 2.370555],
            [-53.772224, 2.366944],
            [-53.781395, 2.362222],
            [-53.796394, 2.354167],
            [-53.802505, 2.350555],
            [-53.910278, 2.277222],
            [-53.928062, 2.252778],
            [-53.927223, 2.239722],
            [-53.93, 2.228611],
            [-53.932503, 2.224722],
            [-53.940834, 2.219166],
            [-54.099724, 2.115],
            [-54.104729, 2.113055],
            [-54.11084, 2.112222],
            [-54.123337, 2.113611],
            [-54.31778, 2.160833],
            [-54.323334, 2.162222],
            [-54.458893, 2.208889],
            [-54.46389, 2.210833],
            [-54.476952, 2.218333],
            [-54.518616, 2.2575],
            [-54.531113, 2.283611],
            [-54.523338, 2.295],
            [-54.538338, 2.313056],
            [-54.541946, 2.316389],
            [-54.546669, 2.318333],
            [-54.573891, 2.325277],
            [-54.590561, 2.329444],
            [-54.596672, 2.33],
            [-54.603783, 2.329195],
            [-54.499168, 2.365],
            [-54.420563, 2.434722],
            [-54.374725, 2.484722],
            [-54.36834, 2.492222],
            [-54.360283, 2.504722],
            [-54.351952, 2.523889],
            [-54.323891, 2.590278],
            [-54.319725, 2.606667],
            [-54.317223, 2.624444],
            [-54.313057, 2.633889],
            [-54.261116, 2.712778],
            [-54.252785, 2.725],
            [-54.226669, 2.7525],
            [-54.21917, 2.758611],
            [-54.208618, 2.768888],
            [-54.200562, 2.781111],
            [-54.196671, 2.790833],
            [-54.193893, 2.801666],
            [-54.160835, 2.950833],
            [-54.160835, 2.956388],
            [-54.176117, 3.043889],
            [-54.195747, 3.096204],
            [-54.208618, 3.121944],
            [-54.208336, 3.126667],
            [-54.206116, 3.145278],
            [-54.189728, 3.190555],
            [-54.184723, 3.199166],
            [-54.125282, 3.270555],
            [-54.112228, 3.285],
            [-54.094452, 3.295],
            [-54.071114, 3.312778],
            [-54.001114, 3.448333],
            [-53.984169, 3.593889],
            [-53.98806, 3.609167],
            [-53.99778, 3.626944],
            [-54.123894, 3.785555],
            [-54.131393, 3.791667],
            [-54.140839, 3.796389],
            [-54.151947, 3.799166],
            [-54.176392, 3.801944],
            [-54.190559, 3.808611],
            [-54.193893, 3.812222],
            [-54.290283, 3.933888],
            [-54.358063, 4.030277],
            [-54.361671, 4.040555],
            [-54.362228, 4.046666],
            [-54.361115, 4.052221],
            [-54.365005, 4.16361],
            [-54.39389, 4.237222],
            [-54.431396, 4.369166],
            [-54.440239, 4.410649],
            [-54.452225, 4.509166],
            [-54.451393, 4.515555],
            [-54.448059, 4.525555],
            [-54.437782, 4.535832],
            [-54.429451, 4.548333],
            [-54.422501, 4.561944],
            [-54.421112, 4.567222],
            [-54.420006, 4.579721],
            [-54.420006, 4.593333],
            [-54.424171, 4.609722],
            [-54.439728, 4.669167],
            [-54.471947, 4.732499],
            [-54.474724, 4.736666],
            [-54.477501, 4.747777],
            [-54.478058, 4.760555],
            [-54.476112, 4.867777],
            [-54.45639, 4.998333],
            [-54.45417, 5.009722],
            [-54.448059, 5.024166],
            [-54.415001, 5.073333],
            [-54.402229, 5.087777],
            [-54.378891, 5.112222],
            [-54.347778, 5.148333],
            [-54.317329, 5.208627],
            [-54.290283, 5.248055],
            [-54.276672, 5.261666],
            [-54.245003, 5.285],
            [-54.200005, 5.308055],
            [-54.186668, 5.322499],
            [-54.174446, 5.3375],
            [-54.166946, 5.346944],
            [-54.14389, 5.355],
            [-54.135834, 5.360555],
            [-54.091667, 5.391944],
            [-54.072502, 5.414166],
            [-54.066673, 5.421944],
            [-54.061668, 5.430555],
            [-54.054726, 5.444166],
            [-54.009445, 5.535555],
            [-54.00528, 5.545278],
            [-54.002785, 5.562778],
            [-54.002785, 5.569722],
            [-54.005005, 5.581666],
            [-54.011116, 5.6025],
            [-54.011116, 5.609444],
            [-54.007782, 5.633333],
            [-54.003616, 5.649722],
            [-53.992226, 5.673055],
            [-53.981674, 5.690555],
            [-53.939728, 5.744721],
            [-53.911392, 5.750278],
            [-53.861946, 5.755555],
            [-53.855278, 5.755278],
            [-53.75695, 5.733889],
            [-53.744728, 5.728889],
            [-53.636673, 5.673055],
            [-53.528061, 5.608333],
            [-53.51667, 5.60111],
            [-53.499168, 5.580277],
            [-53.494339, 5.572342]
          ]
        ]
      }
    }
  ]
}
';
    }
}
