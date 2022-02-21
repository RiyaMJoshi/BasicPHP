<!-- 
    Author: Riya Joshi
    For: Simform Practice
    Course: PHP XML Tutorial
-->
<head><title>Create XML using PHP</title></head>
<?php

// This PHP file creates an XML file given specific nodes and attributes.

// Create DOM Document
$dom = new DOMDocument();
$dom->version = '1.0';
$dom->encoding = 'utf-8';
$dom->formatOutput = true;

// filename to be created
$xml_file_name = 'movies.xml';
/*
Movies
    movie id=''
        title
        year
        genre
        ratings
    movie id=''
        title
        year
        genre
        ratings
*/
// Generate Root and child Elements in DOM
$root = $dom->createElement('Movies'); // Root Element
    $movie_node = $dom->createElement('movie'); // First Child of Root
    $attr_movie_id = new DOMAttr('movie_id', '1672');
    $movie_node->setAttributeNode($attr_movie_id);

        // Children of 'Movie' node
        $child_node_title = $dom->createElement('Title','The Campaign'); // title
        $movie_node->appendChild($child_node_title);

        $child_node_year = $dom->createElement('Year','2015'); // year
        $movie_node->appendChild($child_node_year);

        $child_node_genre = $dom->createElement('Genre','Suspense Thriller'); // genre
        $movie_node->appendChild($child_node_genre);

        $child_node_ratings = $dom->createElement('Ratings','7.2'); // ratings
        $movie_node->appendChild($child_node_ratings);
    
    // Append 'Movie' node to the 'Root' node
    $root->appendChild($movie_node);

// Append 'Root' node to the 'DOM' Element
$dom->appendChild($root);

// Save this 'DOM' to an XML File

if($dom->save($xml_file_name)){
    // Display Successful Saving Message
    echo "<h3><a href='".$xml_file_name."'> $xml_file_name </a> has been created Successfully!</h3>";
}

?>