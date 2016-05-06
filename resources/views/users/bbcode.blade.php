<?php
require '/nbbc.php';
$bb=new bbcode();
$bb->AddRule('youtube',  array(
    'mode'=>BBCODE_MODE_ENHANCED,
    'template'=>'<iframe class="youtube-player" type="text/html" width="640" height="385" src="https://www.youtube.com/embed/{$_content}" frameboarder="0"></iframe>',
    'class'=>'block',
    'allow_in'=>null
            
));
$content=$_POST['search'];
$output ="[youtube]smlx68w2UnM[/youtube]";
$result= $bb->Parse($output);
echo $result;

?>
<!doctype html>
<html>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input  type="text" name="search1" placeholder="search">
            <input  type="submit" name="search" placeholder="search" value="search">
        </form>
    </body>
</html>