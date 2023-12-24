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

    'accepted' => 'لا بد من قبول حقل :attribute',
    'active_url' => 'حقل :attribute ليس رابط صحيح',
    'after' => 'لا بد أن يحتوي حقل :attribute على تاريخ بعد :date',
    'after_or_equal' => 'لا بد أن يحتوي حقل :attribute على تاريخ مطابق أو بعد :date',
    'alpha' => 'يجب أن يحتوي حقل :attribute على أحرف',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute على أحرف فقط, أرقام, شرطات و شرطة سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute على حروف و أرقام فقط',
    'array' => 'يجب أن يكون حقل :attribute عبارة عن مصفوفة',
    'before' => 'لا بد أن يحتوي حقل :attribute على تاريخ قبل :date',
    'before_or_equal' => 'لا بد أن يحتوي حقل :attribute على تاريخ مطابق أو قبل :date',
    'between' => [
        'numeric' => 'يجب أن يحتوي حقل :attribute على قيمة بين :min و :max',
        'file' => 'يجب أن يحتوي حقل :attribute على ملف يتراوح حجمه بين :min و :max كيلوبايت',
        'string' => 'يجب أن يحتوي حقل :attribute على نص يتراوح طوله بين :min و :max محرف',
        'array' => 'يجب أن يحتوي حقل :attribute على مصفوفة فيها ما بين :min و :max عنصر',
    ],
    'boolean' => 'لا بد أن تكون قيمة حقل :attribute إما صح أو خطأ',
    'confirmed' => 'تأكيد القيمة داخل حقل :attribute غير مطابقة',
    'current_password' => 'كلمة المرور الحالية غير صحيحة',
    'date' => 'إن حقل :attribute لا يحتوي على تاريخ صحيح',
    'date_equals' => 'يجب أن يحتوي حقل :attribute على تاريخ مطابق للتاريخ :date',
    'date_format' => 'إن حقل :attribute لا يحتوي على تاريخ منسق وفق الصيغة :format',
    'different' => 'يجب أن يحتوي حقل :attribute على قيمة مختلفة عن تلك الموجودة في حقل :other',
    'digits' => 'يجب أن يحتوي حقل :attribute على رقم مؤلف من :digits مرتبة',
    'digits_between' => 'يجب أن يحتوي حقل :attribute على رقم يحتوي ما بين :min و :max مرتبة',
    'dimensions' => 'إن حقل :attribute يحتوي على صورة أبعادها غير صالحة',
    'distinct' => 'إن حقل :attribute يحتوي على قيمة مكررة',
    'email' => 'يجب أن يحتوي حقل :attribute على بريد إلكتروني صالح',
    'ends_with' => 'يجب أن ينتهي حقل :attribute بإحدى القيم التالية: :values',
    'exists' => 'إن القيمة المختارة داخل حقل :attribute غير صالحة',
    'file' => 'يجب أن يحتوي حقل :attribute على ملف',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة',
    'gt' => [
        'numeric' => 'يجب أن يحتوي حقل :attribute على قيمة أكبر من :value',
        'file' => 'يجب أن يحتوي حقل :attribute على ملف حجمه أكبر من :value كيلوبايت',
        'string' => 'يجب أن يحتوي حقل :attribute على نص طوله أكثر من :value محرف',
        'array' => 'يجب أن يحتوي حقل :attribute على مصفوفة فيها أكثر من :value عنصر',
    ],
    'gte' => [
        'numeric' => 'يجب أن يحتوي حقل :attribute على قيمة أكبر من أو تساوي :value',
        'file' => 'يجب أن يحتوي حقل :attribute على ملف حجمه أكبر من أو يساوي :value كيلوبايت',
        'string' => 'يجب أن يحتوي حقل :attribute على نص طوله أكثر من أو يساوي :value محرف',
        'array' => 'يجب أن يحتوي حقل :attribute على مصفوفة فيها أكثر من أو يساوي :value عنصر',
    ],
    'image' => 'يجب أن يحتوي حقل :attribute على صورة',
    'in' => 'إن القيمة المختارة داخل حقل يجب أن تكون إحدى (:values) :attribute غير صالحة',
    'in_array' => 'إن القيمة الموجودة داخل حقل :attribute ليست موجودة ضمن :other',
    'integer' => 'يجب أن يحتوي حقل :attribute على عدد صحيح',
    'ip' => 'يجب أن يحتوي حقل :attribute على عنوان IP صحيح',
    'ipv4' => 'يجب أن يحتوي حقل :attribute على عنوان IPv4 صحيح',
    'ipv6' => 'يجب أن يحتوي حقل :attribute على عنوان IPv6 صحيح',
    'json' => 'يجب أن يحتوي حقل :attribute على نص JSON صالح و منسق بشكل صحيح',
    'lt' => [
        'numeric' => 'يجب أن يحتوي حقل :attribute على قيمة أصغر من :value',
        'file' => 'يجب أن يحتوي حقل :attribute على ملف حجمه أصغر من :value كيلوبايت',
        'string' => 'يجب أن يحتوي حقل :attribute على نص طوله أقل من :value محرف',
        'array' => 'يجب أن يحتوي حقل :attribute على مصفوفة فيها أقل من :value عنصر',
    ],
    'lte' => [
        'numeric' => 'يجب أن يحتوي حقل :attribute على قيمة أصغر من أو تساوي :value',
        'file' => 'يجب أن يحتوي حقل :attribute على ملف حجمه أصغر من أو يساوي :value كيلوبايت',
        'string' => 'يجب أن يحتوي حقل :attribute على نص طوله أقل من أو يساوي :value محرف',
        'array' => 'يجب أن يحتوي حقل :attribute على مصفوفة فيها أقل من أو يساوي :value عنصر',
    ],
    'max' => [
        'numeric' => 'لا يمكن أن يحتوي حقل :attribute على قيمة أكبر من :max',
        'file' => 'لا يمكن أن يحتوي حقل :attribute على ملف حجمه أكبر من :max كيلوبايت',
        'string' => 'لا يمكن أن يحتوي حقل :attribute على نص طوله أكثر من :max محرف',
        'array' => 'لا يمكن أن يحتوي حقل :attribute على مصفوفة فيها أكثر من :max عنصر',
    ],
    'mimes' => 'يجب أن يحتوي حقل :attribute على ملف من إحدى الأنواع: :values',
    'mimetypes' => 'يجب أن يحتوي حقل :attribute على ملف من إحدى الأنواع: :values',
    'min' => [
        'numeric' => 'لا يمكن أن يحتوي حقل :attribute على قيمة أصغر من :min',
        'file' => 'لا يمكن أن يحتوي حقل :attribute على ملف حجمه أصغر من :min كيلوبايت',
        'string' => 'لا يمكن أن يحتوي حقل :attribute على نص طوله أقل من :min محرف',
        'array' => 'لا يمكن أن يحتوي حقل :attribute على مصفوفة فيها أقل من :min عنصر',
    ],
    'multiple_of' => 'يجب أن يحتوي حقل :attribute على قيمة من مضاعفات :value',
    'not_in' => 'إن القيمة المختارة داخل حقل :attribute غير صالحة',
    'not_regex' => 'إن تنسيق القيمة الموجودة داخل حقل :attribute غير صالح',
    'numeric' => 'يجب أن يحتوي حقل :attribute على رقم',
    'password' => 'كلمة المرور غير صحيحة',
    'present' => 'يجب أن يكون حقل :attribute موجوداً',
    'regex' => 'إن تنسيق القيمة الموجودة داخل حقل :attribute غير صالح',
    'required' => 'إن حقل :attribute إجباري',
    'required_if' => 'إن حقل :attribute مطلوب عندما تكون قيمة حقل :other تساوي :value',
    'required_unless' => 'إن حقل :attribute مطلوب إلا إذا كانت قيمة حقل :other ليست واحدةً من :values',
    'required_with' => 'إن حقل :attribute مطلوب عندما تكون إحدى القيم :values موجودة',
    'required_with_all' => 'إن حقل :attribute مطلوب عندما تكون إحدى القيم :values موجودة',
    'required_without' => 'إن حقل :attribute مطلوب عندما تكون إحدى القيم :values غير موجودة',
    'required_without_all' => 'إن حقل :attribute مطلوب عندما تكون جميع القيم :values غير موجودة',
    'prohibited' => 'إن القيمة الموجودة داخل حقل :attribute محظورة',
    'prohibited_if' => 'إن قيمة حقل :attribute محظورة عندما تكون قيمة حقل :other تساوي :value',
    'prohibited_unless' => 'إن قيمة حقل :attribute محظورة إلا إذا كانت القيمة الموجودة داخل حقل :other ضمن واحدة من :values',
    'same' => 'يجب أن يحتوي حقل :attribute على قيمة مطابقة للقيمة الموجودة ضمن حقل :other',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة حقل :attribute تساوي القيمة :size',
        'file' => 'يجب أن يحتوي حقل :attribute على ملف حجمه :size كيلوبايت',
        'string' => 'يجب أن يحتوي حقل :attribute على نص طوله :size محرف',
        'array' => 'يجب أن يحتوي حقل :attribute على مصفوفة فيها :size عنصر',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بإحدى القيم التالية: :values',
    'string' => 'يجب أن يحتوي حقل :attribute على نص',
    'timezone' => 'يجب أن يحتوي حقل :attribute على نطاق زمني صحيح',
    'unique' => 'إن القيمة الموجودة داخل حقل :attribute مأخوذة',
    'uploaded' => 'فشلت عملية الرفع للحقل :attribute',
    'url' => 'إن تنسيق القيمة الموجودة داخل حقل :attribute غير صحيح',
    'uuid' => 'لا بد أن يحتوي حقل :attribute على قيمة UUID صالحة',
    'valid_mobile_number' => 'يجب أن يحتوي حقل :attribute على رقم موبايل سوري صحيح',
    'is_allowed_age' => 'يحب أن يكون العمر أكبر من 15',
    'check_not_in_event' => "مُنضم مسبقاً إلى هذا الحدث",
    'check_in_event' => "لست عضواً في هذا الحدث",

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

    'attributes' => [
        "login"                                 =>  "البريد الإلكتروني أو رقم الهاتف",
        "password"                              =>  "كلمة المرور",
        "password_confirmation"                 =>  "تأكيد كلمة المرور",
        "email"                                 =>  "البريد الإلكتروني",
        "token"                                 =>  "الرمز",
        "center_id"                             =>  "معرف المركز",
        "problem_type_id"                       =>  "معرف نوع المشكلة",
        "description"                           =>  "الوصف",
        "fullname"                              =>  "الاسم الكامل",
        "lastname"                              =>  "الكنية",
        "national_number"                       =>  "الرقم الوطني",
        "user_identity_type_id"                 =>  "معرف نوع وثيقة المستخدم",
        "provided_identity_number"              =>  "رقم وثيقة المستخدم",
        "governorate"                           =>  "المحافظة",
        "mobile_number"                         =>  "رقم الموبايل",
        "national_identity_card_front_image"    =>  "صورة الوجه الأمامي للهوية الوطنية",
        "national_identity_card_back_image"     =>  "صورة الوجه الخلفي للهوية الوطنية",
        "account_data_modification_items"       =>  "عناصر طلب تعديل البيانات",
        "title"                                 =>  "العنوان",
        "subtitle"                              =>  "العنوان الفرعي",
        "text"                                  =>  "المحتوى",
        "category_id"                           =>  "معرف تصنيف الأخبار",
        "image"                                 =>  "الصورة",
        "news_category_name"                    =>  "التصنيف الإخباري",
        "client_name"                           =>  "اسم العميل",
        "service_name"                          =>  "اسم الخدمة",
        "icon"                                  =>  "الأيقونة",
        "icon_active"                           =>  "الأيقونة عند التأشير",
        "username"                              =>  "اسم المستخدم",
        "social_media_platform_name"            =>  "اسم منصة رابط التواصل الإجتماعي",
        "link"                                  =>  "الرابط",
        "social_media_id"                       =>  "معرف منصة التواصل الإجتماعي",
        "admin_name"                            =>  "اسم المدير",
        "content"                               =>  "المحتوى",
        "problem_type"                          =>  "نوع المشكلة",
        "name"                                  =>  "الاسم",
        "cv"                                    =>  "ملف السيرة الذاتية",
        "data_modification_items_count"         =>  "عدد العناصر المراد تعديلها",
        "data_modification_items"               =>  "العناصر المراد تعديلها",
        "date"                                  => "التاريخ",
        'ar.name' => "الاسم بالعربي",
        'en.name' => "الاسم بالأجنبي",

    ],

    'values' => [
        'date' => [
            'yesterday' => 'البارحة',
            'now'       => 'الآن',
            'today'     => 'اليوم',
            'tomorrow'  => 'الغد',
        ]
    ]

];
