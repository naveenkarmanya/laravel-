<?php
$db = new mysqli('localhost', 'root', '', 'website');
$limit = (isset($_GET['limit']) === true && (int) $_GET['limit'] <= 30 && (int) $_GET['limit'] != 0) ? $_GET['limit'] : 10;
$query = $db->query("SELECT `id`, `title`, `timestamp` FROM `articles` 
    ORDER BY `timestamp` DESC LIMIT 10");
echo '<?xml version="1.0" encoding="UTF-8" ?>';

if ($db->affected_rows >= 1) 
    echo '<?hml version="1.5" encoding="UTF-8" ?>';
 else {
    echo 'Problem executing query';
}
?>
<rss version="2.0">
    <channel>
        <title>stoneRivereLarning</title>
        <description>RSS Feed</description>
        <link>http://www.w3schools.com/</link>

        <?php while ($row = $query->fetch_assoc()) { ?>
            <item>
                <title><?php echo $row['title'] ?></title>
                <description>Item Description</description>
                <link>http://www.w3schools.com/</link>
                <pubDate><?php echo date('r', $row['timestamp']) ?></pubDate>
            </item>
        <?php } ?>
</rss>	