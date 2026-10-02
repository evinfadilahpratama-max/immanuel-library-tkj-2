<?php

function getBooks() {
    return [
        [
            'id' => 1, 
            'title' => 'Belajar Pemrograman PHP', 
            'category_id' => 1, 
            'author_id' => 1
        ],
        [
            'id' => 2, 
            'title' => 'Algoritma dan Struktur Data', 
            'category_id' => 1, 
            'author_id' => 2
        ]
    ];
}

function getBook() {
    // Mengembalikan satu data buku saja (simulasi)
    return [
        'id' => 1, 
        'title' => 'Belajar Pemrograman PHP', 
        'category_id' => 1, 
        'author_id' => 1
    ];
}