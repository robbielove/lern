<?php

return [

    'record'=>[
        'table'=>'vendor_tylercd100_lern_exceptions',
    ],

    'notify'=>[
        /**
         * The default name of the monolog logger channel
         */
        'channel'=>'Tylercd100\LERN',

        /**
         * When using the default message body this will also include the stack trace
         */
        'includeExceptionStackTrace'=>true,
        
        /**
         * mail, pushover, slack, flowdock and/or hipchat
         */
        'drivers'=>['mail'],

        /**
         * Mail settings
         */
        'mail'=>[
            'to'  =>'to@address.com',
            'from'=>'from@address.com',
        ],

        /**
         * Pushover settings
         */
        'pushover'=>[
            'token' => env('PUSHOVER_APP_TOKEN'),
            'user'  => env('PUSHOVER_USER_KEY'),
            'sound' => 'siren',
        ],

        /**
         * Slack settings
         */
        'slack'=>[
            'token'   => env('SLACK_APP_TOKEN'), //https://api.slack.com/web#auth
            'channel' => env('SLACK_CHANNEL', '#exceptions'), //Dont forget the '#'
            'username'=> env('SLACK_USERNAME', 'LERN'), //The 'from' name
        ],

        /**
         * HipChat settings
         */
        'hipchat'=>[
            'token' => env('HIPCHAT_APP_TOKEN'),
            'room'  => 'room',
            'name'  => 'name',
            'notify'=> true,
        ],

        /**
         * Flowdock settings
         */
        'flowdock'=>[
            'token' => env('FLOWDOCK_APP_TOKEN'),
        ],

        /**
         * Fleephook settings
         */
        'fleephook'=>[
            'token' => env('FLEEPHOOK_APP_TOKEN'),
        ]
    ],
    
];