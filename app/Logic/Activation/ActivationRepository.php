<?php

    /**
     * Created by PhpStorm.
     * User: Oluyemi
     * Date: 5/16/17
     * Time: 4:09 AM
     */
    namespace App\Logic\Activation;

    use App\Activation;
    use App\Notifications\SendActivationEmail;
    use App\User;
    use Carbon\Carbon;

    class ActivationRepository
    {
        public function createTokenAndSendEmail(User $user)
        {

            if ($user->activated) { //if user changed activated email to new one

                $user->update([
                    'activated' => false
                ]);

            }

            // Limit number of activation attempts to 3 in 24 hours window
            $activations = Activation::where('user_id', $user->id)
                ->where('created_at', '>=', Carbon::now()->subHours(24))
                ->count();

            if ($activations >= 3) {
                return true;
            }

            // Create new Activation record for this user/email
            $activation = new Activation;
            $activation->user_id = $user->id;
            $activation->token = str_random(64);
            $activation->save();

            // Send activation email notification
            $user->notify(new SendActivationEmail($activation->token));


        }

        public function deleteExpiredActivations()
        {

            Activation::where('created_at', '<=', Carbon::now()->subHours(72))->delete();

        }
    }