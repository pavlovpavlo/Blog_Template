<?php  
	function articlesAll($link)
	{
		$query = "SELECT * FROM articles ORDER BY id DESC";
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));

		$count = mysqli_num_rows($result);
		$articles = array();

		for($i = 0; $i <$count; $i++)
		{
			$row = mysqli_fetch_assoc($result);
			$articles[] = $row;
		}

		return $articles;
	}
	function articleGet($id_article, $link)
	{
		$query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));
		$article = mysqli_fetch_assoc($result);

		return $article;
	}
	function articlesNew($link, $title, $date, $content)
	{
		$title = trim($title);
		$content = trim($content);

		if($title == '')
			return false;

		$query = sprintf("INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')", mysqli_real_escape_string($link, $title),/*екранация строки чтобы обезапасить от SQL иньекций*/ mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));
	
		return true;
	}
	function articlesEdit($link, $id, $title, $date, $content)
	{
		$title = trim($title);
		$content = trim($content);
		$date = trim($date);
		$id = (int)$id;

		if($title == '')
			return false;

		$query = sprintf("UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'", mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $content), mysqli_real_escape_string($link, $date), $id);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));
	
		return mysqli_affected_rows($link); /*Количество строк сколько отредактировано*/
	}
	function articlesDelete($id,$link)
	{
		$id = $id;

		if($id == 0)
			return false;

		$query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
		$result = mysqli_query($link, $query);

		if(!$result)
			die(mysqli_error($link));
	
		return mysqli_affected_rows($link); /*Количество строк*/
	}
	function articlesIntro($text)
	{
		return mb_substr($text, 0 , mb_strpos($text, "."));
	}

?>