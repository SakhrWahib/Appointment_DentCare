<?php

return [

    'user-management' => [
        'title' => 'إدارة المستخدمين',
        'created_at' => 'الوقت',
        'fields' => [
        ],
    ],

    'permissions' => [
        'title' => 'الصلاحيات',
        'created_at' => 'الوقت',
        'fields' => [
            'title' => 'العنوان',
        ],
    ],

    'roles' => [
        'title' => 'الأدوار',
        'created_at' => 'الوقت',
        'fields' => [
            'title' => 'العنوان',
            'permission' => 'الصلاحيات',
        ],
    ],

    'users' => [
        'title' => 'المستخدمين',
        'created_at' => 'الوقت',
        'fields' => [
            'name' => 'الاسم',
            'email' => 'البريد الإلكتروني',
            'password' => 'كلمة المرور',
            'role' => 'الدور',
            'remember-token' => 'رمز التذكير',
        ],
    ],
    'app_create' => 'إنشاء',
    'app_save' => 'حفظ',
    'app_edit' => 'تعديل',
    'app_view' => 'عرض',
    'app_update' => 'تحديث',
    'app_list' => 'قائمة',
    'app_no_entries_in_table' => 'لا توجد بيانات في الجدول',
    'custom_controller_index' => 'فهرس تحكم مخصص.',
    'app_logout' => 'تسجيل الخروج',
    'app_add_new' => 'إضافة جديد',
    'app_are_you_sure' => 'هل أنت متأكد؟',
    'app_back_to_list' => 'العودة للقائمة',
    'app_dashboard' => 'لوحة التحكم',
    'app_delete' => 'حذف',
    'global_title' => 'Quick LMS',
];
