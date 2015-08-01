<?php

class Article {
    public $title;
    public $text;
    public function view() {
        echo $this->title;
    }
}

class News extends Article {

}

$a = new News();
$a->title = 'Header';
$a->view();