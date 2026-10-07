<?php

function getCategories()
{
    $categories = [
        [
            "id" => 1,
            "name" => "Fiksi",
            "description" => "Buku cerita dan karya imajinatif.",
            "total_books" => 12
        ],
        [
            "id" => 2,
            "name" => "Non-Fiksi",
            "description" => "Buku berdasarkan fakta dan informasi nyata.",
            "total_books" => 8
        ],
        [
            "id" => 3,
            "name" => "Teknologi",
            "description" => "Buku tentang teknologi dan komputer.",
            "total_books" => 15
        ],
        [
            "id" => 4,
            "name" => "Sejarah",
            "description" => "Buku tentang peristiwa sejarah.",
            "total_books" => 5
        ]
    ];

    return $categories;
}

function getCategory()
{
    $category = [
        "id" => 1,
        "name" => "Fiksi",
        "description" => "Buku cerita dan karya imajinatif.",
        "total_books" => 12
    ];

    return $category;
}