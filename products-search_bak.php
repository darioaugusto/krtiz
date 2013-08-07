<?php

header('Content-Type: text/html; charset=utf-8');

include('functions.php');

connect();

$product_type_plural_slug = $_GET["product_type_plural_slug"];

if (strlen($product_type_plural_slug)==0)
	$product_type_plural_slug = "filmes";

$product_type_plural = getProductTypePlural($product_type_plural_slug);

$product_type_id = getProductTypeIdByPlural($product_type_plural_slug);

$product_type_slug = getProductTypeSlug($product_type_id);

$term = $_GET["term"];

$redirect = 0;

if (strlen($term)==0) {
	$redirect = 1;
	$term = $_POST["term"];
}

$term = stripslashes($term);

$order = $_GET["order"];

if (strlen($order)==0)
	$order = "data";
	
$view = $_GET["view"];

if (strlen($view)==0) {
	
	if (isset($_COOKIE["view_mode"]))
		$view = $_COOKIE["view_mode"];
	else {
		$view = "posters";
		setcookie("view_mode","posters",0,"/");
	}
		
} else {
	if (isset($_COOKIE["view_mode"])) {
		if ($view != $_COOKIE["view_mode"])
			setcookie("view_mode",$view,0,"/");
	} else {
		setcookie("view_mode",$view,0,"/");
	}
}

$page = $_GET["page"];

$count = 20;

if (!isset($page)) {
	$begin = 0;
	$page = 1;
} else {
	if ($page > 1)
		$begin = ($page-1) * $count;
	else
		$begin = 0;
}

$scope = $_GET["scope"];

if (strlen($scope)==0)
	$scope = "titulos";

if ($redirect)
header( "Location: http://www.kritz.com.br/pesquisa/" . $product_type_plural_slug . "/" . $scope . "/" . urlencode($term) . "/" . $order . "/" . $view );
	
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8" />
<meta name="description" content="" />

<meta name="robots" content="noindex" />

<title><?=$term;?> | Pesquisa | Kritz</title>

<link href="http://www.kritz.com.br/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/<?=$order;?>/<?=$view;?>/<?=$page;?>" rel="canonical" />
<link rel="stylesheet" type="text/css" media="all" href="/style.css" />

<link rel="Shortcut Icon" type="image/ico" href="/images/favicon.ico" />
<script type="text/javascript" src="/functions.js" charset="UTF-8"></script>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'pt-BR'}
</script>

<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#appId=103284803140541&xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26624566-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<div id="fb-root"></div>

<div id="fade" onclick="javascript:unloadTrailer();" class="black_overlay"></div>

<iframe id="trailer-frame" class="white_content" class="position: absolute;" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>



<?

include("header.php");

include("navigation.php");

?>

<div id="main">

<div id="content">

<div class="rule-ad">

<?=getAd(2);?>

</div>

<section id="products-genre">

<article>

<header id="content-header">

<h2><?=$term;?></h2>

<?

// Esse negocio de (') escapadas está uma bagunça
$results_count = mysql_num_rows(searchProductByTerm(str_replace("'","%",stripslashes($term)), $begin, 0, $order, $product_type_id));

$products = searchProductByTerm(str_replace("'","%",stripslashes($term)), $begin, $count, $order, $product_type_id);

?>

<a href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/<?=$order;?>/detalhes/<?=$page;?>"><? if ($view == "detalhes") { ?><img src="/images/details_view_current.png" title="Detalhes" /><? } else { ?><img src="/images/details_view.png" title="Detalhes" /><? } ?></a>
<a href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/<?=$order;?>/posters/<?=$page;?>"><? if ($view == "posters") { ?><img src="/images/posters_view_current.png" title="Posters" /><? } else { ?><img src="/images/posters_view.png" title="Posters" /><? } ?></a>

<?
echo "<span class=\"sub-title\">" . $results_count . " resultados</span>";
?>

<div id="product-controls">

<!-- <a <? if ($order=="relevancia") echo "class=\"current\""; ?> href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/relevancia/<?=$view;?>">Por Relevância</a> -->
<a <? if ($order=="data") echo "class=\"current\""; ?> href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/data/<?=$view;?>">Por Data</a>
<a <? if ($order=="t-kritz") echo "class=\"current\""; ?> href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/t-kritz/<?=$view;?>">Por T-Kritz</a>
<!-- <a <? if ($order=="criticos") echo "class=\"current\""; ?> href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/criticos/<?=$view;?>">Por Avaliação dos Críticos</a> -->
<a <? if ($order=="usuarios") echo "class=\"current\""; ?> href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/usuarios/<?=$view;?>">Por Usuários</a>
<a <? if ($order=="nome") echo "class=\"current\""; ?> href="/pesquisa/<?=$product_type_plural_slug;?>/<?=$scope;?>/<?=$term;?>/nome/<?=$view;?>">Por Nome</a>

</div>

<div class="clear"></div>

</header>

<?



