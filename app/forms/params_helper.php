<?php
function createUserParams(): array
{
    $options = [
        'name' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'surname' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'password_confirm' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ]
    ];

    return filter_input_array(INPUT_POST, $options);
}

function authUserParams(): array
{
    $options = [
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ]
    ];

    return filter_input_array(INPUT_POST, $options);
}
function removeProductParam()
{
    return filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
}
function editProductParams(): array
{
    $options = [
        'product_id' => FILTER_VALIDATE_INT,
        'name' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'description' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'quantity' => FILTER_VALIDATE_INT,
        'price' => FILTER_VALIDATE_FLOAT,
        'is_main' => FILTER_VALIDATE_BOOLEAN
    ];

    return filter_input_array(INPUT_POST, $options);
}