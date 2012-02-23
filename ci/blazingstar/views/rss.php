<?php
   // Include the file that does all the work
   include("libaries/RSSParser.php");

   // This is the URL to the actual RSS feed. Change this value
   // if you want to show a different feed.
   $url="http://www.wired.com/news/feeds/rss2/0,2610,,00.xml";

   // Create an instance of the rssFeed object, passing it
   // the URL of the feed
   $rss=new rssFeed($url);

   // If there was an error getting the data
   if($rss->error){
      // Show the error
      print "<h1>Error:</h1>\n<p><strong>$rss->error</strong></p>";
   }else{

      // Otherwise, we have the data, so we call the parse method
      $rss->parse();

      // The showHeading can accept a paramater that will be used
      // as the tag to wrap the heading. In this case, we're wrapping
      // the title in an <h1> tag
      $rss->showHeading("h1");

      // Display the image if there is one
      $rss->showImage("left");

      // If the RSS feed provides a link
      if($rss->link){
         // Display it
         print "<p>Provided courtesy of:<br>\n";
         $rss->showLink();
      }

      // Display the description
      $rss->showDescription();

      // Show the news stories
      $rss->showStories();
   }
?>