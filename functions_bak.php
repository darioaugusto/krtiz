<?

/***********************************************************

	Kritz PHP functions - 8/10/2011 - Rodrigo Ferreira

***********************************************************/

//	image folders
$product_image_dir = "/images/products/";
$user_image_dir = "/images/users/";
$person_image_dir = "/images/people/";
$company_image_dir = "/images/companies/";
$publication_image_dir = "/images/publications/";
$theater_company_image_dir = "/images/theater-companies/";
$media_dir = "/images/media/";

//	image sizes

$general_image_width = 640;
$general_image_height = 320;

$product_image_width = array("filme" => 180, "livro" => 180, "album" => 200);
$product_image_height = array("filme" => 260, "livro" => 257, "album" => 200);

$product_image_thumbnail_width = array("filme" => 53, "livro" => 53, "album" => 59);

$product_image_average_width = array("filme" => 98, "livro" => 98, "album" => 109);
$product_image_average_height = array("filme" => 141, "livro" => 98, "album" => 109);

$product_image_normal_width = array("filme" => 139, "livro" => 120, "album" => 134);
$product_image_normal_height = array("filme" => 200, "livro" => 120, "album" => 134);

$user_image_width = 180;
$user_image_height = 240;

$user_image_thumbnail_width = 53;
$user_image_thumbnail_height = 71;

$user_image_average_width = 98;

$user_image_small_height = 35;

$person_image_width = 180;
$person_image_height = 240;

$person_image_thumbnail_width = 53;
$person_image_average_width = 98;

$company_image_width = 180;
$company_image_height = 240;

$company_image_thumbnail_width = 53;
$company_image_average_width = 98;

$publication_image_width = 180;
$publication_image_height = 240;

$publication_image_thumbnail_width = 53;
$publication_image_thumbnail_height = 71;

$publication_image_average_width = 98;

$publication_image_small_height = 35;

$theater_company_image_thumbnail_width = 53;
$theater_company_image_average_width = 98;

$channel_image_width = 180;
$channel_image_thumbnail_width = 50;
$channel_image_average_width = 98;

$utf_zone = 3;

/**************************

	Helpful functions

**************************/

$months = array(
	"Janeiro",
	"Fevereiro",
	"Março",
	"Abril",
	"Maio",
	"Junho",
	"Julho",
	"Agosto",
	"Setembro",
	"Outubro",
	"Novembro",
	"Dezembro"
	);

$abr_months = array(
	"Jan",
	"Fev",
	"Mar",
	"Abr",
	"Mai",
	"Jun",
	"Jul",
	"Ago",
	"Set",
	"Out",
	"Nov",
	"Dez"
);

function getAd($type) {
	
	/*
	 * Sources: 1 - Google 
	 * 			2 - Lomadee
	 * 
	 * 			100 - Boo-box
	 * */
	
	if (getUserType($_COOKIE["user_id"]) == 5) {
		
		if ($type == 1) {
			return "<img src=\"/images/banner_1.gif\" width=\"300\" height=\"250\" />";
		} elseif ($type == 2) {
			return "<img src=\"/images/banner_2.gif\" width=\"728\" height=\"90\" />";
		}
		
	}
	
	//$source = rand(1, 3);
	$source = 1;
	
	if ($type == 1) { // 300 x 250 ad
		
		if ($source == 1) {
			$result = "<script type=\"text/javascript\"><!--
						google_ad_client = \"ca-pub-1737638627030249\";
						/* test */
						google_ad_slot = \"2315975538\";
						google_ad_width = 300;
						google_ad_height = 250;
						//-->
						</script>
						<script type=\"text/javascript\"
						src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
						</script>";
		} elseif ($source == 2) {
			
			//Dell - Banner Randomico
			
			$result = "<!-- LOMADEE - BEGIN -->
			<div style=\"width: 300 px;height: 250 px;overflow:hidden;\">
			<script type=\"text/javascript\" language=\"javascript\">
			lmd_source=\"24235789\";
			lmd_si=\"33563903\";
			lmd_pu=\"22510416\";
			lmd_c=\"BR\";
			lmd_wi=\"300\";
			lmd_he=\"250\";
			</script>
			<script src=\"http://image.lomadee.com/js/ad_lomadee.js\" type=\"text/javascript\" language=\"javascript\"></script>
			<a href=\"http://www.lomadee.com\" style=\"font-size:10px;\">
			<div align=\"right\">
			Lomadee, uma nova espécie na web. A maior plataforma de afiliados da América Latina.
			</div>
			</a>
			</div>
			<!-- LOMADEE - END -->";
			
		} elseif ($result == 3) {
			
			//Saraiva - Padrao
				
			$result = "<!-- LOMADEE - BEGIN -->
			<div style=\"width: 300 px;height: 250 px;overflow:hidden;\">
			<script type=\"text/javascript\" language=\"javascript\">
			lmd_source=\"24236520\";
			lmd_si=\"33563903\";
			lmd_pu=\"22510416\";
			lmd_c=\"BR\";
			lmd_wi=\"300\";
			lmd_he=\"250\";
			</script>
			<script src=\"http://image.lomadee.com/js/ad_lomadee.js\" type=\"text/javascript\" language=\"javascript\"></script>
			<a href=\"http://www.lomadee.com\" style=\"font-size:10px;\">
			<div align=\"right\">
			Lomadee, uma nova espécie na web. A maior plataforma de afiliados da América Latina.
			</div>
			</a>
			</div>
			<!-- LOMADEE - END -->";
			
		} elseif ($source == 100) {
			$result = "<script type=\"text/javascript\">
						bb_bid = \"1664164\";
						bb_lang = \"pt-BR\";
						bb_keywords = \"cinema, filme, crítica, estreia, dvd, blu-ray, resenha, notícia, trailer, pôster, locadora, lançamento\";
						bb_name = \"custom\";
						bb_limit = \"6\";
						bb_format = \"bbn\";
						</script>
						<script type=\"text/javascript\" src=\"http://static.boo-box.com/javascripts/embed.js\"></script>";
		}
		
	} elseif ($type == 2) { // 728 x 90 ad
		
		if ($source == 1) {
			$result = "<script type=\"text/javascript\"><!--
						google_ad_client = \"ca-pub-1737638627030249\";
						/* test1 */
						google_ad_slot = \"3167843444\";
						google_ad_width = 728;
						google_ad_height = 90;
						//-->
						</script>
						<script type=\"text/javascript\"
						src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
						</script>";
		} elseif ($source == 2) {
			
			//Dell - Banner randomico
			
			$result = "<!-- LOMADEE - BEGIN -->
			<div style=\"width: 728 px;height: 90 px;overflow:hidden;\">
			<script type=\"text/javascript\" language=\"javascript\">
			lmd_source=\"24236222\";
			lmd_si=\"33563903\";
			lmd_pu=\"22510416\";
			lmd_c=\"BR\";
			lmd_wi=\"728\";
			lmd_he=\"90\";
			</script>
			<script src=\"http://image.lomadee.com/js/ad_lomadee.js\" type=\"text/javascript\" language=\"javascript\"></script>
			<a href=\"http://www.lomadee.com\" style=\"font-size:10px;\">
			<div align=\"right\">
			Lomadee, uma nova espécie na web. A maior plataforma de afiliados da América Latina.
			</div>
			</a>
			</div>
			<!-- LOMADEE - END -->";
			
		} elseif ($source == 3) {
			
			//Saraiva - Padrao
			
			$result = "<!-- LOMADEE - BEGIN -->
			<div style=\"width: 728 px;height: 90 px;overflow:hidden;\">
			<script type=\"text/javascript\" language=\"javascript\">
			lmd_source=\"24236533\";
			lmd_si=\"33563903\";
			lmd_pu=\"22510416\";
			lmd_c=\"BR\";
			lmd_wi=\"728\";
			lmd_he=\"90\";
			</script>
			<script src=\"http://image.lomadee.com/js/ad_lomadee.js\" type=\"text/javascript\" language=\"javascript\"></script>
			<a href=\"http://www.lomadee.com\" style=\"font-size:10px;\">
			<div align=\"right\">
			Lomadee, uma nova espécie na web. A maior plataforma de afiliados da América Latina.
			</div>
			</a>
			</div>
			<!-- LOMADEE - END -->";
			
		} elseif ($source == 100) {
			$result = "<script type=\"text/javascript\">
						bb_bid = \"1664164\";
						bb_lang = \"pt-BR\";
						bb_keywords = \"cinema, filme, crítica, estreia, dvd, blu-ray, resenha, notícia, trailer, pôster, locadora, lançamento\";
						bb_name = \"custom\";
						bb_limit = \"8\";
						bb_format = \"bbb\";
						</script>
						<script type=\"text/javascript\" src=\"http://static.boo-box.com/javascripts/embed.js\"></script>";
		}
		
	}
	
	return $result;
	
}

function HSVtoRGB(array $hsv) {
	list($H,$S,$V) = $hsv;
	//1
	$H *= 6;
	//2
	$I = floor($H);
	$F = $H - $I;
	//3
	$M = $V * (1 - $S);
	$N = $V * (1 - $S * $F);
	$K = $V * (1 - $S * (1 - $F));
	//4
	switch ($I) {
		case 0:
			list($R,$G,$B) = array($V,$K,$M);
			break;
		case 1:
			list($R,$G,$B) = array($N,$V,$M);
			break;
		case 2:
			list($R,$G,$B) = array($M,$V,$K);
			break;
		case 3:
			list($R,$G,$B) = array($M,$N,$V);
			break;
		case 4:
			list($R,$G,$B) = array($K,$M,$V);
			break;
		case 5:
		case 6: //for when $H=1 is given
			list($R,$G,$B) = array($V,$M,$N);
			break;
	}
	//return array($R, $G, $B);
	return sprintf('#%02X%02X%02X', $R*255, $G*255, $B*255);
}

function stripText($str,$count) {
	if (strlen($str)<=($count+1))
		return $str;
	else
		return mb_substr($str,0,$count,"utf-8") . "...";
}

function clippedText($str,$count) {
	if (strlen($str)<=($count+1))
		return false;
	return true;
}

// Returns the months
	
function getMonths() {
	global $months;
	return $months; 
}

function getAbrMonths($month) {
	global $abr_months;
	return $abr_months[$month-1]; 
}

// return month

function getMonth($month) {
	global $months;
	return $months[$month-1];
}

// Returns a permanent link based on an input string

