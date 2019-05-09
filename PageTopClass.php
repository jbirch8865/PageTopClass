<?php
include 'vendor\autoload.php';

class Pagehead extends HTMLElement
{
	public $metatag;
	public $jquery;
	public $basejavascript;
	public $basecss;
	public $title;
	
	function __construct($Title, $charset = "utf-8",$viewportMobile = true,$Jquery = true) 
	{
		parent::__construct('head');
		$this->metatag = new METAtag();
		$this->metatag->CreateAttribute("charset",$charset);
		if($viewportMobile)
		{
			$this->metatag->CreateAttribute("name","viewport");
			$this->metatag->CreateAttribute("content","width=device-width, initial-scale=1.0");
		}		
		if($Jquery)
		{
			$this->jquery = new SCRIPTtag("//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js",true);
		}
		$this->basejavascript = new SCRIPTtag("javascript.js",true);
		$this->basecss = new LINKtag("style.css","text/css");
		$this->basecss->CreateAttribute("rel","stylesheet");
		$this->title = new TITLEtag($Title);
	}

}

<header>
	<div id = "TopLogo">
	<nav>
		<ul id = "TopNavul">
		  <li><a id = "navDispatch" href="#"></a></li>
		  <li><a id = "navFlaggers" href="#"></a></li>
		  <li><a id = "navClient" href="#"></a></li>
		</ul>	
	</nav>
	</div>

</header>

class Pageheader extends HTMLElement
{
	function __construct() 
	{
		parent::__construct('head');
		$this->metatag = new METAtag();
		$this->metatag->CreateAttribute("charset",$charset);
		if($viewportMobile)
		{
			$this->metatag->CreateAttribute("name","viewport");
			$this->metatag->CreateAttribute("content","width=device-width, initial-scale=1.0");
		}		
		if($Jquery)
		{
			$this->jquery = new SCRIPTtag("//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js",true);
		}
		$this->basejavascript = new SCRIPTtag("javascript.js",true);
		$this->basecss = new LINKtag("style.css","text/css");
		$this->basecss->CreateAttribute("rel","stylesheet");
		$this->title = new TITLEtag($Title);
	}
	
}
?>