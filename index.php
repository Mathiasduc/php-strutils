<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php-strUtils</title>
</head>
<body>
	<?php 
	class strUtils{
		public $modifStr = "";
		private $_str = "undefined string";
		function __construct($argstr){
			if(!$argstr){
				echo "You might want to pass a string to manipulate";
			}else{
				$this->_str = $argstr;
			}
		}
		protected function resetModifStr(){
			$this->modifStr = $this->_str;
		}
		public function bold()
		{
			$this->modifStr = "<b>$this->modifStr</b>";
			return ("<b>$this->_str</b>");
		}
		public function italic()
		{	
			$this->modifStr = "<i>$this->modifStr</i>";
			return ("<i>$this->_str</i>");
		}
		public function underline()
		{
			$this->modifStr = "<u>$this->modifStr</u>";
			return ("<u>$this->_str</u>");
			
		}
		public function capitalize(){
			return ucfirst(strtolower($this->_str));
		}
		public function uglify()
		{
			$this->resetModifStr();
			$this->underline();
			$this->italic();
			$this->bold();
			$result = $this->modifStr;
			$this->resetModifStr();
			return $result;
		}
	}

	/*	include 'strUtils.php';*/

	$mystr = new strUtils('php','is', ' awesome !');
	$test = new strUtils("TROP GETTHO!")
	?>
	<?= "bold:" . $mystr->bold() . "<br>" ?>
	<?= "italic: " . $mystr->italic()."<br>" ?>
	<?= "underline: " . $mystr->underline()."<br>" ?>
	<?= "capitalize: " . $mystr->capitalize()."<br>" ?>
	<?= "ugly: " . $mystr->uglify() . "<br>" ?>
	<?php var_dump($mystr->modifStr) ?>


</body>
</html>	