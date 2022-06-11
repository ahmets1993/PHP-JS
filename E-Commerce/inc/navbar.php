
	<?php
$navigation = null;
$xmlData = simplexml_load_file("config/navigation.xml");
// $navigation = $xmlData->user;
//print_r($navigation->section);
//print_r($xmlData->anonym);
//print_r($xmlData->user);
//print_r($xmlData->admin)
//print_r($navigation);

if (isset($user)) {
	if($user->is_admin) {
		$navigation = $xmlData->admin;
	}
	else {
		$navigation = $xmlData->user;
	}


} else {
	$navigation = $xmlData->anonym;
}

function createNavbarItem($pageTitle, $pageName)
{
	return "<li class=\"nav-items\">
		<a class=\"nav-item nav-link text-info\" href=\"?page=" . $pageName . "\"></i> " . $pageTitle . "</a>   
		</li>";
}

?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mx-auto text-center">
<?php
for ($i = 0; $i < sizeof($navigation->section); $i++) {
	echo createNavbarItem($navigation->section[$i][0], $navigation->section[$i][0]->attributes()[0]);
}
?>
	</ul>
	
      </div>
    </nav>

