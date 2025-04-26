<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {

        $loream = 'It is in fact part of the Latin gibberish that printers use to fill in space in a layout temporarily whilst awaiting the arrival of the
    final text, so that the client can have an idea in advance of what the finished page will look like!';

        $this->create_new_config('APP_NAME_AR', 'Numo X');
        $this->create_new_config('APP_NAME_EN', 'Numo X');

        $this->create_new_config('APP_DESC_AR', null);
        $this->create_new_config('APP_DESC_EN', null);

        $this->create_new_config('MECHANISM_AR', $loream);
        $this->create_new_config('MECHANISM_EN', $loream);

        $this->create_new_config('PRIVACY_POLICY_AR', $loream);
        $this->create_new_config('PRIVACY_POLICY_EN', $loream);

        $this->create_new_config('ABOUT_AR', $loream);
        $this->create_new_config('ABOUT_EN', $loream);

        $this->create_new_config('TERMS_AR', $loream);
        $this->create_new_config('TERMS_EN', $loream);

        $this->create_new_config('SMTP_HOST', null);
        $this->create_new_config('SMTP_PORT', null);
        $this->create_new_config('SMTP_EMAIL', null);
        $this->create_new_config('SMTP_PASSWORD', null);

        $this->create_new_config('FCM_SENDER_ID', '291657883239');
        $this->create_new_config('FCM_SERVER_KEY', 'AAAAQ-gqHmc:APA91bHr9ff3_wJ3FC-incXSfjVhH7L_lldBJb7guGv9F2yJR7z9c55fMuTdgnkzMAEYYGav0nmPbG5T7w0UPlo5slXyUvKz1lpHCkoTKhrp7jUygVKReEJLUpNSyrMqOqsnwVImiyvP');

        $this->create_new_config('RANDOM_ACTIVATION_CODE', 'false');
        $this->create_new_config('STATIC_ACTIVATION_CODE', '1234');

        $this->create_new_config('RANDOM_CODE', 'false');
        $this->create_new_config('STATIC_CODE', '1111');

        $this->create_new_config('RANDOM_RESET_CODE', 'false');
        $this->create_new_config('STATIC_RESET_CODE', '1234');

        $this->create_new_config('FORMAL_EMAIL', 'sami@numo.sa');
        $this->create_new_config('MOBILE', '+966 0550500180');

        $this->create_new_config('WHATS_APP', 'https://web.whatsapp.com/');
        $this->create_new_config('FACEBOOK_URL', 'https://www.facebook.com/');
        $this->create_new_config('TWITTER_URL', 'https://twitter.com/');
        $this->create_new_config('INSTAGRAM_URL', 'www.instagram.com');
        $this->create_new_config('LINKEDIN_URL', 'www.linkedin.com');
        $this->create_new_config('YOUTUBE_URL', 'www.youtube.com');
        $this->create_new_config('SNAPCHAT_URL', 'https://www.snapchat.com/en-GB');
        $this->create_new_config('address', ' الرياض و الدائرى الشرقى مخرج 10 , المملكة العربية السعودية');
        $this->create_new_config('GMAIL_URL', null);

        $this->create_new_config('SMS_PROVIDER_TYPE', null);
        $this->create_new_config('SMS_PROVIDER_SENDER', null);
        $this->create_new_config('SMS_PROVIDER_MOBILE', null);
        $this->create_new_config('SMS_PROVIDER_PASSWORD', null);

        $this->create_new_config('APP_LOGO', 'logo1.png');
        $this->create_new_config('LOGIN_IMAGE', 'logo1.png');

        $this->create_new_config('added_value', 0);

    }

    public function create_new_config($key, $value)
    {
        Setting::create([
            'key' => $key,
            'value' => $value,
        ]);
    }
}
