<?php

function route($method, $path)
{
    $routes = [
        'GET' => [
            'recipe/get' => 'getAllRecipes',
        ],
        'POST' => [
            'recipe/create' => 'createRecipe',
        ]
    ];

    if (isset($routes[$method][$path])) {
        $handler = $routes[$method][$path];
        if (function_exists($handler)) {
            return $handler();
        } else {
            return ['error' => 'Handler not implemented'];
        }
    }

    return ['error' => 'Unknown route'];
}

function getAllRecipes()
{
    return [
        ['title' => 'Pfannkuchen', 'zutaten' => ['Mehl', 'Milch', 'Ei']],
        ['title' => 'Kartoffelsalat', 'zutaten' => ['Kartoffeln', 'Essig', 'Öl']]
    ];
}

function createRecipe()
{
    $data = json_decode(file_get_contents('php://input'), true);
    // In Datenbank speichern etc.
    return ['success' => true, 'data' => $data];
}
