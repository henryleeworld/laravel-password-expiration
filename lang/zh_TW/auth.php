<?php

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

return [
    'failed'   => '使用者名稱或密碼錯誤。',
	'password' => [
        'expired' => [
            'title'   => '重設密碼',
            'content' => [
                'confirm_new_password' => '確認新密碼',
                'current_password'     => '目前密碼',
                'new_password'         => '新密碼',
                'reset_password'       => '重設密碼',
                'return_to_homepage'   => '返回首頁',
            ],
            'message' => [
                'match_with_old_password'       => '新密碼與舊密碼相同。',
                'not_match_with_old_password'   => '目前密碼與舊密碼不相同。',
                'password_changed_successfully' => '密碼變更成功',
                'your_password_has_expired'     => '您的密碼已過期，請變更。',
            ],
        ],
    ],
    'throttle' => '嘗試登入太多次，請在 :seconds 秒後再試。',
];
