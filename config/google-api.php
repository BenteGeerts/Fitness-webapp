<?php
return [
    'application_name' => env('GOOGLE_APP_NAME'),
    'client_id' => env('GOOGLE_CLIENT_ID'),
    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
    'redirect' => env('GOOGLE_REDIRECT_URI'),
    'scopes' => [
        'https://www.googleapis.com/auth/fitness.activity.read',
        'https://www.googleapis.com/auth/fitness.activity.write'
    ],
    'access_type' => 'offline',
    'approval_prompt' => 'force',
    'prompt' => 'consent',
];
