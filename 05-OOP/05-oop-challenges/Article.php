
<?php
	class Article {
		public $title;
		public $content;
		private $published = false;
		
		public function __construct($title, $content) {
			$this->title = $title;
			$this->content = $content;
		}
		
		public function publish() {
			$this->published = true;
		}
		
		public function isPublished() {
			return $this->published;
		}
	}
	
	$article1 = new Article('hello', 'hello world!!');
	$article2 = new Article('world', 'world hwllo!!');
	
	$article1->publish();
	echo $article1->isPublished();
	echo $article2->isPublished();

  // print_r($article1);
?>