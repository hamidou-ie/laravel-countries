<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Lwwcas\LaravelCountries\Abstract\CountrySeeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class ME_Montenegro extends CountrySeeder
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
        $this->name = 'Montenegro';

        // Set the country's official name
        $this->official_name = 'Montenegro';

        // Set the ISO 3166-1 alpha-2 code
        $this->iso_alpha_2 = 'ME';

        // Set the ISO 3166-1 alpha-3 code
        $this->iso_alpha_3 = 'MNE';

        // Set the ISO 3166-1 numeric code (usually three digits)
        $this->iso_numeric = '499';

        // Set the international dialing code
        $this->international_phone = '382';

        // Define the languages spoken in the country
        $this->languages = ['sr', 'me', 'bs', 'sq', 'hr']; // Serbian, Montenegrin, Bosnian, Albanian, and Croatian are recognized languages

        // Define the top-level domain(s)
        $this->tld = ['.me'];

        // Define alternative top-level domains
        $this->alternative_tlds = []; // No significant alternative TLDs

        // Define average internet speeds
        $this->internet_speed = [
            // Average fixed broadband speed
            'average_speed_fixed' => '50 Mbps',
            // Average mobile connection speed
            'average_speed_mobile' => '30 Mbps',
        ];

        // Define internet penetration rate
        $this->internet_penetration = '70%'; // Moderate internet penetration rate

        // Set the national cybersecurity agency
        $this->cybersecurity_agency = 'Montenegro CERT (Computer Emergency Response Team)';

        // List popular web technologies in Montenegro
        $this->popular_technologies = ['PHP', 'JavaScript', 'HTML/CSS', 'Python', 'Ruby'];

        // Set the WMO (World Meteorological Organization) country code
        $this->wmo = 'MJ';

        // Set the GeoName ID for geographical data reference
        $this->geoname_id = '3194884';

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
            'coins_sub' => ['1', '2', '5', '10', '20', '50'],
        ];

        // Set the population
        $this->population = 622359; // As per recent estimates

        // Set the area in square kilometers
        $this->area = 13812; // km²

        // Set the capital city
        $this->capital = 'Podgorica';

        // Define the time zone(s) using IANA time zone identifiers
        $this->timezones = [
            [
                // Time zone identifier
                'timezone_id' => 'Europe/Podgorica',
                // Standard time offset
                'standard_time' => 'UTC+1',
                // Daylight saving time offset
                'daylight_saving_time' => 'UTC+2',
            ],
        ];

        // Set the independence day
        $this->independence_day = '2006-06-03'; // Independence from the State Union of Serbia and Montenegro

        // List international organizations the country is part of
        $this->international_organizations = [
            'United Nations',
            'North Atlantic Treaty Organization (NATO)',
            'World Trade Organization (WTO)',
            'International Monetary Fund (IMF)',
            'World Health Organization (WHO)',
            'Council of Europe',
            'Organization for Security and Co-operation in Europe (OSCE)',
        ];

        // Set the GDP in billions of USD
        $this->gdp = 5.8; // GDP in billions of USD

        // List the predominant religions
        $this->religions = [
            'Christianity (Eastern Orthodoxy)',
            'Islam',
        ];

        // Describe the form of government
        $this->government = 'Unitary parliamentary republic';

        // Set the national sport
        $this->national_sport = 'Football (Soccer)'; // Football is highly popular in Montenegro

        // Define bordering countries
        $this->borders = [
            ['name' => 'Serbia', 'iso_alpha_2' => 'RS'],
            ['name' => 'Bosnia and Herzegovina', 'iso_alpha_2' => 'BA'],
            ['name' => 'Albania', 'iso_alpha_2' => 'AL'],
            ['name' => 'Croatia', 'iso_alpha_2' => 'HR'],
            ['name' => 'Kosovo', 'iso_alpha_2' => 'XK'],
        ];

        // Define the country's flag emoji representation
        $this->emoji = [
            // Native emoji image
            'img' => '🇲🇪',
            // Unicode code points
            'uCode' => 'U+1F1F2 U+1F1EA',
            // HTML entities
            'html' => '&#x1F1F2;&#x1F1EA;',
            // CSS entities
            'css' => '\\1F1F2\\1F1EA',
            // Decimal Unicode entities
            'decimal' => '&#127474;&#127466;',
            // Direct UTF-8 string
            'utf8' => '🇲🇪',
            // UTF-16 surrogate pairs
            'utf16' => '\uD83C\uDDF2\uD83C\uDDEA',
            // Shortcode in Emojione, Slack
            'shortcode' => ':flag-me:',
            // Hexadecimal entity
            'hex' => '&#x1F1F2;&#x1F1EA;',
        ];

        // Define the colors of the country's flag with accurate color values
        $this->flag_colors = [
            [
                // Color name
                'name' => 'Red',
                // Web color name
                'web_name' => 'red',
                // Hexadecimal color code
                'hex' => '#D4213D',
                // RGB color values
                'rgb' => '212,33,61',
                // CMYK color values
                'cmyk' => '0,84,71,17',
                // HSL color values
                'hsl' => '349°,72%,48%',
                // HSV color values
                'hsv' => '349°,84%,83%',
                // Pantone color code
                'pantone' => '186 C',
                // Contrast color for readability
                'contrast' => '#FFFFFF',
            ],
            [
                // Color name
                'name' => 'Gold',
                // Web color name
                'web_name' => 'gold',
                // Hexadecimal color code
                'hex' => '#FFCC33',
                // RGB color values
                'rgb' => '255,204,51',
                // CMYK color values
                'cmyk' => '0,20,80,0',
                // HSL color values
                'hsl' => '45°,100%,60%',
                // HSV color values
                'hsv' => '45°,80%,100%',
                // Pantone color code
                'pantone' => '1235 C',
                // Contrast color for readability
                'contrast' => '#000000',
            ],
        ];

        // Define the geographical coordinates
        $this->coordinates = [
            // Latitude in decimal degrees
            'latitude' => '42.7087',
            // Longitude in decimal degrees
            'longitude' => '19.3744',
            // Degrees with decimal
            'dd' => '42.7087° N, 19.3744° E',
            // Degrees, minutes, seconds
            'dms' => '42°42\'31.32" N, 19°22\'27.84" E',
            // Degrees and decimal minutes
            'dm' => '42°42.522\' N, 19°22.464\' E',
            // GPS formats
            'gps' => [],
        ];

        $this->geographical = json_decode($this->geographical(), true);

        Builder::country($this);
    }

    public function geographical()
    {
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"me"},"geometry":{"type":"Polygon","coordinates":[[[18.455555,42.565826],[18.463886,42.569443],[18.536663,42.610832],[18.549999,42.619438],[18.56583,42.630554],[18.570553,42.635826],[18.574444,42.643326],[18.577499,42.654999],[18.576385,42.663055],[18.561665,42.70916],[18.560276,42.712219],[18.558052,42.715271],[18.551388,42.719162],[18.546665,42.720833],[18.535553,42.722221],[18.526386,42.724442],[18.518608,42.728607],[18.515831,42.73111],[18.490833,42.766388],[18.457222,42.82222],[18.455555,42.825554],[18.454441,42.833328],[18.478611,42.956383],[18.480553,42.964439],[18.483887,42.971939],[18.497219,42.990273],[18.508888,43.000549],[18.524441,43.012215],[18.535553,43.01722],[18.552219,43.022774],[18.57972,43.02916],[18.631664,43.034439],[18.640831,43.037216],[18.647221,43.041382],[18.649998,43.044167],[18.651665,43.047493],[18.657776,43.071938],[18.659164,43.080276],[18.657776,43.09166],[18.65361,43.115273],[18.650555,43.122215],[18.644997,43.13166],[18.643887,43.13916],[18.645832,43.147217],[18.697777,43.252495],[18.699997,43.255554],[18.706665,43.260277],[18.83934,43.348022],[18.873325,43.354691],[18.888332,43.356384],[18.908607,43.35833],[18.914238,43.358315],[18.91972,43.357216],[18.957497,43.329163],[18.960293,43.326683],[18.960545,43.318924],[18.954166,43.308884],[18.951942,43.300278],[18.954441,43.29361],[18.956921,43.290833],[19.016666,43.239441],[19.048866,43.231026],[19.054996,43.232498],[19.06583,43.238884],[19.068607,43.241386],[19.07222,43.248055],[19.078888,43.262497],[19.09222,43.301666],[19.093609,43.308884],[19.027496,43.429161],[19.023052,43.435555],[19.011387,43.444717],[18.998608,43.449997],[18.988609,43.452499],[18.976944,43.453049],[18.960278,43.452499],[18.956665,43.454437],[18.95583,43.458328],[18.949718,43.496941],[18.948608,43.505272],[18.949444,43.509438],[18.951664,43.512497],[19.006664,43.555832],[19.011665,43.556107],[19.211666,43.52166],[19.223888,43.516388],[19.228809,43.513214],[19.254719,43.459999],[19.279442,43.449715],[19.444164,43.373604],[19.511944,43.321938],[19.517776,43.317215],[19.548332,43.284996],[19.558609,43.270271],[19.560276,43.263329],[19.563332,43.256386],[19.585831,43.236107],[19.641941,43.186104],[19.647778,43.181664],[19.656666,43.178055],[19.67083,43.174438],[19.692497,43.17083],[19.783607,43.148048],[19.920277,43.106384],[19.969719,43.090553],[20.035831,43.037216],[20.059719,43.005554],[20.147499,42.971664],[20.153053,42.972221],[20.164165,42.971107],[20.178333,42.967499],[20.25972,42.941666],[20.286942,42.932495],[20.297497,42.926384],[20.34333,42.891106],[20.348888,42.886383],[20.376942,42.849159],[20.382774,42.835548],[20.379444,42.833328],[20.231941,42.761108],[20.112778,42.767494],[20.104443,42.770271],[20.088608,42.773605],[20.076664,42.773888],[20.066666,42.773048],[20.039444,42.766106],[20.014999,42.752495],[19.990833,42.73333],[19.980274,42.721939],[19.976944,42.715271],[19.975277,42.707497],[19.977497,42.703888],[19.980274,42.701385],[20.007774,42.684441],[20.015274,42.680832],[20.025276,42.678886],[20.048611,42.677773],[20.07,42.673882],[20.094444,42.664444],[20.101665,42.659996],[20.10722,42.654442],[20.106941,42.64666],[20.105831,42.642776],[20.071423,42.560913],[20.064163,42.563049],[20.057777,42.563889],[20.053333,42.563049],[20.049164,42.561661],[19.935276,42.518608],[19.919441,42.512497],[19.822498,42.471939],[19.801666,42.48027],[19.79361,42.483887],[19.790276,42.486107],[19.773609,42.497215],[19.765274,42.504715],[19.746666,42.543053],[19.746944,42.546944],[19.75,42.579994],[19.752499,42.583054],[19.759998,42.586388],[19.766109,42.585548],[19.770275,42.586937],[19.772778,42.589996],[19.773609,42.593605],[19.773052,42.597496],[19.755833,42.639717],[19.75333,42.64222],[19.726665,42.659996],[19.722775,42.661942],[19.713055,42.660553],[19.708885,42.658882],[19.657219,42.628326],[19.645832,42.61805],[19.633331,42.603333],[19.615833,42.582497],[19.609444,42.572495],[19.608608,42.568054],[19.610832,42.561104],[19.612499,42.549995],[19.608887,42.542496],[19.606388,42.539444],[19.519722,42.448608],[19.286942,42.192215],[19.282497,42.185555],[19.284443,42.182777],[19.300278,42.171104],[19.332222,42.152496],[19.369999,42.128883],[19.386387,42.11805],[19.398331,42.10833],[19.400276,42.10527],[19.398888,42.101387],[19.384163,42.083611],[19.380981,42.081001],[19.378052,42.078606],[19.374603,42.071487],[19.373333,42.06694],[19.346943,41.955551],[19.34333,41.912498],[19.367771,41.848999],[19.299442,41.894722],[19.278889,41.903328],[19.244999,41.912216],[19.235554,41.910828],[19.224442,41.911942],[19.181664,41.928604],[19.170555,41.934441],[19.15472,41.945831],[19.150833,41.951942],[19.138885,41.97361],[19.136387,41.98027],[19.136387,41.983604],[19.140274,41.993607],[19.146664,42.013054],[19.145275,42.026108],[19.138611,42.043327],[19.078609,42.111664],[19.056389,42.135826],[19.051666,42.137215],[19.046108,42.137497],[19.004997,42.157494],[18.964443,42.189995],[18.887775,42.273048],[18.883331,42.27861],[18.875832,42.282494],[18.870552,42.283607],[18.84972,42.286659],[18.844997,42.287216],[18.810833,42.284721],[18.652496,42.378052],[18.641666,42.370552],[18.627499,42.364998],[18.623055,42.364166],[18.617496,42.364998],[18.612221,42.366104],[18.577221,42.387215],[18.546387,42.416107],[18.54583,42.419998],[18.547222,42.423882],[18.552776,42.429443],[18.55611,42.431389],[18.561943,42.432777],[18.585831,42.429718],[18.613052,42.424721],[18.622498,42.421944],[18.631386,42.41555],[18.635555,42.413605],[18.697498,42.393883],[18.702499,42.393326],[18.70472,42.396385],[18.709164,42.412498],[18.709164,42.416664],[18.706108,42.42305],[18.681942,42.458328],[18.675278,42.462776],[18.513611,42.455276],[18.50861,42.45472],[18.504997,42.452774],[18.503197,42.44944],[18.498055,42.451111],[18.479443,42.465271],[18.466389,42.477776],[18.460278,42.486938],[18.455276,42.500275],[18.453331,42.512497],[18.453331,42.521111],[18.455555,42.565826]]]}}]}';
    }
}
