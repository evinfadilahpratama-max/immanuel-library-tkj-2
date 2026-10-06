<?php

function getCategories()
{
    $categories = [
        [
            "id" => 1,
            "name" => "Fiksi",
            "description" => "Buku cerita dan karya imajinatif."
        ],
        [
            "id" => 2,
            "name" => "Non-Fiksi",
            "description" => "Buku berdasarkan fakta dan informasi nyata."
        ],
        [
            "id" => 3,
            "name" => "Teknologi",
            "description" => "Buku tentang teknologi dan komputer."
        ],
        [
            "id" => 4,
            "name" => "Sejarah",
            "description" => "Buku tentang peristiwa sejarah."
        ]
    ];

    return $categories;
}

function getCategory()
{
    $category = [
        "id" => 1,
        "name" => "Fiksi",
        "description" => "Buku cerita dan karya imajinatif."
    ];

    return $category;
}   