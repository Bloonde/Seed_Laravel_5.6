<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 17/10/2018
 * Time: 7:48
 */
return [
    /**
     * Define groups of privileges and privileges of each profiles
     */
    'profile_managment' => [
        'update_our_profile'
    ],
    'customer_ticket_managment' => [
        'store_new_ticket',
        'update_our_ticket',
        'delete_our_ticket'
    ],
    'admin_ticket_managment' => [
        'store_new_ticket',
        'update_ticket',
        'delete_ticket'
    ]
];