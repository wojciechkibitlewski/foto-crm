<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поле :attribute має бути прийняте.',
    'accepted_if' => 'Поле :attribute має бути прийняте, коли :other є :value.',
    'active_url' => 'Поле :attribute має бути дійсною URL-адресою.',
    'after' => 'Поле :attribute має бути датою після :date.',
    'after_or_equal' => 'Поле :attribute має бути датою після або дорівнювати :date.',
    'alpha' => 'Поле :attribute повинно містити тільки літери.',
    'alpha_dash' => 'Поле :attribute повинно містити лише літери, цифри, тире та підкреслення.',     
    'alpha_num' => 'Поле :attribute має містити лише літери та цифри.',
    'array' => 'Поле :attribute має бути масивом.',
    'ascii' => 'Поле :attribute має містити лише однобайтові алфавітно-цифрові знаки та символи.',
    'before' => 'Поле :attribute має бути датою перед :date.',
    'before_or_equal' => 'Поле :attribute має бути датою, що передує або дорівнює :date.',
    'between' => [
        'array' => 'Поле :attribute повинно мати від :min до :max елементів.',
        'file' => 'Поле :attribute має бути в межах від :min до :max кілобайт.',
        'numeric' => 'Поле :attribute має бути між :min та :max.',
        'string' => 'Поле :attribute повинно містити від :min до :max символів.',
    ],
    'boolean' => 'Поле :attribute має бути true або false.',
    'can' => 'Поле :attribute містить недозволене значення.',
    'confirmed' => 'Підтвердження поля :attribute не збігається.',
    'current_password' => 'Пароль невірний.',
    'date' => 'Поле :attribute має бути дійсною датою.',
    'date_equals' => 'У полі :attribute має бути дата, що дорівнює :date.',
    'date_format' => 'Поле :attribute має відповідати формату :format.',
    'decimal' => 'Поле :attribute повинно мати :decimal знаків після коми.',
    'decimal' => 'Поле :attribute повинно мати :decimal знаків після коми.',
    'declined_if' => 'Поле :attribute має бути відхилено, коли :other є :value.',
    'different' => 'Поле :attribute та :other мають бути різними.',
    'digits' => 'Поле :attribute повинно мати значення :digits digits.',
    'digits_between' => 'Поле :attribute має бути між :min та :max цифрами.',
    'dimensions' => 'Поле :attribute містить невірні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'doesnt_end_with' => 'Поле :attribute не повинно закінчуватися одним з наступних: :values.',
    'doesnt_start_with' => 'Поле :attribute не повинно починатися з одного з наступних: :values.',
    'email' => 'Поле :attribute має бути дійсною адресою електронної пошти.',
    'ends_with' => 'Поле :attribute має закінчуватися одним з наступних значень: :values.',
    'enum' => 'Вибраний :attribute є недійсним.',
    'exists' => 'Вибраний :attribute є недійсним.',
    'file' => 'Поле :attribute має бути файлом.',
    'filled' => 'Поле :attribute повинно мати значення.',
    'gt' => [
        'array' => 'Поле :attribute повинно мати більше елементів :value.',
        'file' => 'Поле :attribute має бути більшим за :value kilobytes.',
        'numeric' => 'Поле :attribute має бути більшим за :value.',
        'string' => 'Поле :attribute має бути більшим за символи :value.',
    ],
    'gte' => [
        'array' => 'Поле :attribute повинно мати елементів :value або більше.',
        'file' => 'Поле :attribute має бути більшим або рівним :value kilobytes.',
        'numeric' => 'Поле :attribute має бути більшим або рівним :value.',
        'string' => 'Поле :attribute має бути більше або дорівнювати символам :value.',
    ],
    'image' => 'Поле :attribute має бути зображенням.',
    'in' => 'Вибраний атрибут :attribute є недійсним.',
    'in_array' => 'Поле :attribute повинно існувати в :other.',
    'integer' => 'Поле :attribute має бути цілим числом.',
    'ip' => 'Поле :attribute має бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute має бути дійсною адресою IPv4.',
    'ipv6' => 'Поле :attribute має бути дійсною IPv6-адресою.',
    'json' => 'Поле :attribute має бути коректним JSON-рядком.',
    'lowercase' => 'Поле :attribute має бути рядковим.', 
    'lt' => [
        'array' => 'Поле :attribute повинно мати менше елементів, ніж :value.',
        'file' => 'Поле :attribute має бути меншим за :value kilobytes.', 
        'numeric' => 'Поле :attribute має бути меншим за :value.',
        'string' => 'Поле :attribute має бути меншим за символи :value.',
    ],
    'lte' => [
        'array' => 'Поле :attribute не повинно містити більше елементів :value.',
        'file' => 'Поле :attribute має бути менше або дорівнювати :value kilobytes.', 
        'numeric' => 'Поле :attribute повинно бути менше або дорівнювати :value.',
        'string' => 'Поле :attribute повинно бути менше або дорівнювати символам :value.',
    ],
    'mac_address' => 'Поле :attribute має бути дійсною MAC-адресою.',
    'max' => [
        'array' => 'Поле :attribute не повинно містити більше ніж :max елементів.',
        'file' => 'Поле :attribute не повинно мати більше ніж :max kilobytes.', 
        'numeric' => 'Поле :attribute не повинно перевищувати :max.',
        'string' => 'Поле :attribute не повинно містити більше ніж :max символів.',
    ],
    'max_digits' => 'Поле :attribute не повинно містити більше ніж :max цифр.',
    'mimes' => 'Поле :attribute має бути файлом типу: :values.',
    'mimetypes' => 'Поле :attribute має бути файлом типу: :values.',
    'min' => [
        'array' => 'Поле :attribute повинно мати не менше :min елементів.',
        'file' => 'Поле :attribute повинно мати не менше :min кілобайт.', 
        'numeric' => 'Поле :attribute повинно містити не менше :min.',
        'string' => 'Поле :attribute повинно містити не менше :min символів.', 
    ],
    'min_digits' => 'Поле :attribute повинно мати щонайменше :min цифр.',
    'missing' => 'Поле :attribute має бути відсутнім.',
    'missing_if' => 'Поле :attribute має бути відсутнім, коли :other є :value.',
    'missing_unless' => 'Поле :attribute має бути відсутнім, якщо тільки :other не є :value.',
    'missing_with' => 'Поле :attribute повинно бути відсутнім, коли присутнє :values.', 
    'missing_with_all' => 'Поле :attribute повинно бути відсутнім при наявності :values',
    'multiple_of' => 'Поле :attribute має бути кратним :value.', 
    'not_in' => 'Вибраний :attribute є недійсним.', 
    'not_regex' => 'Формат поля :attribute є невірним.', 
    'numeric' => 'Поле :attribute має бути числом.', 
    'password' => [
        'letters' => 'Поле :attribute повинно містити принаймні одну літеру.', 
        'mixed' => 'Поле :attribute повинно містити принаймні одну велику та одну малу літеру.',
        'numbers' => 'Поле :attribute повинно містити принаймні одне число.', 
        'symbols' => 'Поле :attribute повинно містити принаймні один символ.', 
        'uncompromised' => 'Даний : attribute з явився у витоку даних. Будь ласка, виберіть інший : attribute.', 
    ],
    'present' => 'Поле :attribute має бути присутнім.',
    'prohibited' => 'Поле :attribute заборонено',
    'prohibited_if' => 'Поле :attribute заборонено, якщо :other є :value.',
    'prohibited_unless' => 'Поле :attribute заборонено, якщо :other не знаходиться у :values.',
    'prohibits' => 'Поле :attribute забороняє присутність :other.',
    'regex' => 'Формат поля :attribute є невірним.',
    'required' => 'Поле :attribute є обов язковим.',
    'required_array_keys' => 'Поле :attribute повинно містити записи для: :values.',
    'required_if' => 'Поле :attribute є обов язковим, коли :other є :value.',
    'required_if_accepted' => 'Поле :attribute є обов язковим, коли :other прийнято.',
    'required_unless' => 'Поле :attribute є обов язковим, якщо в :values немає :other.',
    'required_with' => 'Поле :attribute є обов язковим, якщо у :values присутнє :other.', 
    'required_with_all' => 'Поле :attribute є обов язковим, коли присутні :values.',
    'required_without' => 'Поле :attribute є обов язковим, якщо відсутнє значення :values.', 
    'required_without_all' => 'Поле :attribute є обов язковим, якщо жодне з :values не присутнє.',
    'same' => 'Поле :attribute має збігатися з :other.',
    'size' => [
        'array' => 'Поле :attribute повинно містити елементи типу :size.',
        'file' => 'Поле :attribute повинно мати значення :size кілобайтів.',
        'numeric' => 'Поле :attribute має бути :size.',
        'string' => 'Поле :attribute має містити символи :size.', 
    ],
    'starts_with' => 'Поле :attribute має починатися з одного з наступних: :values.',
    'string' => 'Поле :attribute має бути рядком.',
    'timezone' => 'У полі :attribute має бути вказано дійсний часовий пояс.',
    'unique' => 'Атрибут :attribute вже зайнято.',
    'uploaded' => ':attribute не вдалося завантажити.', 
    'uppercase' => 'Поле :attribute має бути верхнім регістром.',
    'url' => 'Поле :attribute має бути дійсною URL-адресою.',
    'ulid' => 'Поле :attribute має бути дійсним ULID.',
    'uuid' => 'Поле :attribute має бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
