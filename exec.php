<?
function app_xxx($vars){
	global $_g;
	$action = (isset($_GET['a'])?$_GET['a']:'');
	$access = access("app_links");

	// Rechte Level 0 (Gesperrt)
		echo 'Kein Zugriff';
	
	if($access >= 1) {
	// Rechte level 1 (nur lesen)
		if($action == 'list) {

		}
	}
	if($access >= 2) {
	// Rechte Level 2 (Lesen und kommentieren)	

	}
	if($access >= 3) {
	// Rechtelevel 3
		
	}
	if($access >= 4) {
	// Rechtelevel 4

		
	}
	if($access >= 5) {
	// Rechtelevel 5

		
	}
	if($access >= 6) {
	// Rechtelevel 6

		
	}
	if($access >= 7) {
	// Rechtelevel 7 (Moderatives)

		
	}
	if($access >= 8) {
	// Rechtelevel 8 (Super Moderatives)

		
	}
	if($access >= 9) {
	// Rechtelevel 9 (Administratives)
		
	}
}
?>