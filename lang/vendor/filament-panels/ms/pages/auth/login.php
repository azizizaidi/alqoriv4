<?php

return [

    'title' => 'Log masuk',

    'heading' => 'Log masuk ke akaun anda',

    'actions' => [

        'register' => [
            'before' => 'atau',
            'label' => 'mendaftar akaun',
        ],

        'request_password_reset' => [
            'label' => 'Lupa kata laluan?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'ID Pengguna',
        ],

        'password' => [
            'label' => 'Kata laluan',
        ],

        'remember' => [
            'label' => 'Ingat saya',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Log masuk',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Sila cuba lagi.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Terlalu banyak percubaan log masuk. Sila cuba lagi dalam :seconds saat.',
            'body' => 'Sila cuba lagi dalam masa :seconds saat.',
        ],

    ],

];
