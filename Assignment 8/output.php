<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap  link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="output.css">
    <title>Rss Website</title>
</head>
<body>
<?php

class FeedRss
{
    private $rssUrl;

    public function __construct($rssUrl)
    {
        $this->rssUrl = $rssUrl;
    }

    public function validationRssFeed()
    {

        libxml_use_internal_errors(true);

        $rss_url = simplexml_load_file($this->rssUrl);

        $html = "";

        if ($rss_url === false) {
            echo "Failed loading RSS feed due to : ";
            foreach (libxml_get_errors() as $error) {
                echo "\t <b>" . $error->message . "</b>";
            }
        } else {
            echo "<div class='main-body'";
            echo "<div class='box-body'>";
            for ($i = 0; $i < 50; $i++) {
                $title = $rss_url->channel->item[$i]->title;
                $link = $rss_url->channel->item[$i]->link;
                $description = $rss_url->channel->item[$i]->description;
                $pubDate = $rss_url->channel->item[$i]->pubDate;

                $html .= "<a href='$link'><h3>$title</h3></a>";
                $html .= "<p>$description</p>";
                $html .= "<br /><span class='data'>$pubDate<hr /></span>";
                
            }
            echo $html;
            echo "</div>";
            echo "</div>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $feedUrl = $_POST['urlname'];
    $rssfeed1 = new FeedRss($feedUrl);

    //function calling
    $rssfeed1->validationRssFeed();
}

?>
</body>
</html>

