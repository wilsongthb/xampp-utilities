<form method="POST">
	<textarea name="content"></textarea>
	<button type="submit">Guardar</button>
</form>
<pre>
<?php
$file_name = 'content.txt';
$new_content = isset($_POST['content']) ? $_POST['content'] : false;
$content = file_get_contents($file_name);
if($new_content){
	$content .= PHP_EOL . $new_content;
}
file_put_contents($file_name, $content);

echo $content;
