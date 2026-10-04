<?php

$categories = [
    [
        "id" => 1,
        "name" => "Fiksi",
        "description" => "Buku cerita dan karya imajinatif."
    ],
    [
        "id" => 2,
        "name" => "Sejarah",
        "description" => "Buku mengenai sejarah."
    ],
    [
        "id" => 3,
        "name" => "Teknologi",
        "description" => "Buku mengenai teknologi."
    ]
];

$category = [
    "id" => 1,
    "name" => "Fiksi",
    "description" => "Buku cerita dan karya imajinatif."
];

function getCategories()
{
    global $categories;

    return $categories;
}

function getCategory()
{
    global $category;

    return $category;
}