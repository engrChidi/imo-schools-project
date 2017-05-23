<?php

    namespace App\Traits;
    use GuzzleHttp\Exception\GuzzleException;
    use GuzzleHttp\Client;
    use GuzzleHttp\Psr7;
    use GuzzleHttp\Exception\RequestException;
    use App\User;

    trait SmsActivationTrait
    {
        private $SMS_SENDER = "ImoSchools";
        private $RESPONSE_TYPE = 'json';

        public function initiateSmsActivation($user_phone_number, $OTP){
            $isError = 0;
            $errorMessage = true;

            //Your message to send, Adding URL encoding.
            $message = "Welcome to Imoschools web application. Your OTP is : $OTP";

            //Preparing post parameters
            $postData = array(
                'username' => config('settings.username_sms'),
                'password' => config('settings.password_sms'),
                'mobiles' => $user_phone_number,
                'message' => $message,
                'sender' => $this->SMS_SENDER,
                'response' => $this->RESPONSE_TYPE
            );

            $url = "http://portal.bulksmsnigeria.net/api/";

            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
            ));


            //Ignore SSL certificate verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


            //get response
            $output = curl_exec($ch);

            //Print error if any
            if (curl_errno($ch)) {
                $isError = true;
                $errorMessage = curl_error($ch);
            }
            curl_close($ch);
            if($isError){
                return array('error' => 1 , 'message' => $errorMessage);
            }else{
                return array('error' => 0 );
            }
        }
    }