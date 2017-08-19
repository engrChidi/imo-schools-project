<?php
    /**
     * Created by PhpStorm.
     * User: Oluyemi
     * Date: 5/16/17
     * Time: 5:02 AM
     */

    return [
        /*
         * Is email activation required
         */
        'activation' => env('ACTIVATION', true),

        /**
         * Credentials for sending SMS to users
         */

        'username_sms' => env('SMS_USERNAME'),

        'password_sms' => env('SMS_PASSWORD')
    ];