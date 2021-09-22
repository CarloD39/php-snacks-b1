<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo testo testo testo post1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo testo testo testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo testo testo testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo testo testo testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo testo testo testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo testo testo testo post 6'
        ]
    ],
];


$postsKeys = array_keys($posts);

for($x = 0; $x < count($postsKeys); $x++) {

    $originalKey = $postsKeys[$x];

    echo "{$originalKey}<br/>";


    for($i = 0; $i < count($posts[$originalKey]); $i++) {
        
        $post = $posts[$originalKey][$i];
        
        echo "<h2>{$post['title']}</h2>";
        echo "<p>{$post['text']}</p>";
        echo "<div>{$post['author']}</div><hr/>";
    }
    
   

}