function getPermalink($str)
{
	if ($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
		$str = mb_convert_encoding($str, 'UTF-8');

    $str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\\1', $str);
    $str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
    $str = strtolower( trim($str, '-') );
    return $str;
}

function hashPassword($password) {
	
	$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

	return $salt . hash("sha256", $salt . $password);
	
}

function getVerdictText($grade) {
	if ($grade>90 && $grade<=100) {
		return "Você está diante de uma obra-prima da sétima arte.";
	} elseif ($grade>70 && $grade<=90) {
		return "Prepare-se para um ótimo entretenimento.";
	} elseif ($grade>50 && $grade<=70) {
		return "O filme é bom, mas faltou alguma coisa...";
	} elseif ($grade>30 && $grade<=50) {
		return "Será que vale a ida ao cinema?";
	} elseif ($grade>10 && $grade<=30) {
		return "Quem sabe debaixo de um cobertor em um dia chuvoso?";
	} elseif ($grade>=0 && $grade<=10) {
		return "Tem certeza de que não tem nada melhor pra fazer?";
	} elseif ($grade == (int)-1) {
		return "Sem temperatura ainda.";
	}
}

function formatDateTime($time) {
	
	$current = time();
	
	//diferenca em anos
	$diff_orig = abs($current - $time) / (60*60);
	$diff = round($diff_orig);

	if ($diff_orig >= 1) {
	
		if ($diff >= 24) {
			if (date("Y",$time) == date("Y",$current))
				return date("d",$time) . " " . mb_strtolower(getAbrMonths(date("m",$time)),"utf-8");
			else
				return date("d",$time) . " " . mb_strtolower(getAbrMonths(date("m",$time)),"utf-8") . " " . date("Y",$time);
		} elseif (($diff > 1) && ($diff < 24)) {
			return "há " . $diff . " horas";
		} elseif ($diff == 1) {
			return "há " . $diff . " hora";
		}

		
	} else {
			
		$diff_minutes_orig = $diff_orig * 60;
		$diff_minutes = round($diff_orig * 60);
			
		if ($diff_minutes_orig >= 1) { //diferenca em minutos
						
			if ($diff_minutes > 1) {
				return "há " . $diff_minutes . " minutos";
			} elseif ($diff_minutes == 1) {
				return "há " . $diff_minutes . " minuto";
			}
			
		} else {
		
				//diferenca em segundos
				$diff_seconds = round($diff_minutes_orig * 60);
				
				if ($diff_seconds > 1) {
					return "há " . $diff_seconds . " segundos";
				} elseif ($diff_seconds <= 1) {
					return "há " . $diff_seconds . " segundo";
				}
				
			}

			
		}
}

function formatDate($time) {
	
	$current = time();
	
	if ((date("Y",$time) == date("Y",$current))
	&& (date("m",$time) == date("m",$current))
	&&  (date("d",$time) == date("d",$current))) {
		return "hoje";
	} elseif ((date("Y",$time) == date("Y",$current))
	&& (date("m",$time) == date("m",$current))
	&&  (date("d",$time) == (date("d",$current)-1))) {
		return "ontem";
	} elseif ((date("Y",$time) == date("Y",$current))
	&& (date("m",$time) == date("m",$current))
	&&  (date("d",$time) == (date("d",$current)+1))) {
		return "amanhã";
	} else {
		if (date("Y",$time) == date("Y",$current))
				return date("d",$time) . " " . mb_strtolower(getAbrMonths(date("m",$time)),"utf-8");
			else
				return date("d",$time) . " " . mb_strtolower(getAbrMonths(date("m",$time)),"utf-8") . " " . date("Y",$time);
	}

}

/**************************

	Database functions

**************************/

$link = 0;

// connect to database
// TODO: Melhorar a forma como o usuário e senha do banco são armazenados

function connect() {
	global $link;
	$link = mysql_connect('internal-db.s135647.gridserver.com', 'db135647_admin', 'ricogloria') or die('Não foi possível conectar: ' . mysql_error());
	//$link = mysql_connect('localhost', 'root', '') or die('Não foi possível conectar: ' . mysql_error());
	mysql_select_db('db135647_kritz') or die('Banco de dados não encontrado.');
	mysql_set_charset('utf8',$link);
}

// disconnect from database

function disconnect() {
	global $link;
	mysql_close($link);
}

/********************************************

	Database functions : user functions

*********************************************/

// returns user types

function getUserTypes() {
	$result = mysql_query("select * from user_types");
	return $result;
}

// return user type

function getUserTypeName($user_type_id) {
	$result = mysql_query("select name from user_types where id_user_type = " . $user_type_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

// returns state names

function getStates() {
	$result = mysql_query("select * from states");
	return $result;
}

// signs user up

function signUpUser($name, $nickname, $email, $password, $gender, $birthday, $site, $user_type, $state, $image, $bio) {
	$name = trim(mysql_real_escape_string($name));
	$nickname = trim(mysql_real_escape_string($nickname));
	$email = trim(mysql_real_escape_string($email));
	//$password = mysql_real_escape_string($password);
	$gender = (int)$gender;
	$birthday = mysql_real_escape_string($birthday);
	$site = trim(mysql_real_escape_string($site));
	$user_type = (int)$user_type;
	$state = (int)$state;
	$image = mysql_real_escape_string($image);
	$bio = trim(mysql_real_escape_string($bio));
	
	$user_slug = getPermalink($nickname);

	if (strlen(trim($password))>0) {
	
		//hash
		$salt_hash = hashPassword($password);
			
		$salt = substr($salt_hash, 0, 64); //pega o salt da frente do hash
			
		$hash = substr($salt_hash, 64, 64); //SHA256
	
	} else {
		$hash = "";
		$salt = "";
	}
	
	return mysql_query("insert into users (name, slug, nickname, email, password, gender, birthday, site, id_user_type, id_state, image, bio, salt)
	values ('" . $name . "','" . $user_slug . "','" . $nickname . "','" . $email . "','" . $hash . "'," . $gender . ",'" . $birthday . "','" .
	$site . "'," . $user_type . "," . $state . ",'" . $image . "','" . $bio . "','" . $salt . "')");
}

// updates user

function updateUser($user_id, $name, $nickname, $email, $password, $gender, $birthday, $site, $user_type, $state, $image, $bio) {
	$name = trim(mysql_real_escape_string($name));
	$user_id = (int)$user_id;
	//$nickname = mysql_real_escape_string($nickname);
	$email = trim(mysql_real_escape_string($email));
	//$password = mysql_real_escape_string($password);
	$gender = (int)$gender;
	$birthday = mysql_real_escape_string($birthday);
	$site = trim(mysql_real_escape_string($site));
	$user_type = (int)$user_type;
	$state = (int)$state;
	$image = mysql_real_escape_string($image);
	$bio = trim(mysql_real_escape_string($bio));
	
	//$user_slug = getPermalink($name);
	
	if (strlen(trim($password))==0) {
		return mysql_query("update users set " .
		" name = '" . $name . "', email = '" . $email . "', gender = " . $gender . ", birthday = '" . $birthday . "', site = '" .
		$site . "', id_user_type = " . $user_type . ", id_state = " . $state . ", image = '" . $image . "', bio = '" . $bio . "' where id_user = " . $user_id);
	} else {
		
		//hash
		$salt_hash = hashPassword($password);
		
		$salt = substr($salt_hash, 0, 64); //pega o salt da frente do hash
		
		$hash = substr($salt_hash, 64, 64); //SHA256
		
		return mysql_query("update users set " .
		" name = '" . $name . "', email = '" . $email . "', password = '" . $hash . "', salt = '" . $salt . "', gender = " . $gender . ", birthday = '" . $birthday . "', site = '" .
		$site . "', id_user_type = " . $user_type . ", id_state = " . $state . ", image = '" . $image . "', bio = '" . $bio . "' where id_user = " . $user_id);
	}
}

// verifies if the given email already exists in database

function emailExists($email) {
	$email = mysql_real_escape_string($email);
	if (strlen(trim($email))==0)
		return 0;
	$result = mysql_query("select count(*) as number from users where email = '" . $email . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// logs user in

function logInUser($email, $password) {
	$email = mysql_real_escape_string($email);
	//$password = mysql_real_escape_string($password);
	//$result = mysql_query("select id_user, name, nickname, slug from users where email = '" . $email . "' and password = '" . $password . "'");
	
	$result = mysql_query("select salt, password from users where email = '" . $email . "'");	
	
	$row = mysql_fetch_array($result);
	
	if ($row["password"] == hash("sha256",$row["salt"] . $password)) {
		$result = mysql_query("select id_user, name, nickname, slug from users where email = '" . $email . "'");	
	
		$row = mysql_fetch_array($result);
	} else {
		unset($row);
	}
	
	return $row;
}

// updates user image

function updateUserImage($id, $image) {
	$id = (int)$id;
	$image = mysql_real_escape_string($image);
	mysql_query("update users set image = '" . $image . "' where id_user = " . $id);
}

// returns user

function getUser($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select * from users where id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row;
}

// returns user id from user slug

function getUserIdBySlug($user_slug) {
	$user_slug = mysql_real_escape_string($user_slug);
	$result = mysql_query("select id_user from users where slug = '" . $user_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_user"];
}

// verifies if user slug already exists

function userSlugExists($user_slug) {
	$user_slug = mysql_real_escape_string($user_slug);
	$result = mysql_query("select count(*) as number from users where slug = '" . $user_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// updates user slug

function updateUserSlug($id, $user_slug) {
	$id = (int)$id;
	$user_slug = mysql_real_escape_string($user_slug);
	mysql_query("update users set slug = '" . $user_slug . "' where id_user = " . $id);
}

function updateUserPassword($id, $salt, $hash) {
	$id = (int)$id;
	//$user_slug = mysql_real_escape_string($user_slug);
	mysql_query("update users set salt = '" . $salt . "', password = '" . $hash . "' where id_user = " . $id);
}

// inserts publications of a user

function insertUserPublications($user_id, $publications) {
	$user_id = (int)$user_id;
	foreach ($publications as $p) {
		mysql_query("insert into user_publication (id_user, id_publication) values (" . $user_id . "," . $p . ")");
	}
}

// updates publications of a user

function existUserPublication($user_id, $publication_id) {
	$user_id = (int)$user_id;
	$publication_id = (int)$publication_id;
	$result = mysql_query("select count(*) as number from user_publication where id_publication = " . $publication_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function updateUserPublications($user_id, $publications) {
	$user_id = (int)$user_id;
	
	if (sizeof($publications)==0)
	{
		mysql_query("delete from user_publication where id_user = " . $user_id);
		return;
	}
	
	$publications_str = implode(",",$publications);
	
	mysql_query("delete from user_publication where id_user = " . $user_id . " and id_publication not in (" . $publications_str . ")");
		
	foreach ($publications as $p) {
		if (!existUserPublication($user_id, $p))
			mysql_query("insert into user_publication (id_user, id_publication) values (" . $user_id . "," . $p . ")");
	}
}

function getUserPublications($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select * from publications p, user_publication up where up.id_user = " . $user_id . " and p.id_publication = up.id_publication");
	return $result;
}

function getUsers() {
	$result = mysql_query("select * from users");
	return $result;
}

// returns user type

function getUserType($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select id_user_type from users where id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["id_user_type"];
}

// returns user name

function getUserName($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select name from users where id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

// returns user nickname

function getUserNickname($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select nickname from users where id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["nickname"];
}

// returns user slug

function getUserSlug($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select slug from users where id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["slug"];
}

function getUserImage($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select image from users where id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["image"];
}

// returns critics

function getCritics() {
	$result = mysql_query("select * from users where id_user_type in (4) order by name asc");
	return $result;
}

function getCriticsByPublications($publications) {
	
	$first = 1;
	$publications_str = "";
	
	while ($publication_row = mysql_fetch_assoc($publications)) {
		if ($first) {
			$publications_str = $publication_row["id_publication"];
			$first = 0;
		} else {
			$publications_str = $publications_str . ", " . $publication_row["id_publication"];
		}
	}
	$result = mysql_query("select * from users u, user_publication up where u.id_user_type in (4) and u.id_user = up.id_user and up.id_publication in (" . $publications_str . ") order by name asc");
	return $result;
}

function getCriticsPages($begin, $count, $order) {
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "nome") {
		$order_by = "u.nickname asc";
	} elseif ($order == "avaliacao") {
		$order_by = "avaliacao desc";
	} elseif ($order == "criticas") {
		$order_by = "criticas desc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select u.*, (select count(*) from product_reviews pr where pr.id_user = u.id_user) as criticas, (select sum(pr2.grade) / count(*) from product_reviews pr2 where pr2.id_user = u.id_user) as avaliacao from users u where u.id_user_type in (4) order by " . $order_by . " " . $limit_text);
	return $result;
}

function getUserComments($generic_id, $generic_type_id, $begin, $count) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	//if ($order == "data") {
	$order_by = "uc.comment_date desc";
	//}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select uc.*, u.* from user_comments uc, users u where uc.id_generic = " . $generic_id . " and u.id_user = uc.id_user and uc.id_generic_type = " . $generic_type_id . " order by " . $order_by . " " . $limit_text );
	return $result;
}

/*function getUserCommentsByProductReview($product_review_id, $begin, $count) {
	$product_review_id = (int)$product_review_id;

	//if ($order == "data") {
	$order_by = "uc.comment_date desc";
	//}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;

	$result = mysql_query("select uc.*, u.* from user_comments uc, users u where uc.id_product_review = " . $product_review_id . " and u.id_user = uc.id_user order by " . $order_by . " " . $limit_text );
	return $result;
}*/

function getUserCommentsCount($generic_id, $generic_type_id) {
	$generic_id = (int)$generic_id;	
	$generic_type_id = (int)$generic_type_id;
	$result = mysql_query("select count(*) as number from user_comments where id_generic_type = " . $generic_type_id  . " and id_generic = " . $generic_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

/********************************************

	Database functions : product functions

*********************************************/

function getProductStates($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select distinct (s.id_state), s.acronym from states s, theater_show ts, cities c, theaters t where ts.id_product = " . $product_id . " and ts.id_theater = t.id_theater and t.id_city = c.id_city and c.id_state = s.id_state order by s.name asc");
	return $result;
}

function getProductCities($product_id, $state_id) {
	$product_id = (int)$product_id;
	$state_id = (int)$state_id;
	$result = mysql_query("select distinct (c.id_city), c.slug, c.name from theater_show ts, cities c, theaters t where ts.id_product = " . $product_id . " and ts.id_theater = t.id_theater and t.id_city = c.id_city and c.id_state = " . $state_id . " order by c.name asc");
	return $result;
}

// returns product classifications

function getClassifications() {
	$result = mysql_query("select * from classifications");
	return $result;
}

// returns a classification

function getClassification($classification_id) {
	$classification_id = (int)$classification_id;
	$result = mysql_query("select * from classifications where id_classification = " . $classification_id);
	$row = mysql_fetch_array($result);
	return $row;
}

// returns genres of a product type

function getGenres($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select * from genres g, product_type_genre ptg where ptg.id_product_type = " . $product_type_id . " and g.id_genre = ptg.id_genre order by g.name asc");
	return $result;
}

// returns genres of a product

function getProductGenres($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select g.id_genre, g.name, g.slug from genres g, product_genre pg where pg.id_product = " . $product_id . " and pg.id_genre = g.id_genre order by g.name asc");
	return $result;
}

// returns product people

function getProductPeople($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select p.*, pppt.*, pt.name as person_type_name from people p, product_person_person_type pppt, person_types pt where p.id_person = pppt.id_person and pppt.id_product = " . $product_id . " and pppt.id_person_type = pt.id_person_type order by pt.id_person_type, p.name asc");
	return $result;
}

// returns product companies

function getProductCompanies($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select c.*, pcct.*, ct.name as company_type_name from companies c, product_company_company_type pcct, company_types ct where c.id_company = pcct.id_company and pcct.id_product = " . $product_id . " and pcct.id_company_type = ct.id_company_type order by c.name asc");
	return $result;
}

function getVideos($generic_id, $generic_type_id) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$result = mysql_query("select pm.* from media pm where pm.id_generic = " . $generic_id . " and pm.id_media_type in (4,6) and pm.id_generic_type = " . $generic_type_id);
	return $result;
}

function getImages($generic_id, $generic_type_id) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$result = mysql_query("select pm.* from media pm where pm.id_generic = " . $generic_id . " and pm.id_media_type in (3,5) and pm.id_generic_type = " . $generic_type_id);
	return $result;
}

// returns product people of specific type

function getProductPeopleByType($product_id, $person_type_id) {
	$product_id = (int)$product_id;
	$person_type_id = (int)$person_type_id;
	$result = mysql_query("select p.name, p.slug from product_person_person_type pppt, people p where p.id_person = pppt.id_person and pppt.id_product = " . $product_id . " and pppt.id_person_type = " . $person_type_id . " order by p.name");
	return $result;
}

function getProductCompaniesByType($product_id, $company_type_id) {
	$product_id = (int)$product_id;
	$company_type_id = (int)$company_type_id;
	$result = mysql_query("select c.name, c.slug from product_company_company_type pcct, companies c where c.id_company = pcct.id_company and pcct.id_product = " . $product_id . " and pcct.id_company_type = " . $company_type_id . " order by c.name");
	return $result;
}

// returns product type id from a product type slug 

function getProductTypeId($product_type_slug) {
	$product_type_slug = mysql_real_escape_string($product_type_slug);
	$result = mysql_query("select id_product_type from product_types where slug = '" . $product_type_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_product_type"];
}

// returns product type name

function getProductTypeName($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select name from product_types where id_product_type = " . $product_type_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

// returns product type slug

function getProductTypeSlug($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select slug from product_types where id_product_type = " . $product_type_id);
	$row = mysql_fetch_array($result);
	return $row["slug"];
}

function getProductTypeSlugByProductId($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select pt.slug from product_types pt, products p where p.id_product = " . $product_id . " and p.id_product_type = pt.id_product_type");
	$row = mysql_fetch_array($result);
	return $row["slug"];
}

// returns product slug

function getProductSlug($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select slug from products where id_product = " . $product_id);
	$row = mysql_fetch_array($result);
	return $row["slug"];
}

// returns product name

function getProductName($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select title from products where id_product = " . $product_id);
	$row = mysql_fetch_array($result);
	return $row["title"];
}

function getProductOriginalName($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select original_title from products where id_product = " . $product_id);
	$row = mysql_fetch_array($result);
	return $row["original_title"];
}

// returns product type plural slug

function getProductTypePluralSlug($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select plural_slug from product_types where id_product_type = " . $product_type_id);
	$row = mysql_fetch_array($result);
	return $row["plural_slug"];
}

// returns product type attributes

function getProductTypeAttributes($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select * from attributes a, product_type_attribute pta where pta.id_product_type = " . $product_type_id . " and pta.id_attribute = a.id_attribute order by a.order");
	return $result;
}

// inserts a product

function insertProduct($product_type_id, $title, $original_title, $summary, $runtime, $image, $release_date, $year, $site, $country, $language, $edition, $isbn, $pages, $classification_id, $color, $trailer, $clip, $user_id, $home_release_date) {
	$product_type_id = (int)$product_type_id;
	$title = trim(mysql_real_escape_string($title));
	
	if (strpos($title,"O ")===0) {
		$title_2 = str_replace("O ","",$title);
		$article = "O";
	} elseif (strpos($title,"A ")===0) {
		$title_2 = str_replace("A ","",$title);
		$article = "A";
	} elseif (strpos($title,"Os ")===0) {
		$title_2 = str_replace("Os ","",$title);
		$article = "Os";
	} elseif (strpos($title,"As ")===0) {
		$title_2 = str_replace("As ","",$title);
		$article = "As";
	} elseif (strpos($title,"Um ")===0) {
		$title_2 = str_replace("Um ","",$title);
		$article = "Um";
	} elseif (strpos($title,"Uma ")===0) {
		$title_2 = str_replace("Uma ","",$title);
		$article = "Uma";
	} elseif (strpos($title,"Uns ")===0) {
		$title_2 = str_replace("Uns ","",$title);
		$article = "Uns";
	} elseif (strpos($title,"Umas ")===0) {
		$title_2 = str_replace("Umas ","",$title);
		$article = "Umas";
	} else {
		$title_2 = $title;
	}
	
	$original_title = trim(mysql_real_escape_string($original_title));
	$summary = trim(mysql_real_escape_string($summary));
	$runtime = (int)$runtime;
	$image = mysql_real_escape_string($image);
	//$release_date = mysql_real_escape_string($release_date);
	$year = (int)$year;
	$country = mysql_real_escape_string($country);
	$language = mysql_real_escape_string($language);
	$edition = (int)$edition;
	$isbn = mysql_real_escape_string($isbn);
	$pages = (int)$pages;
	$classification_id = (int)$classification_id;
	$user_id = (int)$user_id;
	$color = (int)$color;
	$trailer = trim(mysql_real_escape_string($trailer));
	$clip = trim(mysql_real_escape_string($clip));
	
	$site = trim(mysql_real_escape_string($site));
	
	//$home_release_date = mysql_real_escape_string($home_release_date);
	//$home_release = (int)$home_release;
	
	$grade = -1;
	$users_grade = -1;
	$critics_grade = -1;
	
	$product_slug = getPermalink($title);
	
	return mysql_query("insert into products (id_product_type, slug, title, title_2, article, original_title, summary, runtime, image, release_date, year, site, country, language, edition, isbn, pages, id_classification, color, trailer, clip, grade, users_grade, critics_grade, id_user, home_release_date)
	values(" . $product_type_id . ",'" . $product_slug . "','" . $title . "','" . $title_2 . "','" . $article . "','" . $original_title . "','" . $summary . "'," . $runtime . ",'" . $image . "'," . $release_date . "," .
	$year . ",'" . $site . "','" . $country . "','" . $language . "'," . $edition . ",'" . $isbn . "'," . $pages . "," . $classification_id . "," . $color . ",'" . $trailer . "','" . $clip . "'," . $grade . "," . $users_grade . "," . $critics_grade . "," . $user_id . "," . $home_release_date . ")");
	
}

// inserts a product

function updateProduct($product_id, $product_type_id, $title, $original_title, $summary, $runtime, $image, $release_date, $year, $site, $country, $language, $edition, $isbn, $pages, $classification_id, $color, $trailer, $clip, $user_id, $home_release_date) {
	$product_id = (int)$product_id;
	$product_type_id = (int)$product_type_id;
	//$title = mysql_real_escape_string($title);
	$original_title = trim(mysql_real_escape_string($original_title));
	$summary = trim(mysql_real_escape_string($summary));
	$runtime = (int)$runtime;
	$image = mysql_real_escape_string($image);
	//$release_date = mysql_real_escape_string($release_date);
	$year = (int)$year;
	$country = mysql_real_escape_string($country);
	$language = mysql_real_escape_string($language);
	$edition = (int)$edition;
	$isbn = mysql_real_escape_string($isbn);
	$pages = (int)$pages;
	$classification_id = (int)$classification_id;
	$user_id = (int)$user_id;
	$color = (int)$color;
	
	$trailer = trim(mysql_real_escape_string($trailer));
	$clip = trim(mysql_real_escape_string($clip));
	
	$site = trim(mysql_real_escape_string($site));
	
	//$home_release_date = mysql_real_escape_string($home_release_date);
	//$home_release = (int)$home_release;
	
	//$product_slug = getPermalink($title);
	
	return mysql_query("update products set " .
	"id_product_type = " . $product_type_id . ", original_title = '" . $original_title . "', summary = '" . $summary . "', runtime = " . $runtime . ", image = '" . $image . "', release_date = " . $release_date . ", year = " .
	$year . ", site = '" . $site . "', country = '" . $country . "', language = '" . $language . "', edition = " . $edition . ", isbn = '" . $isbn . "', pages = " . $pages . ", id_classification = " . $classification_id . ", color = " . $color . ", trailer = '" . $trailer . "', clip = '" . $clip . "', home_release_date = " . $home_release_date . " where id_product = " . $product_id);
	
}

// inserts genres of a product

function insertProductGenres($product_id, $genres) {
	$product_id = (int)$product_id;
	foreach ($genres as $g) {
		$g = mysql_real_escape_string($g);
		mysql_query("insert into product_genre (id_product, id_genre) values (" . $product_id . "," . $g . ")");
	}

}

// updates genres of a product

function updateProductGenres($product_id, $genres) {
	
	$product_id = (int)$product_id;
	
	if (sizeof($genres)==0)
		return;
	
	$genres_str = implode(",",$genres);
	
	mysql_query("delete from product_genre where id_product = " . $product_id . " and id_genre not in (" . $genres_str . ")");
	
	foreach ($genres as $g) {
		//$g = mysql_real_escape_string($g);
		if (!existProductGenre2($product_id, $g))
			mysql_query("insert into product_genre (id_product, id_genre) values (" . $product_id . "," . $g . ")");
	}

}

function existGenre($genre) {
	$genre = mysql_real_escape_string($genre);
	
	$result = mysql_query("select count(*) as number from genres where name = '" . $genre . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function existPerson($person) {
	$person = mysql_real_escape_string($person);
	
	$result = mysql_query("select count(*) as number from people where name = '" . $person . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function existProductGenre($product_id, $genre) {
	
	$product_id = (int)$product_id;
	$genre = mysql_real_escape_string($genre);
	
	$result = mysql_query("select count(*) as number from product_genre pg, genres g where pg.id_product = " . $product_id . " and pg.id_genre = g.id_genre and g.name = '" . $genre . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function existProductGenre2($product_id, $genre_id) {

	$product_id = (int)$product_id;
	$genre_id = (int)$genre_id;

	$result = mysql_query("select count(*) as number from product_genre where id_product = " . $product_id . " and id_genre = " . $genre_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}


function updateProductGenres2($product_id, $genres) {
	
	$product_id = (int)$product_id;
	
	if (sizeof($genres)==0)
		return;
			
	foreach ($genres as $g) {
		$g = trim(mysql_real_escape_string($g));
		if (existGenre($g)) {
			if (!existProductGenre($product_id, $g)) {
				$genre_id = getGenreIdByName($g);
				mysql_query("insert into product_genre (id_product, id_genre) values (" . $product_id . "," . $genre_id . ")");
			}
		}
	}
	
}

function existProductPersonPersonType($product_id, $person, $person_type) {
	
	$product_id = (int)$product_id;
	$person = mysql_real_escape_string($person);
	$person_type = (int)$person_type;
	
	$result = mysql_query("select count(*) as number from product_person_person_type pppt, people p where pppt.id_product = " . $product_id . " and pppt.id_person_type = " . $person_type . " and pppt.id_person = p.id_person and p.name = '" . $person . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function updateProductPeople($product_id, $actors, $directors, $writers) {
	
	$product_id = (int)$product_id;
	
	//if (sizeof($genres)==0)
	//	return;
			
	$actor_type = 3;
	$director_type = 1;
	
	
	foreach ($actors as $a) {
		$a = trim(mysql_real_escape_string($a));
		if (existPerson($a)) {
			if (!existProductPersonPersonType($product_id, $a, $actor_type)) {
				$actor_id = getPersonIdByName($a);
				mysql_query("insert into product_person_person_type (id_product, id_person, id_person_type) values (" . $product_id . "," . $actor_id . "," . $actor_type . ")");
			}
		} else {
			insertPerson($a,"","","","",0,"","/images/person-image.png",2);
			if (!existProductPersonPersonType($product_id, $a, $actor_type)) {
				$actor_id = getPersonIdByName($a);
				mysql_query("insert into product_person_person_type (id_product, id_person, id_person_type) values (" . $product_id . "," . $actor_id . "," . $actor_type . ")");
			}
		}
	}
	
	foreach ($directors as $a) {
		$a = trim(mysql_real_escape_string($a));
		if (existPerson($a)) {
			if (!existProductPersonPersonType($product_id, $a, $director_type)) {
				$director_id = getPersonIdByName($a);
				mysql_query("insert into product_person_person_type (id_product, id_person, id_person_type) values (" . $product_id . "," . $director_id . "," . $director_type . ")");
			}
		} else {
			insertPerson($a,"","","","",0,"","/images/person-image.png",2);
			if (!existProductPersonPersonType($product_id, $a, $director_type)) {
				$director_id = getPersonIdByName($a);
				mysql_query("insert into product_person_person_type (id_product, id_person, id_person_type) values (" . $product_id . "," . $director_id . "," . $director_type . ")");
			}
		}
	}
	
}

// inserts person-person types of a product

function insertProductPersonPersonTypes($product_id, $person_person_types) {
	$product_id = (int)$product_id;
	foreach ($person_person_types as $ppt) {
		$ppt_arr = explode("#",$ppt);
		$ppt_arr[0] = (int)$ppt_arr[0];
		$ppt_arr[1] = (int)$ppt_arr[1];
		$ppt_arr[2] = mysql_real_escape_string($ppt_arr[2]);
		mysql_query("insert into product_person_person_type (id_product, id_person, id_person_type, role) values (" . $product_id . "," . $ppt_arr[0] . "," . $ppt_arr[1] . ",'" . $ppt_arr[2] . "')");
	}
}

// inserts company-company types of a product

function insertProductCompanyCompanyTypes($product_id, $company_company_types) {
	$product_id = (int)$product_id;
	foreach ($company_company_types as $cct) {
		$cct_arr = explode("#",$cct);
		$cct_arr[0] = (int)$cct_arr[0];
		$cct_arr[1] = (int)$cct_arr[1];
		mysql_query("insert into product_company_company_type (id_product, id_company, id_company_type) values (" . $product_id . "," . $cct_arr[0] . "," . $cct_arr[1] . ")");
	}
}

// updates person-person types of a product

function updateProductPersonPersonTypes($product_id, $person_person_types) {
	
	$product_id = (int)$product_id;
	
	mysql_query("delete from product_person_person_type where id_product = " . $product_id);
		
	if (sizeof($person_person_types)==0)
		return;
	
	foreach ($person_person_types as $ppt) {
		$ppt_arr = explode("#",$ppt);
		$ppt_arr[0] = (int)$ppt_arr[0];
		$ppt_arr[1] = (int)$ppt_arr[1];
		$ppt_arr[2] = mysql_real_escape_string($ppt_arr[2]);
		mysql_query("insert into product_person_person_type (id_product, id_person, id_person_type, role) values (" . $product_id . "," . $ppt_arr[0] . "," . $ppt_arr[1] . ",'" . $ppt_arr[2] . "')");
	}
}

// updates company-company types of a product

function updateProductCompanyCompanyTypes($product_id, $company_company_types) {
	
	$product_id = (int)$product_id;
	
	mysql_query("delete from product_company_company_type where id_product = " . $product_id);
	
	if (sizeof($company_company_types)==0)
		return;
	
	foreach ($company_company_types as $cct) {
		$cct_arr = explode("#",$cct);
		$cct_arr[0] = (int)$cct_arr[0];
		$cct_arr[1] = (int)$cct_arr[1];
		mysql_query("insert into product_company_company_type (id_product, id_company, id_company_type) values (" . $product_id . "," . $cct_arr[0] . "," . $cct_arr[1] . ")");
	}
}

function getProduct($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select * from products where id_product = " . $product_id);
	$row = mysql_fetch_array($result);
	return $row;
}

// returns a product from a product slug

function getProductBySlug($product_slug) {
	$product_slug = mysql_real_escape_string($product_slug);
	$result = mysql_query("select * from products where slug = '" . $product_slug . "'");
	$row = mysql_fetch_array($result);
	return $row;
}

function getProductByTitleInTheaters($product_title) {
	
	global $utf_zone;
	
	$product_title = mysql_real_escape_string($product_title);
	$result = mysql_query("select * from products where replace(title,': ',' - ') = '" . str_replace(": "," - ",$product_title) . "' and ( ( TO_DAYS( TIMESTAMPADD( HOUR,-" . $utf_zone . ",UTC_TIMESTAMP() ) ) - TO_DAYS(release_date) ) <= 730 )");
	$row = mysql_fetch_array($result);
	return $row;
}

// updates the product image

function updateProductImage($id, $image) {
	$id = (int)$id;
	$image = mysql_real_escape_string($image);
	mysql_query("update products set image = '" . $image . "' where id_product = " . $id);
}

// returns product review grade

function getProductReviewGrade($product_id) {
	$product_id = (int)$product_id;	
	
	$result_critics_pro = mysql_query("select count(*) as number, sum(grade) as grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type in (4)");
	$row_critics_pro = mysql_fetch_array($result_critics_pro);

	//$result_critics_amateur = mysql_query("select count(*) as number, sum(grade) as grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type = 2");
	//$row_critics_amateur = mysql_fetch_array($result_critics_amateur);
	
	//$result_users = mysql_query("select count(*) as number, sum(grade) as grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type = 1");
	//$row_users = mysql_fetch_array($result_users);

	//if (($row_critics_pro["number"]==0) && ($row_critics_amateur["number"]==0) && ($row_users["number"]==0))
	//if (($row_critics_pro["number"]==0) && ($row_users["number"]==0))
	if ($row_critics_pro["number"]<3)
		return -1;
	
	//if ($row_critics_pro["number"]==0)
	//	$critics_pro_grade = 0;
	//else
	$critics_pro_grade = ($row_critics_pro["grade"])*10;
	
	/*if ($row_critics_amateur["number"]==0)
		$critics_amateur_grade = 0;
	else
		$critics_amateur_grade = ($row_critics_amateur["grade"])*10;*/
		
	//if ($row_users["number"]==0)		
	//	$users_grade = 0;
	//else
	//	$users_grade = ($row_users["grade"])*10;
	
	return $critics_pro_grade / $row_critics_pro["number"]; 
		
	//return ((10 * $critics_pro_grade) + (1 * $users_grade)) /
	//((10 * $row_critics_pro["number"]) + (1 * $row_users["number"]));

}

// returns product critics review grade

function getProductCriticsReviewGrade($product_id) {
	$product_id = (int)$product_id;	
	
	$result_critics_pro = mysql_query("select count(*) as number, sum(grade) as grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type in (4)");
	$row_critics_pro = mysql_fetch_array($result_critics_pro);

	//$result_critics_amateur = mysql_query("select count(*) as number, sum(grade) as grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type = 2");
	//$row_critics_amateur = mysql_fetch_array($result_critics_amateur);

	//if (($row_critics_pro["number"]==0) && ($row_critics_amateur["number"]==0))
	if (($row_critics_pro["number"]==0))
		return -1;
	
	if ($row_critics_pro["number"]==0)
		$critics_pro_grade = 0;
	else
		$critics_pro_grade = ($row_critics_pro["grade"])*10;
	
	/*if ($row_critics_amateur["number"]==0)
		$critics_amateur_grade = 0;
	else
		$critics_amateur_grade = ($row_critics_amateur["grade"])*10;*/
	
	return ((10 * $critics_pro_grade)) /
	((10 * $row_critics_pro["number"]));

}


// returns product users review grade

function getProductUsersReviewGrade($product_id) {
	$product_id = (int)$product_id;	
	
	$result_users = mysql_query("select count(*) as number, sum(grade) as grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type = 1");
	$row_users = mysql_fetch_array($result_users);

	if ($row_users["number"]==0)
		return -1;
		
	if ($row_users["number"]==0)		
		$users_grade = 0;
	else
		$users_grade = ($row_users["grade"])*10;
	
	return ($users_grade) / $row_users["number"];

}

// returns product critic reviews

function getProductCriticReviews($product_id, $begin, $count, $order) {
	$product_id = (int)$product_id;
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "pr.review_date desc";
	} elseif ($order == "avaliacao") {
		$order_by = "pr.grade desc";
	} elseif ($order == "critico") {
		$order_by = "u.name asc";
	} elseif ($order == "publicacao") {
		$order_by = "p.name asc";
	} elseif (($order=="maislidas") || ($order=="acessos")) {
		$order_by = "pr.clicks desc, pr.review_date desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select pr.*, u.*, p.slug as publication_slug, p.name as publication_name, p.language as publication_language from product_reviews pr, users u, publications p where pr.id_product = " . $product_id . " and u.id_user = pr.id_user and u.id_user_type in (4) and pr.id_publication = p.id_publication order by " . $order_by . " " . $limit_text );
	return $result;
}

// returns product critic reviews count

function getProductCriticReviewsCount($product_id) {
	$product_id = (int)$product_id;	
	$result = mysql_query("select count(*) as number from product_reviews pr, users u where pr.id_product = " . $product_id . " and u.id_user = pr.id_user and u.id_user_type in (4)");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// returns product user reviews

function getProductUserReviews($product_id, $begin, $count, $order) {
	$product_id = (int)$product_id;	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "pr.review_date desc";
	} elseif ($order == "avaliacao") {
		$order_by = "pr.grade desc";
	} elseif (($order=="maislidas") || ($order=="acessos")) {
		$order_by = "pr.clicks desc, pr.review_date desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	//$result = mysql_query("select pr.*, u.* from product_reviews pr, users u where pr.id_product = " . $product_id . " and u.id_user = pr.id_user and u.id_user_type = 1 and length(pr.summary)>0 order by " . $order_by . " " . $limit_text);
	$result = mysql_query("select pr.*, u.* from product_reviews pr, users u where pr.id_product = " . $product_id . " and u.id_user = pr.id_user and u.id_user_type = 1 order by " . $order_by . " " . $limit_text);
	return $result;
}

// returns product user reviews count

function getProductUserReviewsCount($product_id) {
	$product_id = (int)$product_id;	
	//$result = mysql_query("select count(*) as number from product_reviews pr, users u where pr.id_product = " . $product_id . " and u.id_user = pr.id_user and u.id_user_type = 1 and length(pr.summary)>0");
	$result = mysql_query("select count(*) as number from product_reviews pr, users u where pr.id_product = " . $product_id . " and u.id_user = pr.id_user and u.id_user_type = 1");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// returns product reviews by user

function getUserReviews($user_id, $begin, $count, $order) {
	$user_id = (int)$user_id;
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "pr.review_date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "t_kritz desc";
	} elseif ($order == "avaliacao") {
		$order_by = "pr.grade desc";
	} elseif ($order == "filme") {
		$order_by = "pd.title asc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select pr.*, u.*, pd.grade as t_kritz from product_reviews pr, users u, products pd where pr.id_user = " . $user_id . " and u.id_user = pr.id_user and pr.id_product = pd.id_product order by " . $order_by . " " . $limit_text);
	return $result;
}

// returns product reviews by user

function getPublicationReviews($publication_id, $begin, $count, $order) {
	$publication_id = (int)$publication_id;
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "pr.review_date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "t_kritz desc";
	} elseif ($order == "avaliacao") {
		$order_by = "pr.grade desc";
	} elseif ($order == "filme") {
		$order_by = "pd.title asc";
	} elseif ($order == "critico") {
		$order_by = "u.name asc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select pr.*, p.*, pd.grade as t_kritz, u.name from product_reviews pr, publications p, products pd, users u where pr.id_publication = " . $publication_id . " and p.id_publication = pr.id_publication and pr.id_product = pd.id_product and pr.id_user = u.id_user and u.id_user_type in (4) order by " . $order_by . " " . $limit_text);
	return $result;
}

// inserts a product review

function insertReview($product_id, $review, $summary, $grade, $url, $user_id, $publication_id, $publication_date) {
	$grade = (float)$grade;
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$review = mysql_real_escape_string($review);
	$summary = mysql_real_escape_string($summary);
	$publication_date = mysql_real_escape_string($publication_date);
	$url = mysql_real_escape_string($url);
	$publication_id = (int)$publication_id;
	
	return mysql_query("insert into product_reviews (id_product, review, summary, grade, url, id_user, id_publication, review_date) " .
	" values (" . $product_id . ",'" . $review . "','" . $summary . "'," . $grade . ",'" . $url . "'," . $user_id . "," . $publication_id . ",'" . $publication_date . "')");
	
}

function insertComment($generic_id, $generic_type_id, $comment, $user_id, $comment_date) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$user_id = (int)$user_id;
	$comment = mysql_real_escape_string($comment);
	$comment_date = mysql_real_escape_string($comment_date);
	
	return mysql_query("insert into user_comments (id_generic, id_generic_type, comment, id_user, comment_date) " .
	" values (" . $generic_id . "," . $generic_type_id . ",'" . $comment . "'," . $user_id . ",'" . $comment_date . "')");
	
}

function updateReview($product_review_id, $product_id, $review, $summary, $grade, $url, $user_id, $publication_id, $publication_date) {

	$product_review_id = (int)$product_review_id;
	$grade = (float)$grade;
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$review = mysql_real_escape_string($review);
	$summary = mysql_real_escape_string($summary);
	$publication_date = mysql_real_escape_string($publication_date);
	$url = mysql_real_escape_string($url);
	$publication_id = (int)$publication_id;
	
	return mysql_query("update product_reviews set id_product = " . $product_id . ", review = '" . $review . "', summary = '" . $summary . "', grade = " . $grade . ", url = '" . $url . "', id_publication = " . $publication_id . ", review_date = '" . $publication_date . "' where id_product_review = " . $product_review_id);
	
}

function updateReview2($product_id, $user_id,  $grade) {

	$grade = (float)$grade;
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	
	return mysql_query("update product_reviews set grade = " . $grade . " where id_product = " . $product_id . " and id_user = " . $user_id);
	
}

// verifies if product slug already exists

function productSlugExists($product_slug) {
	$product_slug = mysql_real_escape_string($product_slug);
	$result = mysql_query("select count(*) as number from products where slug = '" . $product_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// updates product slug

function updateProductSlug($id, $product_slug) {
	$id = (int)$id;
	$product_slug = mysql_real_escape_string($product_slug);
	mysql_query("update products set slug = '" . $product_slug . "' where id_product = " . $id);
}


function updateProductViews($id) {
	$id = (int)$id;
	mysql_query("update products set views = views + 1 where id_product = " . $id);
}

function updatePersonViews($id) {
	$id = (int)$id;
	mysql_query("update people set views = views + 1 where id_person = " . $id);
}

function updatePublicationViews($id) {
	$id = (int)$id;
	mysql_query("update publications set views = views + 1 where id_publication = " . $id);
}

function updateUserViews($id) {
	$id = (int)$id;
	mysql_query("update users set views = views + 1 where id_user = " . $id);
}

function updateCompanyViews($id) {
	$id = (int)$id;
	mysql_query("update companies set views = views + 1 where id_company = " . $id);
}

function updateReviewClicks($id) {
	$id = (int)$id;
	mysql_query("update product_reviews set clicks = clicks + 1 where id_product_review = " . $id);
}

function updateNewsClicks($id) {
	$id = (int)$id;
	mysql_query("update news set clicks = clicks + 1 where id_news = " . $id);
}

// returns product type plural

function getProductTypePlural($product_type_plural_slug) {
	$product_type_plural_slug = mysql_real_escape_string($product_type_plural_slug);
	$result = mysql_query("select plural from product_types where plural_slug = '" . $product_type_plural_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["plural"];
}

// returns product type id plural

function getProductTypeIdByPlural($product_type_plural_slug) {
	$product_type_plural_slug = mysql_real_escape_string($product_type_plural_slug);
	$result = mysql_query("select id_product_type from product_types where plural_slug = '" . $product_type_plural_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_product_type"];
}

function getGenreNameBySlug($genre_slug) {
	$genre_slug = mysql_real_escape_string($genre_slug);
	$result = mysql_query("select name from genres where slug = '" . $genre_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["name"];
}

function getGenreIdBySlug($genre_slug) {
	$genre_slug = mysql_real_escape_string($genre_slug);
	$result = mysql_query("select id_genre from genres where slug = '" . $genre_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_genre"];
}

function getGenreIdByName($genre) {
	$genre = mysql_real_escape_string($genre);
	$result = mysql_query("select id_genre from genres where name = '" . $genre . "'");
	$row = mysql_fetch_array($result);
	return $row["id_genre"];
}

function getProductsByGenre($genre_id, $begin, $count, $order) {
	
	global $utf_zone;
	
	$genre_id = (int)$genre_id;
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "criticos") {
		$order_by = "p.critics_grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "p.users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title_2 asc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select p.*, ifnull(p.release_date,p.home_release_date) as date from products p, product_genre pg where pg.id_genre = " . $genre_id . " and pg.id_product = p.id_product and ( ( TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(ifnull(p.release_date,p.home_release_date)) ) >= 0 ) order by " . $order_by . " " . $limit_text);
	return $result;
}

function getPopularGenres($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select count(*) as number, g.id_genre, g.slug, g.name from genres g, product_genre pg, product_type_genre ptg where " .
	" pg.id_genre = g.id_genre and g.id_genre = ptg.id_genre and ptg.id_product_type = " . $product_type_id . " group by g.id_genre order by number desc limit 0,10");	
	return $result;
}

function searchProductByTerm($search, $begin, $count, $order, $product_type_id) {
	$search = mysql_real_escape_string($search);
	$order = mysql_real_escape_string($order);
	$product_type_id = (int)$product_type_id;
	
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "grade desc";
	} elseif ($order == "criticos") {
		$order_by = "critics_grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "title asc";
	} elseif ($order == "relevancia") {
		$order_by = "score desc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	//echo "select *, ifnull(release_date,home_release_date) as date from products where match(title) against ('" . $search . "') and id_product_type = " . $product_type_id . " order by " . $order_by . " " . $limit_text;
	
	if ($product_type_id > 0)
		$result = mysql_query("select *, ifnull(release_date,home_release_date) as date from products where ((title like '%" . $search . "%') or (original_title like '%" . $search . "%')) and id_product_type = " . $product_type_id . " order by " . $order_by . " " . $limit_text);
		//$result = mysql_query("select *, ifnull(release_date,home_release_date) as date, match(title, original_title) against ('" . $search . "') as score from products where match(title, original_title) against ('" . $search . "') and id_product_type = " . $product_type_id . " order by " . $order_by . " " . $limit_text);
	
	else
		$result = mysql_query("select *, ifnull(release_date,home_release_date) as date from products where ((title like '%" . $search . "%') or (original_title like '%" . $search . "%')) order by " . $order_by . " " . $limit_text);
		//$result = mysql_query("select *, ifnull(release_date,home_release_date) as date, match(title, original_title) against ('" . $search . "') as score from products where match(title, original_title) against ('" . $search . "') order by " . $order_by . " " . $limit_text);
	return $result;
}

function getProductReview($product_review_id) {
	$product_review_id = (int)$product_review_id;
	$result = mysql_query("select * from product_reviews where id_product_review = " . $product_review_id);
	$row = mysql_fetch_array($result);
	return $row;
}

function getProductReview2($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$result = mysql_query("select * from product_reviews where id_product = " . $product_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row;
}

function reviewExists($product_id, $user_id, $publication_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$publication_id = (int)$publication_id;
	
	$result = mysql_query("select count(*) as number from product_reviews where id_product = " . $product_id . " and id_user = " . $user_id );
	
	$row = mysql_fetch_array($result);

	return ($row["number"]>0);
}

function getAverageUserGrade($user_id) {
	$user_id = (int)$user_id;
	
	$result = mysql_query("select sum(grade) as sum_grade, count(*) as number from product_reviews where id_user = " . $user_id );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMinUserGrade($user_id) {
	$user_id = (int)$user_id;
	
	$result = mysql_query("select min(grade) as min_grade from product_reviews where id_user = " . $user_id );

	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select grade as min_grade, id_product, id_publication, url, review, id_product_review from product_reviews where id_user = " . $user_id . " and (abs(grade - " . $row["min_grade"] . ") < 0.001)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMaxUserGrade($user_id) {
	$user_id = (int)$user_id;
	
	$result = mysql_query("select max(grade) as max_grade from product_reviews where id_user = " . $user_id );

	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select grade as max_grade, id_product, id_publication, url, review, id_product_review from product_reviews where id_user = " . $user_id . " and (abs(grade - " . $row["max_grade"] . ") < 0.001)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function existUserReviews($user_id) {
	$user_id = (int)$user_id;
	
	$result = mysql_query("select count(*) as number from product_reviews where id_user = " . $user_id);
	
	$row = mysql_fetch_array($result);
	
	return ($row["number"]>0);
}

function getAveragePublicationGrade($publication_id) {
	$publication_id = (int)$publication_id;
	
	$result = mysql_query("select sum(grade) as sum_grade, count(*) as number from product_reviews where id_publication = " . $publication_id . " and id_user in (select id_user from users where id_user_type = 4)");
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMinPublicationGrade($publication_id) {
	$publication_id = (int)$publication_id;
	
	$result = mysql_query("select min(grade) as min_grade from product_reviews where id_publication = " . $publication_id . " and id_user in (select id_user from users where id_user_type = 4)" );

	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select grade as min_grade, id_product from product_reviews where id_publication = " . $publication_id . " and (abs(grade - " . $row["min_grade"] . ") < 0.001) and id_user in (select id_user from users where id_user_type = 4)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMaxPublicationGrade($publication_id) {
	$publication_id = (int)$publication_id;
	
	$result = mysql_query("select max(grade) as max_grade from product_reviews where id_publication = " . $publication_id . " and id_user in (select id_user from users where id_user_type = 4)" );

	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select grade as max_grade, id_product from product_reviews where id_publication = " . $publication_id . " and (abs(grade - " . $row["max_grade"] . ") < 0.001) and id_user in (select id_user from users where id_user_type = 4)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function existPublicationReviews($publication_id) {
	$publication_id = (int)$publication_id;
	
	$result = mysql_query("select count(*) as number from product_reviews where id_publication = " . $publication_id);
	
	$row = mysql_fetch_array($result);
	
	return ($row["number"]>0);
}

function getAveragePersonGrade($person_id) {
	$person_id = (int)$person_id;
	
	$result = mysql_query("select sum(p.grade) as sum_grade, count(*) as number from product_person_person_type pppt, products p where p.grade >= 0 and p.id_product = pppt.id_product and pppt.id_person = " . $person_id);
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMinPersonGrade($person_id) {
	$person_id = (int)$person_id;
	
	$result = mysql_query("select min(p.grade) as min_grade from product_person_person_type pppt, products p where p.grade >=0 and p.id_product = pppt.id_product and pppt.id_person = " . $person_id );

	if (mysql_num_rows($result)==0)
		return false;
	
	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select p.grade as min_grade, p.id_product from product_person_person_type pppt, products p where p.id_product = pppt.id_product and pppt.id_person = " . $person_id . " and (abs(p.grade - " . $row["min_grade"] . ") < 0.001)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMaxPersonGrade($person_id) {
	$person_id = (int)$person_id;
	
	$result = mysql_query("select max(p.grade) as max_grade from product_person_person_type pppt, products p where p.id_product = pppt.id_product and pppt.id_person = " . $person_id );

	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select p.grade as max_grade, p.id_product from product_person_person_type pppt, products p where p.id_product = pppt.id_product and pppt.id_person = " . $person_id . " and (abs(p.grade - " . $row["max_grade"] . ") < 0.001)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function existPersonReviews($person_id) {
	$person_id = (int)$person_id;
	
	$result = mysql_query("select count(*) as number from product_person_person_type pppt, products p where p.id_product = pppt.id_product and pppt.id_person = " . $person_id );
	
	$row = mysql_fetch_array($result);
	
	return ($row["number"]>0);
}

function getAverageCompanyGrade($company_id) {
	$company_id = (int)$company_id;
	
	$result = mysql_query("select sum(p.grade) as sum_grade, count(*) as number from product_company_company_type pcct, products p where p.grade >= 0 and p.id_product = pcct.id_product and pcct.id_company = " . $company_id);
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMinCompanyGrade($company_id) {
	$company_id = (int)$company_id;
	
	$result = mysql_query("select min(p.grade) as min_grade from product_company_company_type pcct, products p where p.grade >= 0 and p.id_product = pcct.id_product and pcct.id_company = " . $company_id );

	if (mysql_num_rows($result)==0)
		return false;
	
	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select p.grade as min_grade, p.id_product from product_company_company_type pcct, products p where p.id_product = pcct.id_product and pcct.id_company = " . $company_id . " and (abs(p.grade - " . $row["min_grade"] . ") < 0.001)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMaxCompanyGrade($company_id) {
	$company_id = (int)$company_id;
	
	$result = mysql_query("select max(p.grade) as max_grade from product_company_company_type pcct, products p where p.id_product = pcct.id_product and pcct.id_company = " . $company_id );

	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select p.grade as max_grade, p.id_product from product_company_company_type pcct, products p where p.id_product = pcct.id_product and pcct.id_company = " . $company_id . " and (abs(p.grade - " . $row["max_grade"] . ") < 0.001)" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function existCompanyReviews($company_id) {
	$company_id = (int)$company_id;
	
	$result = mysql_query("select count(*) as number from product_company_company_type pcct, products p where p.id_product = pcct.id_product and pcct.id_company = " . $company_id );
	
	$row = mysql_fetch_array($result);
	
	return ($row["number"]>0);
}

function insertProductTheaterCompanies($product_id, $theater_companies) {
	$product_id = (int)$product_id;
	foreach ($theater_companies as $tc) {
		$tc_arr = explode("#",$tc);
		$tc_arr[0] = (int)$tc_arr[0];
		$tc_arr[1] = (int)$tc_arr[1];
		$tc_arr[2] = (int)$tc_arr[2];
		mysql_query("insert into product_theater_info (id_product, id_theater_company, id_site, is3D) values (" . $product_id . "," . $tc_arr[0] . "," . $tc_arr[1] . "," . $tc_arr[2] . ")");
	}
}

function updateProductTheaterCompanies($product_id, $theater_companies) {
	$product_id = (int)$product_id;

	mysql_query("delete from product_theater_info where id_product = " . $product_id );
		
	if (sizeof($theater_companies)==0)
		return;	
	
	foreach ($theater_companies as $tc) {
		$tc_arr = explode("#",$tc);
		$tc_arr[0] = (int)$tc_arr[0];
		$tc_arr[1] = (int)$tc_arr[1];
		$tc_arr[2] = (int)$tc_arr[2];
		mysql_query("insert into product_theater_info (id_product, id_theater_company, id_site, is3D) values (" . $product_id . "," . $tc_arr[0] . "," . $tc_arr[1] . "," . $tc_arr[2] . ")");
	}
}

function getMinProductGrade($product_id, $user_type_id) {
	$product_id = (int)$product_id;
	//user_type_id = (int)$user_type_id;
	
	$result = mysql_query("select min(pr.grade) as min_grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type in (" . $user_type_id . ")" );

	//if (mysql_num_rows($result)==0)
	//	return false;
	
	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select pr.grade as min_grade, pr.id_user, pr.id_publication, pr.url, pr.review, pr.id_product_review from product_reviews pr, users u where pr.id_product = " . $product_id . " and (abs(pr.grade - " . $row["min_grade"] . ") < 0.001) and pr.id_user = u.id_user and u.id_user_type in (" . $user_type_id . ")" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getMaxProductGrade($product_id, $user_type_id) {
	$product_id = (int)$product_id;
	//$user_type_id = (int)$user_type_id;
	
	$result = mysql_query("select max(pr.grade) as max_grade from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type in (" . $user_type_id . ")" );

	$row = mysql_fetch_array($result);
	
	$result = mysql_query("select pr.grade as max_grade, pr.id_user, pr.id_publication, pr.url, pr.review, pr.id_product_review from product_reviews pr, users u where pr.id_product = " . $product_id . " and (abs(pr.grade - " . $row["max_grade"] . ") < 0.001) and pr.id_user = u.id_user and u.id_user_type in (" . $user_type_id . ")" );
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function existProductReviews($product_id, $user_type_id) {
	$product_id = (int)$product_id;
	//$user_type_id = (int)$user_type_id;
	
	$result = mysql_query("select count(*) as number from product_reviews pr, users u where pr.id_product = " . $product_id . " and pr.id_user = u.id_user and u.id_user_type in (" . $user_type_id . ")" );
	
	$row = mysql_fetch_array($result);
	
	return ($row["number"]>0);
}

function getProductsCriticsReviews($begin, $count, $order) {
	
	global $utf_zone;
	
	$order = mysql_real_escape_string($order);
	$term = "";
	
	if ($order == "data") {
		$order_by = "pr.review_date desc, pr.id_product_review desc";
	} elseif ($order == "avaliacao") {
		$order_by = "pr.grade desc";
	} elseif ($order == "critico") {
		$order_by = "u.name asc";
	} elseif ($order == "publicacao") {
		$order_by = "publication_name asc";
	} elseif ($order == "t-kritz") {
		$order_by = "t_kritz desc";		
	} elseif ($order == "filme") {
		$order_by = "pd.title asc";
	} elseif (($order == "maislidas") || ($order == "acessos")) {
		//$term = " and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(pr.review_date)) <= 7)";
		$order_by = "pr.clicks desc, pr.review_date desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select pr.*, u.*, p.slug as publication_slug, p.name as publication_name, p.language as publication_language, pd.id_product, pd.title, pd.grade as t_kritz from product_reviews pr, users u, publications p, products pd where pd.id_product = pr.id_product and u.id_user = pr.id_user and u.id_user_type in (4) and pr.id_publication = p.id_publication " . $term . " order by " . $order_by . " " . $limit_text );
	return $result;
	
}

function getProductsUsersReviews($begin, $count, $order) {
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "pr.review_date desc, pr.id_product_review desc";
	} elseif ($order == "avaliacao") {
		$order_by = "pr.grade desc";
	} elseif ($order == "usuario") {
		$order_by = "u.name asc";
	} elseif ($order == "t-kritz") {
		$order_by = "t_kritz desc";		
	} elseif ($order == "filme") {
		$order_by = "p.title asc";
	} elseif (($order=="maislidas") || ($order=="acessos")) {
		$order_by = "pr.clicks desc, pr.review_date desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	//$result = mysql_query("select pr.*, u.*, p.id_product, p.title, p.grade as t_kritz from product_reviews pr, users u, products p where pr.id_product = p.id_product and u.id_user = pr.id_user and u.id_user_type = 1 and length(pr.summary)>0 order by " . $order_by . " " . $limit_text);
	$result = mysql_query("select pr.*, u.*, p.id_product, p.title, p.grade as t_kritz from product_reviews pr, users u, products p where pr.id_product = p.id_product and u.id_user = pr.id_user and u.id_user_type = 1 order by " . $order_by . " " . $limit_text);
	return $result;
	
}

function getProductId($product_slug) {
	$product_slug = mysql_real_escape_string($product_slug);
	$result = mysql_query("select id_product from products where slug = '" . $product_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_product"];
}

/********************************************

	Database functions : person functions

*********************************************/

// returns person types from a product type id

function getPeople($people_type_slug, $begin, $count, $order) {
	$people_type_slug = mysql_real_escape_string($people_type_slug);
	$order = mysql_real_escape_string($order);
	
	if ($order == "nome") {
		$order_by = "p.name asc";
	} elseif ($order == "avaliacao") {
		$order_by = "avaliacao desc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	if ($people_type_slug == "atores")	{
		$result = mysql_query("select distinct p.id_person, p.*, (select sum(p2.grade) / count(*) from product_person_person_type pppt2, products p2 where p2.grade >= 0 and p2.id_product = pppt2.id_product and pppt2.id_person = p.id_person) as avaliacao, (select count(distinct pppt3.id_product) from product_person_person_type pppt3 where pppt3.id_person = p.id_person) as filmes from people p, product_person_person_type pppt where p.id_person = pppt.id_person and pppt.id_person_type = 3 order by " . $order_by . " " . $limit_text);
	} elseif ($people_type_slug == "diretores") {
		$result = mysql_query("select distinct p.id_person, p.*, (select sum(p2.grade) / count(*) from product_person_person_type pppt2, products p2 where p2.grade >= 0 and p2.id_product = pppt2.id_product and pppt2.id_person = p.id_person) as avaliacao, (select count(distinct pppt3.id_product) from product_person_person_type pppt3 where pppt3.id_person = p.id_person) as filmes from people p, product_person_person_type pppt where p.id_person = pppt.id_person and pppt.id_person_type = 1 order by " . $order_by . " " . $limit_text);
	} elseif ($people_type_slug == "roteiristas") {
		$result = mysql_query("select distinct p.id_person, p.*, (select sum(p2.grade) / count(*) from product_person_person_type pppt2, products p2 where p2.grade >= 0 and p2.id_product = pppt2.id_product and pppt2.id_person = p.id_person) as avaliacao, (select count(distinct pppt3.id_product) from product_person_person_type pppt3 where pppt3.id_person = p.id_person) as filmes from people p, product_person_person_type pppt where p.id_person = pppt.id_person and pppt.id_person_type = 2 order by " . $order_by . " " . $limit_text);
	} elseif ($people_type_slug == "*") {
		$result = mysql_query("select p.*, (select sum(p2.grade) / count(*) from product_person_person_type pppt2, products p2 where p2.grade >= 0 and p2.id_product = pppt2.id_product and pppt2.id_person = p.id_person) as avaliacao, (select count(distinct pppt3.id_product) from product_person_person_type pppt3 where pppt3.id_person = p.id_person) as filmes from people p order by  " . $order_by . " " . $limit_text);
	}
	
	return $result;
}

function getPersonTypes($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select pt.id_person_type, pt.name from product_type_person_type ptpt, person_types pt where ptpt.id_product_type = " . $product_type_id . " and pt.id_person_type = ptpt.id_person_type order by pt.name asc");
	return $result;
}

// inserts a person

function insertPerson($name, $birth, $bio, $country, $city, $death_year, $site, $image, $user_id) {
	$name = trim(mysql_real_escape_string($name));
	$birth = mysql_real_escape_string($birth);
	$bio = trim(mysql_real_escape_string($bio));
	$country = mysql_real_escape_string($country);
	$city = mysql_real_escape_string($city);
	$death_year = (int)$death_year;
	$site = trim(mysql_real_escape_string($site));
	$image = mysql_real_escape_string($image);
	$user_id = (int)$user_id;
	
	$person_slug = getPermalink($name);
	
	return mysql_query("insert into people (name, slug, birth, bio, country, city, death_year, site, image, id_user)	values ('" . $name . "','" . $person_slug . "','" . $birth . "','" . $bio . "','" . $country . "','" . $city . "'," . $death_year . ",'" . $site . "','" .	$image . "'," . $user_id . ")");
}

// updates a person

function updatePerson($person_id, $name, $birth, $bio, $country, $city, $death_year, $site, $image, $user_id) {
	$person_id = (int)$person_id;
	$name = trim(mysql_real_escape_string($name));
	$birth = mysql_real_escape_string($birth);
	$bio = trim(mysql_real_escape_string($bio));
	$country = mysql_real_escape_string($country);
	$city = mysql_real_escape_string($city);
	$death_year = (int)$death_year;
	$site = trim(mysql_real_escape_string($site));
	$image = mysql_real_escape_string($image);
	$user_id = (int)$user_id;
	
	return mysql_query("update people set " . 
	" birth = '" . $birth . "', bio = '" . $bio . "', country = '" . $country . "', city = '" . $city . "', death_year = " . $death_year . ", site = '" . $site . "', image = '" . $image . "' where id_person = " . $person_id);
}

// returns a person type name

function getPersonTypeName($person_type_id) {
	$person_type_id = (int)$person_type_id;
	$result = mysql_query("select name from person_types where id_person_type = " . $person_type_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

// return person type id from slug

function getPersonTypeId($person_type_slug) {
	$person_type_slug = mysql_real_escape_string($person_type_slug);
	$result = mysql_query("select id_person_type from person_types where slug = '" . $person_type_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_person_type"];
}

// returns person name

function getPersonName($person_id) {
	$person_id = (int)$person_id;
	$result = mysql_query("select name from people where id_person = " . $person_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

// returns person image

function getPersonImage($person_id) {
	$person_id = (int)$person_id;
	$result = mysql_query("select image from people where id_person = " . $person_id);
	$row = mysql_fetch_array($result);
	return $row["image"];
}

// returns person image

function updatePersonImage($id, $image) {
	$id = (int)$id;
	$image = mysql_real_escape_string($image);
	mysql_query("update people set image = '" . $image . "' where id_person = " . $id);
}

// returns person id by slug

function getPersonIdBySlug($person_slug) {
	$person_slug = mysql_real_escape_string($person_slug);
	$result = mysql_query("select id_person from people where slug = '" . $person_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_person"];
} 

function getPersonIdByName($person) {
	$person = mysql_real_escape_string($person);
	$result = mysql_query("select id_person from people where name = '" . $person . "'");
	$row = mysql_fetch_array($result);
	return $row["id_person"];
}

// returns a person

function getPerson($person_id) {
	$person_id = (int)$person_id;
	$result = mysql_query("select * from people where id_person = " . $person_id);
	$row = mysql_fetch_array($result);
	return $row;
}

// verifies if person slug already exists

function personSlugExists($person_slug) {
	$person_slug = mysql_real_escape_string($person_slug);
	$result = mysql_query("select count(*) as number from people where slug = '" . $person_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// updates person slug

function updatePersonSlug($id, $person_slug) {
	$id = (int)$id;
	$person_slug = mysql_real_escape_string($person_slug);
	mysql_query("update people set slug = '" . $person_slug . "' where id_person = " . $id);
}

// returns person product reviews

function getPersonProductReviews($person_id, $begin, $count, $order) {
	$person_id = (int)$person_id;
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title asc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;	
		
	$result = mysql_query("select pt.name as person_type_name, p.grade, p.users_grade, p.critics_grade, p.id_product, p.image, p.title, p.original_title, p.summary, p.slug, p.id_product_type, p.release_date, p.home_release_date, p.year, pppt.role, year as release_year, ifnull(p.release_date,p.home_release_date) as date from products p, people p2, product_person_person_type pppt, person_types pt where p2.id_person = " . $person_id . " and p2.id_person = pppt.id_person and pppt.id_product = p.id_product and pppt.id_person_type = pt.id_person_type order by " . $order_by . " " . $limit_text);
	return $result;
}

function getCompanyProductReviews($company_id, $begin, $count, $order) {
	$company_id = (int)$company_id;
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title asc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;	
		
	$result = mysql_query("select ct.name as company_type_name, p.grade, p.users_grade, p.critics_grade, p.id_product, p.image, p.title, p.original_title, p.summary, p.slug, p.id_product_type, p.release_date, p.year, year as release_year, ifnull(p.release_date,p.home_release_date) as date from products p, companies c, product_company_company_type pcct, company_types ct where c.id_company = " . $company_id . " and c.id_company = pcct.id_company and pcct.id_product = p.id_product and pcct.id_company_type = ct.id_company_type order by " . $order_by . " " . $limit_text);
	return $result;
}

// returns products in theaters

function getProductsInTheaters($product_type_id, $begin, $count, $order) {
	
	global $utf_zone;
	
	$product_type_id = (int)$product_type_id;	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "date desc, grade desc";
	} elseif ($order == "t-kritz") {
		$order_by = "grade desc";
	} elseif ($order == "criticos") {
		$order_by = "critics_grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "title_2 asc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("( select *, ifnull(release_date,home_release_date) as date from products where id_product_type = " . $product_type_id . " and (home_release_date is null) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(release_date)) >= 0) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(release_date)) <= 90) ) " .

	$result = " union ( select *, ifnull(release_date,home_release_date) as date from products where id_product_type = " . $product_type_id . " and (home_release_date is not null) and (release_date is not null) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(home_release_date)) < 0 ) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(release_date)) >= 0) ) order by " . $order_by . " " . $limit_text);
	
	return $result;
}

function getProductsCatalog($product_type_id, $begin, $count, $order) {
	
	global $utf_zone;
	
	$product_type_id = (int)$product_type_id;	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "grade desc";
	} elseif ($order == "criticos") {
		$order_by = "critics_grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "title_2 asc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("( select *, ifnull(home_release_date,release_date) as date from products where id_product_type = " . $product_type_id . " and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(release_date)) > 90 ) and home_release_date is null )" .
	
	" union (select *, ifnull(home_release_date,release_date) as date from products where id_product_type = " . $product_type_id . " and ((( TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(home_release_date) )) >= 0 ) and (home_release_date is not null) ) order by " . $order_by . " " . $limit_text);
	
	return $result;
}

// returns products in theaters

function getHotProducts($product_type_id, $begin, $count, $order, $scope) {
	$product_type_id = (int)$product_type_id;
	$order = mysql_real_escape_string($order);
	
	global $utf_zone;
	
	if ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "criticos") {
		$order_by = "p.critics_grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "p.users_grade desc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	if ($scope == "noscinemas")
		$result = mysql_query("select p.* from products p where p.id_product_type = " . $product_type_id . " and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(ifnull(p.release_date,p.home_release_date))) <= 90) and (p.grade >= 0) order by " . $order_by . " " . $limit_text);
	elseif ($scope == "todos")
		$result = mysql_query("select p.* from products p where p.id_product_type = " . $product_type_id . " and (p.grade >= 0) order by " . $order_by . " " . $limit_text);
	elseif (is_numeric($scope))	
		$result = mysql_query("select p.* from products p where p.id_product_type = " . $product_type_id . " and year = " . $scope . " and (p.grade >=0) order by " . $order_by . " " . $limit_text);
		
	return $result;
}


function getProductsTrailers($product_type_id, $begin, $count, $order, $scope) {
	$product_type_id = (int)$product_type_id;
	$order = mysql_real_escape_string($order);
	$generic_type_id = 1;

	global $utf_zone;

	if ($order == "t-kritz") {
		$order_by = "g desc";
	} elseif ($order == "criticos") {
		$order_by = "cg desc";
	} elseif ($order == "usuarios") {
		$order_by = "ug desc";
	} elseif ($order == "data") {
		$order_by = "md desc, id desc";
	} elseif ($order == "acessos") {
		$order_by = "v desc, id desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	if ($scope == "noscinemas") {
		$result = mysql_query("( select p.*, pm.name, pm.url, pm.views as v, pm.media_date as md, pm.id_media as id, p.grade as g, p.critics_grade as cg, p.users_grade as ug from products p, media pm where p.id_product_type = " . $product_type_id . " and pm.id_media_type = 4 and pm.id_generic_type = " . $generic_type_id . " and pm.id_generic = p.id_product and (p.home_release_date is null) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.release_date)) >= 0) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.release_date)) <= 90) ) " .
				 $result = " union ( select p.*, pm.name, pm.url, pm.views as v, pm.media_date as md, pm.id_media as id, p.grade as g, p.critics_grade as cg, p.users_grade as ug from products p, media pm where p.id_product_type = " . $product_type_id . " and pm.id_media_type = 4 and pm.id_generic_type = " . $generic_type_id . " and pm.id_generic = p.id_product and (p.home_release_date is not null) and (p.release_date is not null) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.home_release_date)) < 0 ) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.release_date)) >= 0) ) order by " . $order_by . " " . $limit_text);
	} elseif ($scope == "embreve")
		$result = mysql_query("select p.*, pm.name, pm.url, pm.views as v, pm.media_date as md, pm.id_media as id, p.grade as g, p.critics_grade as cg, p.users_grade as ug from products p, media pm where p.id_product_type = " . $product_type_id . " and pm.id_media_type = 4 and pm.id_generic_type = " . $generic_type_id . " and pm.id_generic = p.id_product and (p.release_date is not null) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.release_date)) < 0) order by " . $order_by . " " . $limit_text);
	elseif ($scope == "todos")
		$result = mysql_query("select p.*, pm.name, pm.url, pm.views as v, pm.media_date as md, pm.id_media as id, p.grade as g, p.critics_grade as cg, p.users_grade as ug from products p, media pm where p.id_product_type = " . $product_type_id . " and pm.id_media_type = 4 and pm.id_generic_type = " . $generic_type_id . " and pm.id_generic = p.id_product order by " . $order_by . " " . $limit_text);
	elseif (is_numeric($scope))
		$result = mysql_query("select p.*, pm.name, pm.url, pm.views as v, pm.media_date as md, pm.id_media as id, p.grade as g, p.critics_grade as cg, p.users_grade as ug from products p, media pm where p.id_product_type = " . $product_type_id . " and pm.id_media_type = 4 and pm.id_generic_type = " . $generic_type_id . " and pm.id_generic = p.id_product and year = " . $scope . " order by " . $order_by . " " . $limit_text);

	return $result;
}

function getVideos2($generic_id, $generic_type_id, $begin, $count, $order, $scope) {
	$generic_type_id = (int)$generic_type_id;
	$generic_id = (int)$generic_id;
	$order = mysql_real_escape_string($order);

	global $utf_zone;

	if ($order == "t-kritz") {
		$order_by = "g desc";
	} elseif ($order == "criticos") {
		$order_by = "cg desc";
	} elseif ($order == "usuarios") {
		$order_by = "ug desc";
	} elseif ($order == "data") {
		$order_by = "md desc, id desc";
	} elseif ($order == "acessos") {
		$order_by = "v desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;

	
	$result = mysql_query("select p.*, pm.name, pm.url, pm.views as v, pm.media_date as md, pm.id_media as id, p.grade as g, p.critics_grade as cg, p.users_grade as ug from products p, media pm where pm.id_media_type in (4,6) and pm.id_generic = p.id_product and pm.id_generic = " . $generic_id . " and pm.id_generic_type = " . $generic_type_id . " order by " . $order_by . " " . $limit_text);
	
	return $result;
}

function getImages2($generic_id, $generic_type_id, $begin, $count, $order, $scope) {
	$generic_type_id = (int)$generic_type_id;
	$generic_id = (int)$generic_id;
	$order = mysql_real_escape_string($order);

	global $utf_zone;

	if ($order == "t-kritz") {
		$order_by = "g desc";
	} elseif ($order == "criticos") {
		$order_by = "cg desc";
	} elseif ($order == "usuarios") {
		$order_by = "ug desc";
	} elseif ($order == "data") {
		$order_by = "md desc, id desc";
	} elseif ($order == "acessos") {
		$order_by = "v desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;


	$result = mysql_query("select p.*, pm.url, pm.name, pm.views as v, pm.media_date as md, pm.id_media as id, p.grade as g, p.critics_grade as cg, p.users_grade as ug from products p, media pm where pm.id_media_type in (3,5) and pm.id_generic = p.id_product and pm.id_generic = " . $generic_id . " and pm.id_generic_type = " . $generic_type_id . " order by " . $order_by . " " . $limit_text);

	return $result;
}

// returns products coming soon

function getProductsComingSoon($product_type_id, $begin, $count) {
	$product_type_id = (int)$product_type_id;
	
	global $utf_zone;
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select p.* from products p where p.id_product_type = " . $product_type_id . " and (p.release_date is not null) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.release_date)) < 0) order by p.release_date asc, grade desc " . $limit_text);
	return $result;
}

function getProductsReleases($product_type_id, $begin, $count) {
	$product_type_id = (int)$product_type_id;
	
	global $utf_zone;
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select p.* from products p where p.id_product_type = " . $product_type_id . " and (p.home_release_date is not null) and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.home_release_date)) < 0) order by p.home_release_date asc " . $limit_text);
	return $result;
}

function searchPersonByTerm($search) {
	$search = mysql_real_escape_string($search);
	$result = mysql_query("select * from people where name like '" . $search . "' order by name");
	return $result;
}

function getProducts() {
	$result = mysql_query("select * from products");
	return $result;
}

function getProductsByReleaseDate() {
	$result = mysql_query("select * from products order by ifnull(release_date,home_release_date) asc");
	return $result;
}

function getProducts2($product_type_id, $begin, $count, $order) {
	
	$product_type_id = (int)$product_type_id;
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "grade desc";
	} elseif ($order == "criticos") {
		$order_by = "critics_grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "title_2 asc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select *, ifnull(release_date,home_release_date) as date from products where id_product_type = " . $product_type_id . " order by " . $order_by . " " . $limit_text);
	return $result;
}

function updateProductGrade($product_id) {
	$product_id = (int)$product_id;	
	$grade = getProductReviewGrade($product_id);
	$critics_grade = getProductCriticsReviewGrade($product_id);
	$users_grade = getProductUsersReviewGrade($product_id);
	mysql_query("update products set grade = " . $grade . ", critics_grade = " . $critics_grade . ", users_grade = " . $users_grade . " where id_product = " . $product_id);
}

function getSimilarProducts($product_id, $begin, $count) {
	
	$product_id = (int)$product_id;
	$product_genres = getProductGenres($product_id);
	
	$num_genres = sizeof($product_genres);
	
	if ($num_genres==0)
		return false;
	
	$sql = "select a.id_product, a.grade, sum(a.numero) as quant, abs(sum(a.numero)-" . $num_genres . ") as dif, a.num_genres from ((";
	$first = true;
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	while ($pg_row = mysql_fetch_assoc($product_genres)) {
		if ($first) {
			$sql = $sql . "(select p.id_product, count(*) as numero, p.grade, (select count(pg2.id_product) from product_genre pg2 where pg2.id_product = p.id_product) as num_genres from products p, product_genre pg where p.id_product = pg.id_product and p.grade>0 and pg.id_genre = " . $pg_row["id_genre"] . " group by (p.id_product))";
			$first = false;
		} else {
			$sql = $sql . " union all (select p.id_product, count(*) as numero, p.grade, (select count(pg2.id_product) from product_genre pg2 where pg2.id_product = p.id_product) as num_genres from products p, product_genre pg where p.id_product = pg.id_product and p.grade>0 and pg.id_genre = " . $pg_row["id_genre"] . " group by (p.id_product))";
		}
			
	}
	
	$sql = $sql . ") as a) where (a.id_product <> " . $product_id . " ) group by a.id_product having quant > 0 order by quant desc, dif asc, a.num_genres asc, a.grade desc " . $limit_text;
	
	$result = mysql_query($sql);
	
	return $result;
}

/********************************************

	Database functions : company functions

*********************************************/

// returns company name

function getCompanyName($company_id) {
	$company_id = (int)$company_id;
	$result = mysql_query("select name from companies where id_company = " . $company_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

function getCompanySlug($company_id) {
	$company_id = (int)$company_id;
	$result = mysql_query("select slug from companies where id_company = " . $company_id);
	$row = mysql_fetch_array($result);
	return $row["slug"];
}

// returns company type name

function getCompanyTypeName($company_type_id) {
	$company_type_id = (int)$company_type_id;
	$result = mysql_query("select name from company_types where id_company_type = " . $company_type_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

// returns company types from a product type id

function getCompanyTypes($product_type_id) {
	$product_type_id = (int)$product_type_id;
	$result = mysql_query("select ct.id_company_type, ct.name from product_type_company_type ptct, company_types ct where ptct.id_product_type = " . $product_type_id . " and ct.id_company_type = ptct.id_company_type order by ct.name asc");
	return $result;
}

// verifies if company slug already exists

function companySlugExists($company_slug) {
	$company_slug = mysql_real_escape_string($company_slug);
	$result = mysql_query("select count(*) as number from companies where slug = '" . $company_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// updates company slug

function updateCompanySlug($id, $company_slug) {
	$id = (int)$id;
	$company_slug = mysql_real_escape_string($company_slug);
	mysql_query("update companies set slug = '" . $company_slug . "' where id_company = " . $id);
}

function searchCompanyByTerm($search) {
	$search = mysql_real_escape_string($search);
	$result = mysql_query("select * from companies where name like '" . $search . "' order by name");
	return $result;
}

// inserts a company

function insertCompany($name, $bio, $site, $image, $user_id) {
	$name = mysql_real_escape_string($name);
	$bio = mysql_real_escape_string($bio);
	$site = mysql_real_escape_string($site);
	$image = mysql_real_escape_string($image);
	$user_id = (int)$user_id;
	
	$company_slug = getPermalink($name);
	
	return mysql_query("insert into companies (name, slug, bio, site, image, id_user)	values ('" . $name . "','" . $company_slug . "','" . $bio . "','" . $site . "','" .	$image . "'," . $user_id . ")");
}

// returns person image

function updateCompanyImage($id, $image) {
	$id = (int)$id;
	$image = mysql_real_escape_string($image);
	mysql_query("update companies set image = '" . $image . "' where id_company = " . $id);
}

// returns company image

function getCompanyImage($company_id) {
	$company_id = (int)$company_id;
	$result = mysql_query("select image from companies where id_company = " . $company_id);
	$row = mysql_fetch_array($result);
	return $row["image"];
}

// returns company id by slug

function getCompanyIdBySlug($company_slug) {
	$company_slug = mysql_real_escape_string($company_slug);
	$result = mysql_query("select id_company from companies where slug = '" . $company_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_company"];
}

// returns a company

function getCompany($company_id) {
	$company_id = (int)$company_id;
	$result = mysql_query("select * from companies where id_company = " . $company_id);
	$row = mysql_fetch_array($result);
	return $row;
}

function getCompanyTypeId($company_type_slug) {
	$company_type_slug = mysql_real_escape_string($company_type_slug);
	$result = mysql_query("select id_company_type from company_types where slug = '" . $company_type_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_company_type"];
}

/********************************************

	Database functions : publication functions

*********************************************/

function searchPublicationByTerm($search) {
	$search = mysql_real_escape_string($search);
	$result = mysql_query("select * from publications where name like '" . $search . "' order by name");
	return $result;
}

function getPublicationLanguage($publication_id) {
	$publication_id = (int)$publication_id;
	$result = mysql_query("select language from publications where id_publication = " . $publication_id);
	$row = mysql_fetch_array($result);
	return $row["language"];
}

// returns publication name

function getPublicationName($publication_id) {
	$publication_id = (int)$publication_id;
	$result = mysql_query("select name from publications where id_publication = " . $publication_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

// verifies if publication slug already exists

function publicationSlugExists($publication_slug) {
	$publication_slug = mysql_real_escape_string($publication_slug);
	$result = mysql_query("select count(*) as number from publications where slug = '" . $publication_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

// updates publication slug

function updatePublicationSlug($id, $publication_slug) {
	$id = (int)$id;
	$publication_slug = mysql_real_escape_string($publication_slug);
	mysql_query("update publications set slug = '" . $publication_slug . "' where id_publication = " . $id);
}

// returns publication image

function updatePublicationImage($id, $image) {
	$id = (int)$id;
	$image = mysql_real_escape_string($image);
	mysql_query("update publications set image = '" . $image . "' where id_publication = " . $id);
}

// returns publication image

function getPublicationImage($publication_id) {
	$publication_id = (int)$publication_id;
	$result = mysql_query("select image from publications where id_publication = " . $publication_id);
	$row = mysql_fetch_array($result);
	return $row["image"];
}

// inserts a publication

function insertPublication($name, $bio, $site, $image) {
	$name = mysql_real_escape_string($name);
	$bio = mysql_real_escape_string($bio);
	$site = mysql_real_escape_string($site);
	$image = mysql_real_escape_string($image);
	//$user_id = (int)$user_id;
	
	$publication_slug = getPermalink($name);
	
	return mysql_query("insert into publications (name, slug, bio, site, image) values ('" . $name . "','" . $publication_slug . "','" . $bio . "','" . $site . "','" .	$image . "')");
}

function getPublications() {
	$result = mysql_query("select * from publications order by name asc");
	return $result;
}

function getPublicationsWithNews() {
	$result = mysql_query("select * from publications where length(news_feed)>0");
	return $result;
}

function getPublicationsPages($begin, $count, $order) {
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "nome") {
		$order_by = "p.name asc";
	} elseif ($order == "avaliacao") {
		$order_by = "avaliacao desc";
	} elseif ($order == "criticas") {
		$order_by = "criticas desc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select p.*, (select count(*) from product_reviews pr, users u where pr.id_publication = p.id_publication and pr.id_user = u.id_user and u.id_user_type = 4) as criticas from publications p order by " . $order_by . " " . $limit_text);
	return $result;
}

function getPublicationsByUser($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select p.* from publications p, user_publication up where up.id_user = " . $user_id . " and up.id_publication = p.id_publication order by p.name asc");
	return $result;
}

function getPublicationsEditedByUser($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select p.* from publications p, user_publication up where up.id_user = " . $user_id . " and up.id_publication = p.id_publication and up.editor = 1 order by p.name asc");
	return $result;
}

function getPublicationCritics($publication_id) {
	$publication_id = (int)$publication_id;
	$result = mysql_query("select u.* from users u, user_publication up where up.id_publication = " . $publication_id . " and up.id_user = u.id_user and u.id_user_type = 4");	
	return $result;
}

// returns publication slug

function getPublicationSlug($publication_id) {
	$publication_id = (int)$publication_id;
	$result = mysql_query("select slug from publications where id_publication = " . $publication_id);
	$row = mysql_fetch_array($result);
	return $row["slug"];
}

// returns publication id by slug

function getPublicationIdBySlug($publication_slug) {
	$publication_slug = mysql_real_escape_string($publication_slug);
	$result = mysql_query("select id_publication from publications where slug = '" . $publication_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_publication"];
}

// returns a publication

function getPublication($publication_id) {
	$publication_id = (int)$publication_id;
	$result = mysql_query("select * from publications where id_publication = " . $publication_id);
	$row = mysql_fetch_array($result);
	return $row;
}

function updatePublication($publication_id, $name, $bio, $site, $image, $user_id) {
	$publication_id_id = (int)$publication_id;
	$name = mysql_real_escape_string($name);	
	$bio = mysql_real_escape_string($bio);	
	$site = mysql_real_escape_string($site);
	$image = mysql_real_escape_string($image);
	$user_id = (int)$user_id;
	
	return mysql_query("update publications set " . 
	" bio = '" . $bio . "', site = '" . $site . "', image = '" . $image . "' where id_publication = " . $publication_id);
}

/********************************************

	Database functions : theaters functions

*********************************************/

function getCities($state_id) {
	$state_id = (int)$state_id;
	$result = mysql_query("select * from cities where id_state = " . $state_id);
	return $result;
}

function getTheaters($city_id) {
	$city_id = (int)$city_id;
	$result = mysql_query("select t.*, tc.name as theater_company_name, tc.period from theaters t, theater_companies tc where t.id_city = " . $city_id . " and t.id_theater_company = tc.id_theater_company order by t.id_theater_company, t.name asc");
	return $result;
}

function getCityIdBySlug($city_slug) {
	$city_slug = mysql_real_escape_string($city_slug);
	$result = mysql_query("select id_city from cities where slug = '" . $city_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_city"];
}

function getTheaterCompanies() {	
	$result = mysql_query("select * from theater_companies");
	return $result;
}

function getProductsForImporting($product_type_id, $theater_company_id) {
	$product_type_id = (int)$product_type_id;
	$theater_company_id = (int)$theater_company_id;
	//$result = mysql_query("select * from products p, product_theater_info pti where p.id_product = pti.id_product and p.elegible = 1 and p.id_product_type = " . $product_type_id . " and pti.id_theater_company = " . $theater_company_id );
	$result = mysql_query("select * from product_theater_info pti, products p2 where p2.id_product = pti.id_product and pti.id_product in (select p.id_product from products p where p.elegible = 1 and p.id_product_type = " . $product_type_id . ") and pti.id_theater_company = " . $theater_company_id);
	return $result;
}

function getProductsForUpdating($product_type_id, $theater_company_id) {
	$product_type_id = (int)$product_type_id;
	$theater_company_id = (int)$theater_company_id;
	
	global $utf_zone;
	
	$result = mysql_query("select * from products p, product_theater_info pti where p.id_product = pti.id_product and p.id_product_type = " . $product_type_id . " and pti.id_theater_company = " . $theater_company_id . " and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(p.release_date)) <= 90) " .
	" and pti.id_product not in (select ts.id_product from theater_show ts, theaters t where ts.id_theater = t.id_theater and t.id_theater_company = " . $theater_company_id . ")");
	return $result;
}

function getTheaterCompanyCities($theater_company_id) {
	$theater_company_id = (int)$theater_company_id;
	$result = mysql_query("SELECT cti.id_city, cti.id_site, c.slug FROM city_theater_info cti, cities c WHERE cti.id_theater_company = " . $theater_company_id . " and cti.id_city = c.id_city");
	return $result;
}

function getTheaterIdByName($theater_name) {
	$theater_name = mysql_real_escape_string($theater_name);
	$result = mysql_query("select id_theater from theaters where name = '" . $theater_name . "'");
	$row = mysql_fetch_array($result);
	return $row["id_theater"];
}

function clearTheaterShows($theater_company_id) {
	$theater_company_id = (int)$theater_company_id;
	if ($theater_company_id>0)
		return mysql_query("delete from theater_show where id_theater in (select id_theater from theaters where id_theater_company = " . $theater_company_id . ")");
	else
		return mysql_query("delete from theater_show");
}

function insertTheaterShow($product_id, $theater_id, $room, $time, $subtitle, $obs, $is_3d) {
	$product_id = (int)$product_id;
	$theater_id = (int)$theater_id;
	$room = (int)$room;
	$time = mysql_real_escape_string($time);
	$obs = mysql_real_escape_string($obs);
	$is_3d = (int)$is_3d;
	return mysql_query("insert into theater_show (id_product, id_theater, room, time, subtitle, obs, is3D) values (" .
	$product_id . "," . $theater_id . "," . $room . ",'" . $time . "'," . $subtitle . ",'" . $obs . "'," . $is_3d . ")");
}

function getTheaterShows($theater_id, $product_id) {
	$theater_id = (int)$theater_id;
	$product_id = (int)$product_id;
	$result = mysql_query("select * from theater_show where id_theater = " . $theater_id . " and id_product = " . $product_id . " order by room, time");
	return $result;
}

function getStateSlug($state_id) {
	$result = mysql_query("select slug from states where id_state = " . $state_id);
	$row = mysql_fetch_array($result);
	return $row["slug"];
}

function getStateIdBySlug($state_slug) {
	$state_slug = mysql_real_escape_string($state_slug);
	$result = mysql_query("select id_state from states where slug = '" . $state_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_state"];
}

function getTheaterCompany($theater_company_id) {
	$theater_company_id = (int)$theater_company_id;
	$result = mysql_query("select * from theater_companies where id_theater_company = " . $theater_company_id);
	$row = mysql_fetch_array($result);
	return $row;
}

function existProductTheaterShows($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select count(*) as number from theater_show where id_product = " . $product_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function existProductTheaterShows2($product_id, $theater_company_id) {
	$product_id = (int)$product_id;
	$theater_company_id = (int)$theater_company_id;
	$result = mysql_query("select count(*) as number from theater_show ts, theaters t where ts.id_product = " . $product_id . " and ts.id_theater = t.id_theater and t.id_theater_company = " . $theater_company_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getTheaterCompanyTheatersByCity($theater_company_id, $city_id) {
	$theater_company_id = (int)$theater_company_id;
	$city_id = (int)$city_id;
	$result = mysql_query("select * from theaters where id_city = " . $city_id . " and id_theater_company = " . $theater_company_id );
	return $result;
}

function getCityName($city_id) {
	$city_id = (int)$city_id;
	$result = mysql_query("select name from cities where id_city = " . $city_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

function getStateName($state_id) {
	$state_id = (int)$state_id;
	$result = mysql_query("select name from states where id_state = " . $state_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

function getStateAcronym($state_id) {
	$state_id = (int)$state_id;
	$result = mysql_query("select acronym from states where id_state = " . $state_id);
	$row = mysql_fetch_array($result);
	return $row["acronym"];
}

function updateTheaterCompanyPeriod($period, $theater_company_id) {
	$theater_company_id = (int)$theater_company_id;
	$period = mysql_real_escape_string($period);
	return mysql_query("update theater_companies set period = '" . $period . "' where id_theater_company = " . $theater_company_id);
}

function searchTheaterCompanyByTerm($search) {
	$search = mysql_real_escape_string($search);
	$result = mysql_query("select * from theater_companies where name like '" . $search . "' order by name");
	return $result;
}

function theaterCompanySlugExists($theater_company_slug) {
	$theater_company_slug = mysql_real_escape_string($theater_company_slug);
	$result = mysql_query("select count(*) as number from theater_companies where slug = '" . $theater_company_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function insertTheaterCompany($name, $bio, $site, $image, $user_id) {
	$name = mysql_real_escape_string($name);
	$bio = mysql_real_escape_string($bio);
	$site = mysql_real_escape_string($site);
	$image = mysql_real_escape_string($image);
	$user_id = (int)$user_id;
	
	$theater_company_slug = getPermalink($name);
	
	return mysql_query("insert into theater_companies (name, slug, bio, site, image, id_user)	values ('" . $name . "','" . $theater_company_slug . "','" . $bio . "','" . $site . "','" .	$image . "'," . $user_id . ")");
}

function updateTheaterCompanySlug($id, $theater_company_slug) {
	$id = (int)$id;
	$theater_company_slug = mysql_real_escape_string($theater_company_slug);
	mysql_query("update theater_companies set slug = '" . $theater_company_slug . "' where id_theater_company = " . $id);
}

function updateTheaterCompanyImage($id, $image) {
	$id = (int)$id;
	$image = mysql_real_escape_string($image);
	mysql_query("update theater_companies set image = '" . $image . "' where id_theater_company = " . $id);
}

function getTheaterCompanyImage($theater_company_id) {
	$theater_company_id = (int)$theater_company_id;
	$result = mysql_query("select image from theater_companies where id_theater_company = " . $theater_company_id);
	$row = mysql_fetch_array($result);
	return $row["image"];
}

function getTheaterCompanyName($theater_company_id) {
	$theater_company_id = (int)$theater_company_id;
	$result = mysql_query("select name from theater_companies where id_theater_company = " . $theater_company_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

function getProductTheaterCompanies($product_id) {
	$product_id = (int)$product_id;
	$result = mysql_query("select tc.*, pti.id_site, pti.is3D from product_theater_info pti, theater_companies tc where pti.id_product = " . $product_id . " and pti.id_theater_company = tc.id_theater_company");
	return $result;
}

function getTheater($theater_id) {
	$theater_id = (int)$theater_id;
	$result = mysql_query("select * from theaters where id_theater = " . $theater_id);
	$row = mysql_fetch_array($result);
	return $row;
}

function getTheaterIdBySlug($theater_slug) {
	$theater_slug = mysql_real_escape_string($theater_slug);
	$result = mysql_query("select id_theater from theaters where slug = '" . $theater_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_theater"];
}

function getTheaterProducts($theater_id, $order) {
	$theater_id = (int)$theater_id;
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "criticos") {
		$order_by = "p.critics_grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "p.users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title asc";
	}
	
	$result = mysql_query("select distinct p.*, ifnull(p.release_date,p.home_release_date) as date from theater_show ts, products p where ts.id_theater = " . $theater_id . " and ts.id_product = p.id_product order by " . $order_by);
	return $result;
}

function getTheaterCompanyNameByTheaterId($theater_id) {
	$result = mysql_query("select tc.name from theater_companies tc, theaters t where t.id_theater = " . $theater_id . " and t.id_theater_company = tc.id_theater_company");
	$row = mysql_fetch_array($result);
	return $row["name"];
}

function getTheaterCompanyPeriodByTheaterId($theater_id) {
	$result = mysql_query("select tc.period from theater_companies tc, theaters t where t.id_theater = " . $theater_id . " and t.id_theater_company = tc.id_theater_company");
	$row = mysql_fetch_array($result);
	return $row["period"];
}

function getTheatersByTheaterCompany($theater_company_id) {
	$theater_company_id = (int)$theater_company_id;
	$result = mysql_query("select * from theaters where id_theater_company = " . $theater_company_id);
	return $result;
}

function existsNews($link) {
	$link = mysql_real_escape_string($link);
	$result = mysql_query("select count(*) as number from news where url = '" . $link . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];	
}

function insertNews($publication_id, $title, $link, $date, $description, $news_text, $user_id, $featured, $featured_image, $image, $category_id) {
	$title = mysql_real_escape_string($title);
	$link = mysql_real_escape_string($link);
	$date = mysql_real_escape_string($date);
	$description = mysql_real_escape_string($description);
	$publication_id = (int)$publication_id;
	
	$slug = getPermalink($title);
	
	$featured = (int)$featured;
	$news_text = mysql_real_escape_string($news_text);
	$featured_image = mysql_real_escape_string($featured_image);
	$image = mysql_real_escape_string($image);
	$user_id = (int)$user_id;
	$category_id = (int)$category_id;
	
	return mysql_query("insert into news (id_publication, title, url, news_date, description, news_text, id_user, featured, featured_image, image, id_category, slug) " .
	" values (" . $publication_id . ",'" . $title . "','" . $link . "','" . date( 'Y-m-d H:i:s', $date) . "','" . $description . "','" . $news_text . "'," . $user_id . "," . $featured . ",'" . $featured_image . "','" . $image . "'," . $category_id . ",'" . $slug . "')");
	
}

function updateNews($news_id, $publication_id, $title, $link, $date, $description, $news_text, $user_id, $featured, $featured_image, $image, $category_id) {
	
	$news_id = (int)$news_id;
	
		$title = mysql_real_escape_string($title);
		$link = mysql_real_escape_string($link);
		$date = mysql_real_escape_string($date);
		$description = mysql_real_escape_string($description);
		$publication_id = (int)$publication_id;
	
		$slug = getPermalink($title);
	
		$featured = (int)$featured;
		$news_text = mysql_real_escape_string($news_text);
		$featured_image = mysql_real_escape_string($featured_image);
		$image = mysql_real_escape_string($image);
		$user_id = (int)$user_id;
		
		$category_id = (int)$category_id;
	
		//return mysql_query("insert into news (id_publication, title, url, news_date, description, news_text, id_user, featured, slug, featured_image) " .
		//		" values (" . $publication_id . ",'" . $title . "','" . $link . "','" . date( 'Y-m-d H:i:s', $date) . "','" . $description . "','" . $news_text . "'," . $user_id . "," . $featured . ",'" . $slug . "','" . $featured_image . "')");

		return mysql_query("update news set id_publication = " . $publication_id . ", title = '" . $title . "', url = '" . $link . "', news_date = '" .  date( 'Y-m-d H:i:s', $date) . "', description = '" . $description . "', news_text = '" . $news_text . "', id_user = " . $user_id . ", featured = " . $featured . ", featured_image = '" . $featured_image . "', image = '" . $image ."', id_category = " . $category_id . ", slug = '" .$slug . "' where id_news = " . $news_id);
		
}

function getNewsIdBySlug($news_slug) {
	$news_slug = mysql_real_escape_string($news_slug);
	$result = mysql_query("select id_news from news where slug = '" . $news_slug . "'");
	$row = mysql_fetch_array($result);
	return $row["id_news"];
}


function updateNewsSlug($news_id, $slug) {
	$news_id = (int)$news_id;
	$slug = mysql_real_escape_string($slug);
	mysql_query("update news set slug = '" . $slug . "' where id_news = " . $news_id);
}

function newsSlugExists($slug) {
	$slug = mysql_real_escape_string($slug);
	$result = mysql_query("select count(*) as number from news where slug = '" . $slug . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getProductRelatedNews($product_id, $begin, $count) {

	$name = str_replace("%","\%",mysql_real_escape_string(getProductName($product_id)));
	$original_name = str_replace("%","\%",mysql_real_escape_string(getProductOriginalName($product_id)));
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$sql = "(select * from news where title like '%" . $name . "%' or description like '%" . $name . "%' ) ";
	
	if (strlen($original_name)>0)
		 $sql = $sql . " union (select * from news where title like '%" . $original_name . "%' or description like '%" . $original_name . "%' ) ";
						 
	$product_people = getProductPeople($product_id);
	
	while ($pp_row = mysql_fetch_assoc($product_people)) {
		$sql = $sql . " union (select * from news where title like '%" . $pp_row["name"] . "%' or description like '%" . $pp_row["name"] . "%') ";
	}

	$result = mysql_query($sql . " order by news_date desc " . $limit_text);
	
	return $result;
	
}

function getNews($begin, $count, $order, $scope, $publication_slug, $featured) {

	$order = mysql_real_escape_string($order);
	$publication_slug = mysql_real_escape_string($publication_slug);

	$featured = (int)$featured;
	
	if ($order == "data") {
		$order_by = "n.news_date desc";
	} elseif ($order == "publicacao") {
		$order_by = "p.name asc, n.news_date desc";
	} elseif (($order=="maislidas") || ($order=="acessos")) {
		$order_by = "n.clicks desc, n.news_date desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;

	if ($publication_slug=="*") {
		return mysql_query("select *, n.slug as news_slug from news n, publications p where n.id_publication = p.id_publication and p.id_publication != 35 and featured = " . $featured . " order by " . $order_by . " " . $limit_text);
	} else {
		return mysql_query("select *, n.image as news_image, n.slug as news_slug from news n, publications p where n.id_publication = p.id_publication and p.slug = '" . $publication_slug . "' and featured = " . $featured . " order by " . $order_by . " " . $limit_text);
	}
}

function getArticles($begin, $count, $order, $category) {

	$order = mysql_real_escape_string($order);
	//$publication_slug = mysql_real_escape_string($publication_slug);

	//$featured = (int)$featured;

	if ($order == "data") {
		$order_by = "n.news_date desc";
	} elseif (($order=="maislidas") || ($order=="acessos")) {
		$order_by = "n.clicks desc, n.news_date desc";
	}

	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;

	if ($category == "todos")
	return mysql_query("select *, n.slug as news_slug from news n where n.featured = 1 order by " . $order_by . " " . $limit_text);
	else
	return mysql_query("select *, n.slug as news_slug from news n, categories c where n.featured = 1 and c.id_category = n.id_category and c.slug = '" . $category . "' order by " . $order_by . " " . $limit_text);
	
	//if ($publication_slug=="*") {
	//	return mysql_query("select *, n.slug as news_slug from news n, publications p where n.id_publication = p.id_publication and p.id_publication != 35 and featured = " . $featured . " order by " . $order_by . " " . $limit_text);
	//} else {
	//	return mysql_query("select *, n.image as news_image, n.slug as news_slug from news n, publications p where n.id_publication = p.id_publication and p.slug = '" . $publication_slug . "' and featured = " . $featured . " order by " . $order_by . " " . $limit_text);
	//}
}

function getPieceOfNews($news_id) {

	$news_id = (int)$news_id;

	$result = mysql_query("select * from news where id_news = " . $news_id);
	
	$row = mysql_fetch_array($result);
	
	return $row;
}

function getKritzNews($begin, $count, $order) {
	
	$order = mysql_real_escape_string($order);
	
	if ($order == "data") {
		$order_by = "n.news_date desc";
	} elseif ($order == "publicacao") {
		$order_by = "p.name asc, n.news_date desc";
	} elseif (($order=="maislidas") || ($order=="acessos")) {
		$order_by = "n.clicks desc, n.news_date desc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	return mysql_query("select * from news n, publications p where n.id_publication = p.id_publication and n.id_publication = 35 order by " . $order_by . " " . $limit_text);
}

function getPublicationNews($publication_id, $begin, $count, $order) {
	
	$order = mysql_real_escape_string($order);
	$publication_id = (int)$publication_id;
	
	if ($order == "data") {
		$order_by = "n.news_date desc";
	} elseif ($order == "publicacao") {
		$order_by = "p.name asc, n.news_date desc";
	} elseif ($order == "relevancia") {
		$order_by = "";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	return mysql_query("select *, news as news_slug from news n, publications p where p.id_publication = " . $publication_id . " and n.id_publication = p.id_publication order by " . $order_by . " " . $limit_text);
}

//bookmarks

function getUserBookmarks($user_id, $begin, $count, $order) {
	
	$user_id = (int)$user_id;
	
	$order = mysql_real_escape_string($order);
		
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "p.users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title asc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select *, ifnull(p.release_date,p.home_release_date) as date from products p , user_product_bookmarks upb where upb.id_user = " . $user_id . " and upb.id_product = p.id_product order by " . $order_by . " " . $limit_text );

	return $result;
}

function isUserProductBookmark($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$result = mysql_query("select count(*) as number from user_product_bookmarks where id_product = " . $product_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function addProductBookmark($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("insert into user_product_bookmarks (id_product, id_user) values (" . $product_id . "," . $user_id . ")");
	removeProductWant($product_id, $user_id);
	removeProductNotInterested($product_id, $user_id);
	if (!isUserProductSeen($product_id, $user_id))
		addProductSeen($product_id, $user_id);
}

function removeProductBookmark($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("delete from user_product_bookmarks where id_product = " . $product_id . " and id_user = " . $user_id );
}

//wants-to-see

function getUserWants($user_id, $begin, $count, $order) {
	
	$user_id = (int)$user_id;
	
	$order = mysql_real_escape_string($order);
		
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "p.users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title asc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select *, ifnull(p.release_date,p.home_release_date) as date from products p , user_product_wants upb where upb.id_user = " . $user_id . " and upb.id_product = p.id_product order by " . $order_by . " " . $limit_text );

	return $result;
}

function isUserProductWant($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$result = mysql_query("select count(*) as number from user_product_wants where id_product = " . $product_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function addProductWant($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("insert into user_product_wants (id_product, id_user) values (" . $product_id . "," . $user_id . ")");
	removeProductNotInterested($product_id, $user_id);
	removeProductBookmark($product_id, $user_id);
	removeProductSeen($product_id, $user_id);
}

function removeProductWant($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("delete from user_product_wants where id_product = " . $product_id . " and id_user = " . $user_id );
}

//not-interested

function getUserNotInterested($user_id, $begin, $count, $order) {
	
	$user_id = (int)$user_id;
	
	$order = mysql_real_escape_string($order);
		
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "p.users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title asc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select *, ifnull(p.release_date,p.home_release_date) as date from products p , user_product_not_interested upb where upb.id_user = " . $user_id . " and upb.id_product = p.id_product order by " . $order_by . " " . $limit_text );

	return $result;
}

function isUserProductNotInterested($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$result = mysql_query("select count(*) as number from user_product_not_interested where id_product = " . $product_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function addProductNotInterested($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("insert into user_product_not_interested (id_product, id_user) values (" . $product_id . "," . $user_id . ")");
	removeProductWant($product_id, $user_id);
	removeProductBookmark($product_id, $user_id);
	removeProductSeen($product_id, $user_id);
}

function removeProductNotInterested($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("delete from user_product_not_interested where id_product = " . $product_id . " and id_user = " . $user_id );
}

//seen

function getUserSeen($user_id, $begin, $count, $order) {
	
	$user_id = (int)$user_id;
	
	$order = mysql_real_escape_string($order);
		
	if ($order == "data") {
		$order_by = "date desc";
	} elseif ($order == "t-kritz") {
		$order_by = "p.grade desc";
	} elseif ($order == "usuarios") {
		$order_by = "p.users_grade desc";
	} elseif ($order == "nome") {
		$order_by = "p.title asc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	$result = mysql_query("select *, ifnull(p.release_date,p.home_release_date) as date from products p , user_product_seen upb where upb.id_user = " . $user_id . " and upb.id_product = p.id_product order by " . $order_by . " " . $limit_text );

	return $result;
}

function isUserProductSeen($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$result = mysql_query("select count(*) as number from user_product_seen where id_product = " . $product_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function addProductSeen($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("insert into user_product_seen (id_product, id_user) values (" . $product_id . "," . $user_id . ")");
	removeProductWant($product_id, $user_id);
	//removeProductBookmark($product_id, $user_id);
	removeProductNotInterested($product_id, $user_id);
}

function removeProductSeen($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	mysql_query("delete from user_product_seen where id_product = " . $product_id . " and id_user = " . $user_id );
	removeProductBookmark($product_id, $user_id);
}

function getReviews() {
	return mysql_query("select * from product_reviews");
}

function existUserReview($product_id, $user_id) {
	$product_id = (int)$product_id;
	$user_id = (int)$user_id;
	$result = mysql_query("select count(*) as number from product_reviews where id_product = " . $product_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

//product reviews evaluations

function existProductReviewEvaluation($user_id, $product_review_id) {
	$user_id = (int)$user_id;
	$product_review_id = (int)$product_review_id;

	$result = mysql_query("select count(*) as number from product_review_evaluation where id_product_review = " . $product_review_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function isProductReviewEvaluation($user_id, $product_review_id, $evaluation) {
	$user_id = (int)$user_id;
	$product_review_id = (int)$product_review_id;
	$evaluation = (int)$evaluation;
	$result = mysql_query("select count(*) as number from product_review_evaluation where id_product_review = " . $product_review_id . " and id_user = " . $user_id . " and evaluation = " . $evaluation);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function insertProductReviewEvaluation($user_id, $product_review_id, $evaluation) {
	$user_id = (int)$user_id;
	$product_review_id = (int)$product_review_id;
	$evaluation = (int)$evaluation;
	
	mysql_query("insert into product_review_evaluation (id_user, id_product_review, evaluation) values (" . $user_id . "," . $product_review_id . "," . $evaluation . ")");
	
}

function updateProductReviewEvaluation($user_id, $product_review_id, $evaluation) {
	$user_id = (int)$user_id;
	$product_review_id = (int)$product_review_id;
	$evaluation = (int)$evaluation;
	
	mysql_query("update product_review_evaluation set evaluation = " . $evaluation . " where id_user = " . $user_id . " and id_product_review = " . $product_review_id);
	
}

function removeProductReviewEvaluation($user_id, $product_review_id) {
	$user_id = (int)$user_id;
	$product_review_id = (int)$product_review_id;
	
	mysql_query("delete from product_review_evaluation where id_user = " . $user_id . " and id_product_review = " . $product_review_id);
	
}

function getProductReviewEvaluationCount($product_review_id, $evaluation) {
	$product_review_id = (int)$product_review_id;
	$evaluation = (int)$evaluation;
	
	$result = mysql_query("select count(*) as number from product_review_evaluation where id_product_review = " . $product_review_id . " and evaluation = " . $evaluation);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

//news evaluations

function existEvaluation($user_id, $generic_id, $generic_type_id) {
	$user_id = (int)$user_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$result = mysql_query("select count(*) as number from user_evaluations where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id . " and id_user = " . $user_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function isEvaluation($user_id, $generic_id, $generic_type_id, $evaluation) {
	$user_id = (int)$user_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$evaluation = (int)$evaluation;
	$result = mysql_query("select count(*) as number from user_evaluations where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id . " and id_user = " . $user_id . " and evaluation = " . $evaluation);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function insertEvaluation($user_id, $generic_id, $generic_type_id, $evaluation) {
	$user_id = (int)$user_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$evaluation = (int)$evaluation;
	
	mysql_query("insert into user_evaluations (id_user, id_generic, id_generic_type, evaluation) values (" . $user_id . "," . $generic_id . "," . $generic_type_id . "," . $evaluation . ")");
	
}

function updateEvaluation($user_id, $generic_id, $generic_type_id, $evaluation) {
	$user_id = (int)$user_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$evaluation = (int)$evaluation;
	
	mysql_query("update user_evaluations set evaluation = " . $evaluation . " where id_user = " . $user_id . " and id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id);
	
}

function removeEvaluation($user_id, $generic_id, $generic_type_id) {
	$user_id = (int)$user_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	mysql_query("delete from user_evaluations where id_user = " . $user_id . " and id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id);
	
}

function getEvaluationCount($generic_id, $generic_type_id, $evaluation) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$evaluation = (int)$evaluation;
	
	$result = mysql_query("select count(*) as number from user_evaluations where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id . " and evaluation = " . $evaluation);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

//

function getProductsViewsCount() {
	$result = mysql_query("select sum(views) as number from products");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getPeopleViewsCount() {
	$result = mysql_query("select sum(views) as number from people");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getPublicationsViewsCount() {
	$result = mysql_query("select sum(views) as number from publications");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getUsersViewsCount() {
	$result = mysql_query("select sum(views) as number from users");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getCompaniesViewsCount() {
	$result = mysql_query("select sum(views) as number from companies");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getProductReviewsClicksCount() {
	$result = mysql_query("select sum(clicks) as number from product_reviews");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getNewsClicksCount() {
	$result = mysql_query("select sum(clicks) as number from news");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function getProviders() {
	return mysql_query("select * from providers");	
}

function existProviderChannel($provider_id, $channel_xml_id) {
	$provider_id = (int)$provider_id;
	$channel_xml_id = trim(mysql_real_escape_string($channel_xml_id));
	$result = mysql_query("select count(*) as number from channels where id_provider = " . $provider_id . " and id_channel_xml = '" . $channel_xml_id . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function insertChannel($provider_id, $channel_xml_id, $name, $number, $icon, $slug) {
	$number = (int)$number;
	$provider_id = (int)$provider_id;
	$name = trim(mysql_real_escape_string($name));
	$icon = mysql_real_escape_string($icon);
	$channel_xml_id = mysql_real_escape_string($channel_xml_id);
	mysql_query("insert into channels (id_provider, id_channel_xml, name, number, icon, slug) values (" . $provider_id . ",'" . $channel_xml_id . "','" . $name . "'," . $number . ",'/images/channels/" . $icon . "','" . $slug . "')");
}

function existProduct($title, $original_title, $year) {
	$title = trim(mysql_real_escape_string($title));
	$original_title = trim(mysql_real_escape_string($original_title));
	$year = (int)$year;
	//$result = mysql_query("select count(*) as number from products where title = '" . $title . "' and ifnull(original_title,title) = '" . $original_title . "' and year = " . $year);
	$result = mysql_query("select count(*) as number from products where replace(title,': ',' - ') = '" . str_replace(": "," - ",$title) . "' and abs(year - " . $year . ") < 2");
	$row = mysql_fetch_array($result);
	
	if ($row["number"]>0) {//tentando evitar erros
		return $row["number"];
	} else {
		if (strlen($original_title)>0) {
			$result = mysql_query("select count(*) as number from products where ifnull(replace(original_title,': ',' - '),replace(title,': ',' - ')) = '" . str_replace(": "," - ",$original_title) . "' and abs(year - " . $year . ") < 2");
			$row = mysql_fetch_array($result);
			return $row["number"];
		} else {
			return 1;
		}
	}
	
}

function getProductIdByTitles($title, $original_title, $year) {
	
	$title = trim(mysql_real_escape_string($title));
	$original_title = trim(mysql_real_escape_string($original_title));
	$year = (int)$year;
	//$result = mysql_query("select count(*) as number from products where title = '" . $title . "' and ifnull(original_title,title) = '" . $original_title . "' and year = " . $year);
	
	//replace(title,': ',' - ') = '" . str_replace(": "," - ",$product_title)
	
	$result = mysql_query("select count(*) as number from products where replace(title,': ',' - ') = '" . str_replace(": "," - ",$title) . "' and abs(year - " . $year . ") < 2");
	$row = mysql_fetch_array($result);
	
	if ($row["number"]>0) {//tentando evitar erros
		
		$result = mysql_query("select id_product from products where replace(title,': ',' - ') = '" . str_replace(": "," - ",$title) . "' and abs(year - " . $year . ") < 2");
		$row = mysql_fetch_array($result);
		return (int)$row["id_product"];
		
	} else {
		if (strlen($original_title)>0) {
			$result = mysql_query("select id_product from products where ifnull(replace(original_title,': ',' - '),replace(title,': ',' - ')) = '" . str_replace(": "," - ",$original_title) . "' and abs(year - " . $year . ") < 2");
			$row = mysql_fetch_array($result);
			return (int)$row["id_product"];
		} else {
			return 0;
		}
	}
	
	//$title = trim(mysql_real_escape_string($title));
	//$original_title = trim(mysql_real_escape_string($original_title));
	//$year = (int)$year;
	//$result = mysql_query("select id_product from products where title = '" . $title . "' and ifnull(original_title,title) = '" . $original_title . "' and and abs(year - " . $year . ") < 2");
	//$row = mysql_fetch_array($result);
	//return $row["id_product"];
}

function existProgram($program_xml_id) {
	
	$program_xml_id = (int)$program_xml_id;
	
	$result = mysql_query("select count(*) as number from programmes where id_programme_xml = " . $program_xml_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function insertProgram($program_xml_id, $start, $stop, $channel_xml_id, $product_id) {
	$program_xml_id = (int)$program_xml_id;
	$channel_xml_id = mysql_real_escape_string($channel_xml_id);
	$product_id = (int)$product_id;
	
	mysql_query("insert into programmes (id_programme_xml, start, stop, id_channel_xml, id_product) values (" . $program_xml_id . ",'" . $start . "','" . $stop . "','" . $channel_xml_id . "'," . $product_id . ")");
}

function getChannelXMLId($slug) {
	
	$slug = mysql_real_escape_string($slug);
	
	$result = mysql_query("select id_channel_xml from channels where slug = '" . $slug . "' limit 0,1");
	$row = mysql_fetch_array($result);
	return $row["id_channel_xml"];
}

function getProgrammes($product_id, $provider_id) {
	
	$product_id = (int)$product_id;
	$provider_id = (int)$provider_id;
	
	global $utf_zone;
	
	return mysql_query("SELECT pr.*, (select distinct c.name from channels c where c.id_channel_xml = pr.id_channel_xml) as name, (select distinct c.icon from channels c where c.id_channel_xml = pr.id_channel_xml) as icon, (select distinct c.slug from channels c where c.id_channel_xml = pr.id_channel_xml) as slug FROM programmes pr where (time_to_sec(timediff(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP()),pr.stop)) < 0) and pr.id_product = " . $product_id . " order by pr.start asc");
}

function getChannel($slug) {
	
	$slug = mysql_real_escape_string($slug);
	
	$result = mysql_query("select * from channels where slug = '" . $slug . "' limit 0, 1");
	$row = mysql_fetch_array($result);
	return $row;
}

function getChannelPrograms($channel_xml_id) {
	
	$channel_xml_id = mysql_real_escape_string($channel_xml_id);
	
	global $utf_zone;
	return mysql_query("select pr.*, p.* from programmes pr, products p where pr.id_product = p.id_product and (time_to_sec(timediff(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP()),pr.stop)) < 0) and pr.id_channel_xml = '" . $channel_xml_id . "' order by pr.start asc");
}

function getProductsTV($product_type_id, $begin, $count) {
	
	$product_type_id = (int)$product_type_id;
	
	global $utf_zone;
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	return mysql_query("select pr.*, p.*, (select distinct c.name from channels c where c.id_channel_xml = pr.id_channel_xml) as name, (select distinct c.icon from channels c where c.id_channel_xml = pr.id_channel_xml) as icon, (select distinct c.slug from channels c where c.id_channel_xml = pr.id_channel_xml) as channel_slug from programmes pr, products p where pr.id_product = p.id_product and (time_to_sec(timediff(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP()),pr.stop)) < 0) order by pr.start asc " . $limit_text);
}

function existProductSummary($id) {
	$id = (int)$id;
	$result = mysql_query("select summary from products where id_product = " . $id);
	$row = mysql_fetch_array($result);
	return strlen($row["summary"]);
}

function updateProductSummary($id, $summary) {
	$id = (int)$id;
	$summary = mysql_real_escape_string($summary);
	if (!existProductSummary($id))
		mysql_query("update products set summary = '" . $summary . "' where id_product = " . $id);
}

function existProductCountry($id) {
	$id = (int)$id;
	$result = mysql_query("select country from products where id_product = " . $id);
	$row = mysql_fetch_array($result);
	return strlen($row["country"]);
}

function updateProductCountry($id, $country) {
	$id = (int)$id;
	$country = mysql_real_escape_string($country);
	if (!existProductCountry($id))
		mysql_query("update products set country = '" . $country . "' where id_product = " . $id);
}

function existProductClassification($id) {
	$id = (int)$id;
	$result = mysql_query("select id_classification from products where id_product = " . $id);
	$row = mysql_fetch_array($result);
	return $row["id_classification"];
}

function updateProductClassification($id, $classification) {
	$id = (int)$id;
	$classification = mysql_real_escape_string($classification);
	if (!existProductClassification($id)) {
		$number = ereg_replace("[^0-9]", "", $classification);
		if ($number == "10") {
			$classification_id = 3;
		} elseif ($number == "12") {
			$classification_id = 4;
		} elseif ($number == "14") {
			$classification_id = 5;
		} elseif ($number == "16") {
			$classification_id = 6;
		} elseif ($number == "18") {
			$classification_id = 7;
		} elseif ((strlen($number)==0) && (strlen($classification)>0)) {
			$classification_id = 2;
		} else {
			$classification_id = 0;
		}
		mysql_query("update products set id_classification = " . $classification_id . " where id_product = " . $id);
	}
}

function countProductsbyTitle($title) {
	$title = mysql_real_escape_string($title);
	$result = mysql_query("select count(*) as number from products where title = '" . $title . "'");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function clearPrograms() {
	mysql_query("delete from programmes");
}

function clearChannels() {
	mysql_query("delete from channels");
}

function isEditor($user_id, $publication_id) {
	$user_id = (int)$user_id;
	$publication_id = (int)$publication_id;
	$result = mysql_query("select count(*) as number from user_publication where id_user = " . $user_id . " and id_publication = " . $publication_id . " and editor = 1");
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function isEditor2($user_id) {
	$user_id = (int)$user_id;
	$result = mysql_query("select count(*) as number from user_publication where id_user = " . $user_id . " and editor = 1");
	$row = mysql_fetch_array($result);
	return $row["number"];
}


function existsMedia($media_type_id, $generic_id, $generic_type_id) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$media_type_id = (int)$media_type_id;
	$result = mysql_query("select count(*) as number from media where id_generic = " . $generic_id . " and id_media_type = " . $media_type_id . " and id_generic_type = " . $generic_type_id);
	$row = mysql_fetch_array($result);
	return $row["number"];
}

function insertMedia($media_type_id, $generic_id, $generic_type_id, $name, $description, $url, $media_date, $default) {
	$media_type_id = (int)$media_type_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$name = mysql_real_escape_string($name);
	$description = mysql_real_escape_string($description);
	$url = mysql_real_escape_string($url);
	$media_date = mysql_real_escape_string($media_date);
	$default = (int)$default;
		
	//echo "insert into media (id_media_type, id_generic, id_generic_type, name, description, url, media_date, isDefault) values (" . $media_type_id . "," . $generic_id . "," . $generic_type_id . ",'" . $name . "','" . $description . "','" . $url . "','" . $media_date . "'," . $default . ")";
	
	if ($default == 1) {
		mysql_query("update media set isDefault = 0 where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id . " and id_media_type = " . $media_type_id);
	}
	
	return mysql_query("insert into media (id_media_type, id_generic, id_generic_type, name, description, url, media_date, isDefault) values (" . $media_type_id . "," . $generic_id . "," . $generic_type_id . ",'" . $name . "','" . $description . "','" . $url . "','" . $media_date . "'," . $default . ")");

}

function updateMedia($media_type_id, $generic_id, $generic_type_id, $name, $description, $url, $media_date, $default) {
	
	$media_type_id = (int)$media_type_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$default = (int)$default;
	
	
	
	//$product_id = (int)$product_id;
	$name = mysql_real_escape_string($name);
	$description = mysql_real_escape_string($description);
	$url = mysql_real_escape_string($url);
	//$media_date = mysql_real_escape_string($media_date);
	
	//if ($default == 1)
		//mysql_query("update media set isDefault = 0 where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id);
	
	//mysql_query("delete from product_media where id_product = " . $product_id . " and id_media_type = " . $media_type_id);
	
	//mysql_query("insert into product_media (id_media_type, id_product, name, description, url, media_date) values (" . $media_type_id . "," . $product_id . ",'" . $name . "','" . $description . "','" . $url . "','" . $media_date . "')");
	
	return mysql_query("update media set name = '" . $name . "', description = '" . $description . "', url = '" . $url . "' where id_generic = " . $generic_id . " and id_media_type = " . $media_type_id . " and id_generic_type = " . $generic_type_id . " and isDefault = 1");
	
}

function updateMedia2($media_id, $media_type_id, $generic_id, $generic_type_id, $name, $description, $url, $default) {

	$media_id = (int)$media_id;
	$media_type_id = (int)$media_type_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$default = (int)$default;

	//if (!existsMedia($media_type_id, $generic_id, $generic_type_id)) {
	//	insertMedia($media_type_id, $generic_id, $generic_type_id, $name, $description, $url, $media_date, $default);
	//	return;
	//}

	//$product_id = (int)$product_id;
	$name = mysql_real_escape_string($name);
	$description = mysql_real_escape_string($description);
	$url = mysql_real_escape_string($url);
	//$media_date = mysql_real_escape_string($media_date);

	//mysql_query("delete from product_media where id_product = " . $product_id . " and id_media_type = " . $media_type_id);

	if ($default == 1) {
		mysql_query("update media set isDefault = 0 where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id . " and id_media_type = " . $media_type_id);
	}
	
	//mysql_query("insert into product_media (id_media_type, id_product, name, description, url, media_date) values (" . $media_type_id . "," . $product_id . ",'" . $name . "','" . $description . "','" . $url . "','" . $media_date . "')");

	return mysql_query("update media set name = '" . $name . "', description = '" . $description . "', url = '" . $url . "', id_generic = " . $generic_id . ", id_media_type = " . $media_type_id . ", id_generic_type = " . $generic_type_id . ", isDefault = " . $default . " where id_media = " . $media_id);

}

function updateMediaUrl($id, $url) {
	$id = (int)$id;
	$url = mysql_real_escape_string($url);
	
	mysql_query("update media set url = '" . $url . "' where id_media = " . $id);
}

function getMediaTypeName($media_type_id) {
	$media_type_id = (int)$media_type_id;
	$result = mysql_query("select name from media_types where id_media_type = " . $media_type_id);
	$row = mysql_fetch_array($result);
	return $row["name"];	
}

function getMediaTypes($types) {
	$result = mysql_query("select * from media_types where id_media_type in (" . $types . ")");
	return $result;
}

function getMedia($media_id) {
	$media_id = (int)$media_id;
	$result = mysql_query("select * from media where id_media = " . $media_id);
	$row = mysql_fetch_array($result);
	return $row;
}

function getProductByMedia($media_id) {
	$media_id = (int)$media_id;
	$result = mysql_query("select id_generic from media where id_media = " . $media_id);
	$row = mysql_fetch_array($result);
	return $row["id_generic"];
}

function updateMediaViews($media_id) {
	$media_id = (int)$media_id;
	mysql_query("update media set views = views + 1 where id_media = " . $media_id);
}

function getDefaultTrailerId($generic_id, $generic_type_id) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$result = mysql_query("select id_media from media where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id . " and id_media_type = 4 and isDefault = 1");
	$row = mysql_fetch_array($result);
	return $row["id_media"];
}

function getDefaultPosterId($generic_id, $generic_type_id) {
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$result = mysql_query("select id_media from media where id_generic = " . $generic_id . " and id_generic_type = " . $generic_type_id . " and id_media_type = 3 and isDefault = 1");
	$row = mysql_fetch_array($result);
	return $row["id_media"];
}

function getBoxOffice($top_type_id) {
	$top_type_id = (int)$top_type_id;
	$result = mysql_query("select * from products_top pt left outer join products p on pt.id_product = p.id_product having pt.id_top_type = " . $top_type_id);
	return $result;
}

function getProductMedia() {
	
	$result = mysql_query("select * from media where id_generic_type = 1");
	return $result;
}

function getAllImages() {

	$result = mysql_query("select * from media where id_media_type = 3 or id_media_type = 5");
	return $result;
}

function insertActivity($activity_type_id, $user_id, $generic_id, $generic_type_id) {
	$activity_type_id = (int)$activity_type_id;
	$user_id = (int)$user_id;
	$generic_id = (int)$generic_id;
	$generic_type_id = (int)$generic_type_id;
	$time = date( 'Y-m-d H:i:s', time());
	return mysql_query("insert into activities (id_activity_type, id_user, id_generic,id_generic_type, time) values (" . $activity_type_id . "," . $user_id . "," . $generic_id . "," . $generic_type_id . ",'" . $time . "')");
}

function getActivities($begin, $count, $order, $scope) {
	
	$order = mysql_real_escape_string($order);
	
	global $utf_zone;
	
	if ($order == "data") {
		$order_by = "a.time desc";
	}
	
	if ($count == 0)
		$limit_text = "";
	else
		$limit_text = "limit " . $begin . "," . $count;
	
	if ($scope == "24h") {
		$result = mysql_query("select * from activities a, activity_types at where a.id_activity_type = at.id_activity_type and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(a.time)) <= 1) order by " .  $order_by . " " . $limit_text);
	} elseif ($scope == "semana") {
		$result = mysql_query("select * from activities a, activity_types at where a.id_activity_type = at.id_activity_type and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(a.time)) <= 7) order by " .  $order_by . " " . $limit_text);
	} elseif ($scope == "mes") {
		$result = mysql_query("select * from activities a, activity_types at where a.id_activity_type = at.id_activity_type and ((TO_DAYS(TIMESTAMPADD(HOUR,-" . $utf_zone . ",UTC_TIMESTAMP())) - TO_DAYS(a.time)) <= 30) order by " .  $order_by . " " . $limit_text);
	} elseif ($scope == "todos") {
		$result = mysql_query("select * from activities a, activity_types at where a.id_activity_type = at.id_activity_type order by " .  $order_by . " " . $limit_text);
	}
	
	return $result;
}

function getProductByReview($review_id) {
	$review_id = (int)$review_id;
	$result = mysql_query("select id_product from product_reviews where id_product_review = " . $review_id);
	$row = mysql_fetch_array($result);
	return $row["id_product"];
}

function getCategories() {
	$result = mysql_query("select * from categories order by name");
	return $result;
}

function getCategoryName($category_id) {
	$category_id = (int)$category_id;
	$result = mysql_query("select name from categories where id_category = " . $category_id);
	$row = mysql_fetch_array($result);
	return $row["name"];
}

function getCategoryNameBySlug($category) {
	$category = $category;
	$result = mysql_query("select name from categories where slug = '" . $category . "'");
	$row = mysql_fetch_array($result);
	return $row["name"];
}

?>
