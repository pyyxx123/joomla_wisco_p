<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.wisco
 *
 * @copyright   Copyright (C) 2014 - 2016 www.wisco.com.cn. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Add Stylesheets
$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<title>首页</title>
</head>
<body>
	<div id="container">
		<div id="header">
		<jdoc:include type="modules" name="header" style="none" />
		<jdoc:include type="modules" name="nav" style="none" />
		</div>
		<div id="main">
				<div id="lside">
					<div class="subtitle">
						<img src="" alt="" />
						<h1>核心业务</h1>
						<a href="aaa">more</a>
					</div>
					<div class="four">
						<h2>电子商务类网站建设</h2>
						<img src=""  alt="" />
						<ul>
							<li><a>方便的订单管理1</a></li>
							<li><a>方便的订单管理2</a></li>
							<li><a>方便的订单管理3</a></li>
							<li><a>方便的订单管理4</a></li>
						</ul>
					</div>
					<div class="four">
						<h2>电子商务类网站建设</h2>
						<img src=""  alt="" />
						<ul>
							<li><a>方便的订单管理1</a></li>
							<li><a>方便的订单管理2</a></li>
							<li><a>方便的订单管理3</a></li>
							<li><a>方便的订单管理4</a></li>
						</ul>
					</div>
					<div class="four">
						<h2>电子商务类网站建设</h2>
						<img src=""  alt="" />
						<ul>
							<li><a>方便的订单管理1</a></li>
							<li><a>方便的订单管理2</a></li>
							<li><a>方便的订单管理3</a></li>
							<li><a>方便的订单管理4</a></li>
						</ul>
					</div>
					<div class="four">
						<h2>电子商务类网站建设</h2>
						<img src=""  alt="" />
						<ul>
							<li><a>方便的订单管理1</a></li>
							<li><a>方便的订单管理2</a></li>
							<li><a>方便的订单管理3</a></li>
							<li><a>方便的订单管理4</a></li>
						</ul></div>
				</div>
				<div id="rside">
					<div class="subtitle">
						<img src="" alt="" />
						<h1>核心业务</h1>
						<a href="aaa">more</a>
					</div>
					<ul id="art">
						<li>文章1</li>
						<li>文章2</li>
						<li>文章3</li>
						<li>文章4</li>
						<li>文章4</li>
					</ul>
				</div>
		</div>
		<div id="footer">
			<jdoc:include type="modules" name="footer" style="none" />
		</div>
	</div>

</body>
</html>