<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
	'password' => [
        'expired' => [
            'title'   => 'Reset Password',
            'content' => [
                'confirm_new_password' => 'Confirm New Password',
                'current_password'     => 'Current Password',
                'new_password'         => 'New Password',
                'reset_password'       => 'Reset Password',
                'return_to_homepage'   => 'Return to homepage',
            ],
            'message' => [
                'not_match_with_old_password'   => 'The current password is not match with old password.',
                'password_changed_successfully' => 'Password changed successfully',
                'your_password_has_expired'     => 'Your password has expired, please change it.',
            ],
        ],
    ],
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
];
