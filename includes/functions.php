<?php 

function getFeed($feed_url) {

	$rss = simplexml_load_file($feed_url);
	echo '<h1>'. $rss->channel->title . '</h1>';



	foreach ($rss->channel->item as $item) {
		$title = $item->title;
		$title = strip_tags($title);

		$description = $item->description;
		$description = strip_tags($description);
		//Display Link as header, publication date
		echo '<h2><a href="'. $item->link .'"target="_blank">' . $title . "</a></h2>";
	   	echo "<p id='pubDate'>" . $item->pubDate . "</p>";
		$thumbAttr = " "; 

		//Function to check if an image file is included as enclosure
		
		if (property_exists($item, 'enclosure')){
			$thumbAttr = $item->enclosure;
		echo "<img src='" . $thumbAttr['url'] . "'id='thumbs' width='264' height='196' style='margin-bottom: 10px;'>";
		} else {
			$thumbAttr = " ";
		}
		
		//Display description and button to be redirected to the original article. The header also functions as a link which redirects. 

	   	echo "<p id='description'>" . $description . " <i><small>klik <a href=". $item->link ." target='_blank'>hier</a> voor meer</small></i></p>";
	   	echo "<hr>";

	} 
}
?>
