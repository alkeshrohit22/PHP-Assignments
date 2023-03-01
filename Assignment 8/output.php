<?php

class FeedRss {
    private $rssUrl;

    public function __construct($rssUrl) {
        $this->rssUrl = $rssUrl;
    }

    public function validationRssFeed() {

        libxml_use_internal_errors(true);

        $rss_url = simplexml_load_file($this->rssUrl);

        if ($rss_url === false) {
            echo "Failed loading RSS feed due to : ";
            foreach(libxml_get_errors() as $error) {
                echo "\t <b>".$error->message."</b>";
            }
        } else {
            echo "<pre>";
            print_r($rss_url);
            echo "</pre>";
        }
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $feedUrl = $_POST['urlname'];
    $rssfeed1 = new FeedRss($feedUrl);

    //function calling
    $rssfeed1->validationRssFeed();
}


//EOF