<?php

class Post{

	public $title;
	public $author;
	public $published;

	public function __construct($title,$author,$published)
	{
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', 'SB', true),
	new Post('My Second Post', 'SB', true),
	new Post('My Third Post', 'SS', true),
	new Post('My Fourth Post', 'WE', false)
];

$publishedPosts = array_filter($posts, function($post){
	return $post->published;
});

$unPublishedPosts = array_filter($posts, function($post){
	return ! $post->published;
});

//var_dump($unPublishedPosts);

$modified = array_map( function($post){
	return ['title' => $post->title];
}, $posts);

var_dump($modified);



$title = array_column($posts, 'author', 'title');

//var_dump($title);