if ($results_count == 0) {

	echo "<p><span class=\"warning\">Não foi encontrado nenhum resultado. Tente novamente.</span></p>";
	
} else {

while ($ppr_row = mysql_fetch_assoc($products)) {
	
	$product_type_slug = getProductTypeSlug($ppr_row["id_product_type"]);
	
	$release_date = explode("-",$ppr_row["release_date"]);
	
	$home_release_date = explode("-",$ppr_row["home_release_date"]);

	//$grade = getProductReviewGrade($ppr_row["id_product"]);
	$grade = $ppr_row["grade"];
	
	if ($grade<0)
		$evaluation = 0;
	else
		$evaluation = round($grade);
	
	if ($grade<0) {
		$grade_class = "none";
	} else {
		$grade_class = ceil($evaluation/10)*10;
	}
	
	if ($view == "detalhes") {
	
	?>
			
	<div class="product-review-item review-item">
	
	<div class="product-review-item-image"><a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>"><img src="<?=$ppr_row["image"];?>" width="<?=$product_image_average_width[$product_type_slug];?>"></a></div>
	
	<span class="grade"><span class="number c<?=$grade_class;?>"><? if ($grade<0) echo "N/A"; else echo $evaluation; ?></span></span>
	
	<a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>"><strong><?=stripslashes($ppr_row["title"])?></strong></a><br/> 
	
<?
	
	echo "<div class=\"product-review-item-date-below\">";
		
	if (sizeof($release_date)==3) {
		echo $release_date[2] . " de " . mb_strtolower(getMonth($release_date[1]),"utf-8") . " de " . $release_date[0];
	} else {
		echo $home_release_date[2] . " de " . mb_strtolower(getMonth($home_release_date[1]),"utf-8") . " de " . $home_release_date[0];
	}
	
	$classification_row = getClassification($ppr_row["id_classification"]);
	
	echo " &nbsp;" . $classification_row["short_name"] . " &nbsp;" . $ppr_row["runtime"] . " min.";
	
	echo "</div>";
	
	?>
	
	<div class="product-review-item-summary"><?=stripText(strip_tags(stripslashes($ppr_row["summary"])),160);?>
	
	<a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>">Mais</a>
	
	<? if (strlen($ppr_row["trailer"])>0) { ?>
	| <a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>/midia/<?=getDefaultTrailerId($ppr_row["id_product"],1);?>">Trailer</a>
	<? } ?>
	
	<? if (existProductTheaterShows($ppr_row["id_product"])) { ?>
	| <a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>/cinemas-e-horarios">Cinemas e horários</a>
	<? } ?>
	
	</div>
	
	<div class="clear"></div>
	
	</div>

<?
	
	} elseif ($view == "posters") {
		
		?>
		
		<div class="new-releases-item poster-item">
		<div class="poster-item-image">
	<div class="poster-item-image-box">
	<span class="poster-item-image-play"></span>
	<div class="poster-item-full-info">
	<div class="header">
	<div class="title"><a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>"><?=stripText(stripslashes($ppr_row["title"]),30);?></a></div>
	<? $classification_row = getClassification($ppr_row["id_classification"]);
	
	if (sizeof($release_date)==3) {
		echo $release_date[2] . " de " . mb_strtolower(getMonth($release_date[1]),"utf-8") . " de " . $release_date[0];
	} else {
		echo $home_release_date[2] . " de " . mb_strtolower(getMonth($home_release_date[1]),"utf-8") . " de " . $home_release_date[0];
	}
	
	?>
	 &nbsp;<?=$classification_row["short_name"];?>&nbsp; <?=$ppr_row["runtime"];?> min.
	</div>
	<div class="info">
	<div class="summary"><?=stripText(strip_tags(stripslashes($ppr_row["summary"])), 160)?> <a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>">Mais</a></div>
	<?
	
	$product_people = getProductPeopleByType($ppr_row["id_product"],getPersonTypeId("elenco-principal"));

	if (mysql_num_rows($product_people)>0) {

	?>
	
	<strong>Elenco:</strong> 
	
	<?

	$first = true;
	$b = 0;
		
	while ($pp_row = mysql_fetch_assoc($product_people)) {
		
		if ($b>1) {
			echo "...";
			break;
		}
			
		if ($first) {
			echo "<a href=\"/artista/" . $pp_row["slug"] . "\">" . stripslashes($pp_row["name"]) . "</a>";
			$first = false;
		} else
			echo ", <a href=\"/artista/" . $pp_row["slug"] . "\">" . stripslashes($pp_row["name"]) . "</a>";
		$b++;
	}
	
	}
	
	?>
	
	<br/><strong>Diretor(es):</strong>
	
	<?
	
	$product_people = getProductPeopleByType($ppr_row["id_product"],getPersonTypeId("diretor"));
	
	$first = true;
		
	$b = 0;
	
	while ($pp_row = mysql_fetch_assoc($product_people)) {
		
		if ($b>1) {
			echo "...";
			break;
		}
		
		if ($first) {
			echo "<a href=\"/artista/" . $pp_row["slug"] . "\">" . stripslashes($pp_row["name"]) . "</a>";
			$first = false;
		} else
			echo ", <a href=\"/artista/" . $pp_row["slug"] . "\">" . stripslashes($pp_row["name"]) . "</a>";
		$b++;			
	}

?>

	<? 
	
	$critics_count = getProductCriticReviewsCount($ppr_row["id_product"]);
	
	$users_count = getProductUserReviewsCount($ppr_row["id_product"]);
	
	$comments_count = getUserCommentsCount($ppr_row["id_product"],1);
	
	echo "<div class=\"links\"><a href=\"/" . $product_type_slug . "/" . $ppr_row["slug"] . "-t" . $ppr_row["id_product"] . "/criticas\">" . $critics_count . " crítico(s)</a> | ";
	echo "<a href=\"/" . $product_type_slug . "/" . $ppr_row["slug"] . "-t" . $ppr_row["id_product"] . "/resenhas-de-usuarios\">" . $users_count . " usuário(s)</a> | ";
	echo "<a href=\"/" . $product_type_slug . "/" . $ppr_row["slug"] . "-t" . $ppr_row["id_product"] . "/comentarios\">" . $comments_count . " comentário(s)</a></div>";
	
	?>
	
	<div class="controls">
	<? if (strlen($ppr_row["trailer"])>0) { ?>
	<a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>/midia/<?=getDefaultTrailerId($ppr_row["id_product"],1);?>" title="Assista ao trailer"><img src="/images/play.png" height="32" /></a>
	<? } ?>
	<? if (existProductTheaterShows($ppr_row["id_product"])) { ?>
	&nbsp;<a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>/cinemas-e-horarios" title="Cinemas e horários"><img src="/images/popcorn.png" height="32" alt="Cinemas e horários" /></a>
	<? } ?>
	
	<?
	
	$product_genres = getProductGenres($ppr_row["id_product"]);
		
	$first = true;
	
	echo "<span class=\"genres\">";
	
	$b = 0;
	
	while ($pg_row = mysql_fetch_assoc($product_genres)) {

		if ($b>1) {
			echo "...";
			break;
		}
		
		if ($first) {
				echo "<a href=\"/navegacao/" . $product_type_plural_slug . "/genero/" . $pg_row["slug"] . "\">" . stripslashes($pg_row["name"]) . "</a>";
				$first = false;
			} else
				echo ", <a href=\"/navegacao/" . $product_type_plural_slug . "/genero/" . $pg_row["slug"] . "\">" . stripslashes($pg_row["name"]) . "</a>";
		$b++;	
		}
	
	echo "</span>";
		
	?>
	
	</div>
	
	</div>
	</div>
	</div>
		<a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>"><img src="<?=$ppr_row["image"];?>" width="<?=$product_image_width[$product_type_slug];?>" alt="Poster" /></a><br/>
		</div>
		<span class="grade"><span class="number c<?=$grade_class;?>"><? if ($grade<0) echo "N/A"; else echo $evaluation; ?></span></span> <a href="/<?=$product_type_slug;?>/<?=$ppr_row["slug"];?>-t<?=$ppr_row["id_product"];?>"><strong><?=stripText(stripslashes($ppr_row["title"]),30);?></strong></a>
		</div>
		
		<?
		
		$c = $c + 1;
		
		if ($c == 4) {
			$c = 0;
			echo "<div class=\"clear\"></div>";
		}
		
	}
	
}

}

