<?php

return [
    'accepted'         => 'Die :attribute moet aanvaar wees.',
    'active_url'       => 'Die :attribute is nie \'n geldige URL nie.',
    'after'            => 'Die :attribute moet \'n datum wees na :date.',
    'after_or_equal'   => 'Die :attribute moet \'n datum na of gelyk aan :date wees.',
    'alpha'            => 'Die :attribute mag slegs letters bevat.',
    'alpha_dash'       => 'Die :attribute mag slegs letters, syfers en koppeltekens bevat.',
    'alpha_num'        => 'Die :attribute mag slegs letters en syfers bevat.',
    'latin'            => 'Die :attribute mag slegs \"ISO basic\" Latynse letters bevat.',
    'latin_dash_space' => 'Die :attribute mag slegs \"ISO basic\" Latynse letters, syfers, koppeltekens en spasies bevat.',
    'array'            => 'Die :attribute moet \'n reeks wees.',
    'before'           => 'Die :attribute moet \'n datum voor :date wees.',
    'before_or_equal'  => 'Die :attribute moet \'n datum voor of gelyk aan :date wees.',
    'between'          => [
        'numeric' => 'Die :attribute moet tussen :min en :max wees.',
        'file'    => 'Die :attribute moet tussen :min en :max kilobytes groot wees.',
        'string'  => 'Die Die :attribute moet tussen :min en :max karakters lank wees.',
        'array'   => 'Die :attribute moet tussen :min en :max items bevat.',
    ],
    'boolean'          => 'Die :attribute moet waar of vals wees.',
    'confirmed'        => 'Die :attribute bevestiging stem nie ooreen nie.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Die :attribute is nie \'n geldige datum nie.',
    'date_equals'      => 'Die :attribute moet \'n datum gelyk aan :date wees.',
    'date_format'      => 'Die :attribute stem nie ooreen met die formaat :format nie.',
    'different'        => 'Die :attribute en :other moet verskil.',
    'digits'           => 'Die :attribute moet :digits syfers lank wees.',
    'digits_between'   => 'Die :attribute moet tussen :min en :max syfers lank wees.',
    'dimensions'       => 'Die :attribute bevat ongeldige foto dimensies.',
    'distinct'         => 'Die :attribute  het \'n duplikaat waarde.',
    'email'            => 'Die :attribute moet \'n geldige e-pos adres wees.',
    'ends_with'        => 'Die :attribute moet eindig met een van die volgende: :values.',
    'exists'           => 'Die geseleteerde :attribute is ongeldig.',
    'file'             => 'Die :attribute moet \'n lêer wees.',
    'filled'           => 'Die :attribute veld moet \'n waarde bevat.',
    'gt'               => [
        'numeric' => 'Die :attribute moet groter as :value wees.',
        'file'    => 'Die :attribute moet groter as :value kilobytes wees.',
        'string'  => 'Die :attribute moet langer as :value karakters lank wees.',
        'array'   => 'Die :attribute moet meer as :value items bevat.',
    ],
    'gte' => [
        'numeric' => 'Die :attribute moet groter of gelyk aan :value wees.',
        'file'    => 'Die :attribute moet groter as of gelyk aan :value kilobytes groot wees.',
        'string'  => 'Die :attribute moet langer of gelyk aan :value karakters lank wees.',
        'array'   => 'Die :attribute moet :value of meer items bevat.',
    ],
    'image'    => 'Die :attribute moet \'n foto wees.',
    'in'       => 'Die geselekteerde :attribute is ongeldig.',
    'in_array' => 'Die :attribute veld bestaan nie in :other.',
    'integer'  => 'Die :attribute moet \'n nommer wees.',
    'ip'       => 'Die :attribute moet \'n geldige IP adres wees.',
    'ipv4'     => 'Die :attribute moet \'n geldige IPv4 adres wees.',
    'ipv6'     => 'Die :attribute moet \'n geldige IPv6 adres wees.',
    'json'     => 'Die :attribute moet \'n geldige JSON string wees.',
    'lt'       => [
        'numeric' => 'Die :attribute moet minder as :value wees.',
        'file'    => 'Die :attribute moet kleiner as :value kilobytes groot wees.',
        'string'  => 'Die :attribute moet korter as :value karakters lank wees.',
        'array'   => 'Die :attribute moet minder as :value items bevat.',
    ],
    'lte' => [
        'numeric' => 'Die :attribute moet kleiner of gelykaan :value wees.',
        'file'    => 'Die :attribute moet kleiner of gelyk aan :value kilobytes groot wees.',
        'string'  => 'Die :attribute moet korter of gelyk aan :value karakters lank wees.',
        'array'   => 'Die :attribute mag nie meer as :value items bevat nie.',
    ],
    'max' => [
        'numeric' => 'Die :attribute mag nie groter as :max wees nie.',
        'file'    => 'Die :attribute mag nie groter as :max kilobytes groot wees nie.',
        'string'  => 'Die :attribute mag nie langer as :max karakters lank wees nie.',
        'array'   => 'Die :attribute mag nie meer as :max items bevat nie.',
    ],
    'mimes'     => 'Die :attribute moet \'n lêer wees van soort: :values.',
    'mimetypes' => 'Die :attribute moet \'n lêer wees van soort: :values.',
    'min'       => [
        'numeric' => 'Die :attribute moet ten minste :min wees.',
        'file'    => 'Die :attribute moet ten minste :min kilobytes groot wees.',
        'string'  => 'Die :attribute moet ate minste :min karakters lank wees.',
        'array'   => 'Die :attribute moet ten minste :min items bevat.',
    ],
    'not_in'               => 'Die geselekteerde :attribute is ongeldig.',
    'not_regex'            => 'Die :attribute formaat is ongeldig.',
    'numeric'              => 'Die :attribute moet \'n syfer wees.',
    'password'             => 'Die wagwoord is verkeerd.',
    'present'              => 'Die :attribute veld moet aanwesig wees.',
    'regex'                => 'Die :attribute formaat is ongeldig.',
    'required'             => 'Die :attribute veld word vereis.',
    'required_if'          => 'Die :attribute veld word vereis wanneer :other :value is.',
    'required_unless'      => 'Die :attribute veld word vereis tensy :other in :values is.',
    'required_with'        => 'Die :attribute veld word vereis wanneer :values aanwesig is.',
    'required_with_all'    => 'Die :attribute veld word vereis wanneer :values aanwesig is.',
    'required_without'     => 'Die :attribute veld word vereis wanneer :values nie aanwesig is nie.',
    'required_without_all' => 'Die :attribute veld word vereis wanneer geen van die :values aanwesig is nie.',
    'same'                 => 'Die :attribute en :other mag nie identies wees nie.',
    'size'                 => [
        'numeric' => 'Die :attribute moet :size wees.',
        'file'    => 'Die :attribute moet :size kilobytes groot wees.',
        'string'  => 'Die :attribute moet :size karakters lank wees.',
        'array'   => 'Die :attribute moet :size items bevat.',
    ],
    'starts_with' => 'Die :attribute moet begin met een van die volgende: :values.',
    'string'      => 'Die :attribute moet \'n string wees.',
    'timezone'    => 'Die :attribute moet \'n geldige sone wees.',
    'unique'      => 'Die :attribute is alreeds gevat.',
    'uploaded'    => 'Die :attribute het misluk om op te laai.',
    'url'         => 'Die :attribute formaat is ongeldig.',
    'uuid'        => 'Die :attribute moet \'n geldige UUID wees.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'Die :attribute bevat \'n gereserveerde woord',
    'dont_allow_first_letter_number' => 'Die \":input\" veld kan nie \'n syfer as eerste letter hê nie.',
    'exceeds_maximum_number'         => 'Die :attribute oorskry die maksimum model lengte',
    'db_column'                      => 'Die :attribute mag slegs \"ISO basic\" Latyn letters, nommers, koppelteken bevat, en mag nie op \'n nommer begin nie.',
    'attributes'                     => [],
];
