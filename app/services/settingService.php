<?php

namespace App\services;

class settingService
{
    public static function settingValues($app_info)
    {

        $data = [
            'APP_NAME_AR' => $app_info['APP_NAME_AR'],
            'APP_NAME_EN' => $app_info['APP_NAME_EN'],
            'PRIVACY_POLICY_AR' => $app_info['PRIVACY_POLICY_AR'],
            'PRIVACY_POLICY_EN' => $app_info['PRIVACY_POLICY_EN'],
            'ABOUT_AR' => $app_info['ABOUT_AR'],
            'ABOUT_EN' => $app_info['ABOUT_EN'],
            'TERMS_AR' => $app_info['TERMS_AR'],
            'TERMS_EN' => $app_info['TERMS_EN'],
            'FCM_SENDER_ID' => $app_info['FCM_SENDER_ID'],
            'FCM_SERVER_KEY' => $app_info['FCM_SERVER_KEY'],
            'RANDOM_CODE' => $app_info['RANDOM_CODE'],
            'STATIC_CODE' => $app_info['STATIC_CODE'],
            'FORMAL_EMAIL' => $app_info['FORMAL_EMAIL'],
            'MOBILE' => $app_info['MOBILE'],
            'WHATS_APP' => $app_info['WHATS_APP'],
            'FACEBOOK_URL' => $app_info['FACEBOOK_URL'],
            'TWITTER_URL' => $app_info['TWITTER_URL'],
            'INSTAGRAM_URL' => $app_info['INSTAGRAM_URL'],
            'LINKEDIN_URL' => $app_info['LINKEDIN_URL'],
            'SNAPCHAT_URL' => $app_info['SNAPCHAT_URL'],
            'YOUTUBE_URL' => $app_info['YOUTUBE_URL'],
            'address' => $app_info['address'],

            'APP_LOGO' => asset('storage/images/settings/' . $app_info['APP_LOGO']),

            //added_value
            'added_value' => $app_info['added_value'],

        ];

        return $data;
    }
}