?>

<div class="clear"></div>

<div id="bottom-results-pagination">

<?
	$max_pages = ceil($results_count / $count);

	$i = 1;

	$points = false;
	
	if ($max_pages > 1) {
	
	while ($i <= $max_pages) {
		if ($max_pages <= 11) {
			if ($i == $page)
				echo "<a class=\"current\" href=\"javascript:return false;\">" . $i . "</a> ";
			else
				echo "<a href=\"/pesquisa/" . $product_type_plural_slug . "/" . $scope . "/" . $term . "/" . $order . "/" . $view . "/" . $i . "\">" . $i . "</a> ";
		} else {
			if (($i >= ($page-3)) && ($i <= ($page+3))) {
				if ($i == $page) {
					$points = false;
					echo "<a class=\"current\" href=\"javascript:return false;\">" . $i . "</a> ";
				} else {
					echo "<a href=\"/pesquisa/" . $product_type_plural_slug . "/" . $scope . "/" . $term . "/" . $order . "/" . $view . "/" . $i . "\">" . $i . "</a> ";
				}
			} else {
				if (($i < 3) || ($i > ($max_pages - 2))) {
					echo "<a href=\"/pesquisa/" . $product_type_plural_slug . "/" . $scope . "/" . $term . "/" . $order . "/" . $view . "/" . $i . "\">" . $i . "</a> ";
				} else {
					if (!$points) {
						echo " ... ";
						$points = true;
					}
				}
			}			
		}
		$i++;
	}
	
	}
?>

</div>

<footer>

</footer>

</article>

</section>

</div><!-- #content -->

</div><!-- #main -->

<?

include("footer.php");

?>

</body>

</html>

<?php

disconnect();

?>