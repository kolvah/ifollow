<?php

add_action('wp_ajax_inquiry', 'paymentForm');
add_action('wp_ajax_nopriv_inquiry', 'paymentForm');

function paymentForm()
{

    if (!$_POST['email']) {
        wp_send_json([
            'error' => 'Не введен email',
        ]);
    }

    $userData = [
        'email' => $_POST['email'],
        'meta' => [
            'account_link' => $_POST['account_link'] ?: '',
            'payment_type' => $_POST['payment_type'] ?: '',
            'social_account' => $_POST['social_account'] ?: '',
        ],
    ];

    wp_send_json(createUser($userData));
}

/**
 * @param $userData
 * @return array
 */
function createUser($userData)
{
    if (!is_array($userData) || empty($userData)) {
        return [
            'error' => 'Нет данных',
        ];
    }

    $userID = email_exists($userData['email']);
    if (!$userID) {
        $randomPassword = wp_generate_password(12, false);
        $userID = wp_create_user($userData['email'], $randomPassword, $userData['email']);

        if (is_wp_error($userID)) {
            return [
                'error' => $userID->get_error_message()
            ];
        }

        if (is_array($userData['meta']) && !empty($userData['meta'])) {
            foreach ($userData['meta'] as $key => $meta) {
                if ($meta !== '') {
                    update_user_meta($userID, $key, $meta);
                }
            }
        }

        wp_mail($userData['email'], 'Пароль', 'Твой пароль: ' . $randomPassword);

        return [
            'user' => $userID,
            'password' => $randomPassword
        ];

    } else {
        $user = get_user_by('email',$userData['email']);

        if (is_array($userData['meta']) && !empty($userData['meta'])) {
            foreach ($userData['meta'] as $key => $meta) {
                if ($meta !== '') {
                    update_user_meta($user->ID, $key, $meta);
                }
            }
        }

        return  [
            'user' => $user->user_email
        ];
    }
}