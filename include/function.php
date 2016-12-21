<?
	session_start();

#############################################################
# Get Settings
#############################################################

    $query_settings         = "SELECT * FROM `settings` where id=1";    
    $genral_settings        = $pdo->pdoGetRow($query_settings);
    $site_name      		= $genral_settings['sitename'];
    $site_url        		= $genral_settings['site_url'];
	$site_email				= $genral_settings['site_email'];
    $upload_folder			= $genral_settings['upload_folder'];
	$theme_color			= $genral_settings['theme_color'];
	$types_fileupload		= $genral_settings['types_fileupload'];
	$facebook				= $genral_settings['facebook'];
	$twitter				= $genral_settings['twitter'];
	$youtube				= $genral_settings['youtube'];
	$instagram				= $genral_settings['instagram'];
	$googleplus				= $genral_settings['googleplus'];
	$flickr					= $genral_settings['flickr'];
	$contact_form_email		= $genral_settings['contact_form_email'];
	$contact_form_details	= $genral_settings['contact_form_details'];
	
#############################################################
# Get Url Institutes
#############################################################

	/*$domain = $_SERVER['HTTP_HOST'];
	$tmp = explode('.', $domain);
	$subdomain = current($tmp);*/

 	$subdomain = basename(dirname($_SERVER['PHP_SELF']));
	$url_file	= $site_url;
	$subdomain_url = "http://".$_SERVER['HTTP_HOST']."/".$subdomain;
	
#############################################################
# Get Theme
#############################################################

	if($subdomain != ''){
		$sql = "SELECT * FROM `institutes` WHERE seo_link LIKE '".$subdomain."'";
        $result = $pdo->pdoGetRow($sql, $data);
		$institute_id = $result['user_id'];
		$institute_id_id = $result['id'];
	} else {
		$institute_id = '1';
	}
	
	if($_SESSION['insert_id'] == '') {
		$_SESSION['insert_id'] = '1';
	}
	
	
/*	echo 'subdomain = '.$subdomain."<br>";
	echo 'SESSION insert_id = '.$_SESSION['insert_id']."<br>";
	echo 'institute_id = '.$institute_id."<br>";

*/
if($institute_id != '') {
    $query_theme         	= "SELECT * FROM `themes` where insert_id=".$institute_id."";    
    $genral_theme        	= $pdo->pdoGetRow($query_theme);
    $logo_header      		= $genral_theme['logo_header'];
    $logo_footer        	= $genral_theme['logo_footer'];
    $navbar_color        	= $genral_theme['navbar_color'];
	$navbar_dropdown_color	= $genral_theme['navbar_dropdown_color'];
	$navbar_dropdown_color_font	= $genral_theme['navbar_dropdown_color_font'];
	$navbar_dropdown_color_hover	= $genral_theme['navbar_dropdown_color_hover'];
	$countdown_bg_color	= $genral_theme['countdown_bg_color'];
	$footer_color			= $genral_theme['footer_color'];
	$footer_bottom_color	= $genral_theme['footer_bottom_color'];
	$slidebar_color			= $genral_theme['slidebar_color'];
	$breadcrumb_color		= $genral_theme['breadcrumb_color'];
	$calendar_text			= $genral_theme['calendar_text'];
	$calendar_link			= $genral_theme['calendar_link'];
	$calendar_img			= $genral_theme['calendar_img'];
	$event_text				= $genral_theme['event_text'];
	$event_link				= $genral_theme['event_link'];
	$event_countdown_text	= $genral_theme['event_countdown_text'];
	$event_countdown_date	= $genral_theme['event_countdown_date'];
}

#############################################################
# Cut Text
#############################################################

	function cutText($string, $length) {
		if ($length < strlen($string)) {
			while ($string{$length} != " ") {
				$length--;
			}
			return substr($string, 0, $length);
		} else
			return $string;
	}

#############################################################
# Generate Random Number
#############################################################

    function RandNumber($e){
        for($i=0;$i<$e;$i++){
		    $rand =  $rand .  rand(0, 9);  
		 }
        return $rand;
    }

#############################################################
# Generate Random Hash
#############################################################

    function GeraHash($qtd){
        $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
        $QuantidadeCaracteres = strlen($Caracteres);
        $QuantidadeCaracteres--;
        $Hash=NULL;
        for($x=1;$x<=$qtd;$x++){
            $Posicao = rand(0,$QuantidadeCaracteres);
            $Hash .= substr($Caracteres,$Posicao,1);
        }
        return $Hash;
    }


#############################################################
# Easily Uploading Files
#############################################################

function upload($file_id) {
	global $upload_folder ;
	global $types_fileupload ;
	 $folder = $upload_folder;
	 $types = $types_fileupload;
    if(!$_FILES[$file_id]['name']) return array('','No file specified');

    $file_title = $_FILES[$file_id]['name'];
    //Get file extension
    $ext_arr = split("\.",basename($file_title));
    $ext = strtolower($ext_arr[count($ext_arr)-1]); //Get the last extension

	//Rename file
	$uploadedfileimage = $file_title;
	strstr($_FILES[$file_id]["type"],"image");
	$splitedImageName=explode(".",$uploadedfileimage);
	$type=$splitedImageName[sizeof($splitedImageName)-1];
	$file_title=time().".$type";

    //Not really uniqe - but for all practical reasons, it is
    $uniqer = substr(md5(uniqid(rand(),1)),0,5);
    $file_name = $uniqer . '_' . $file_title;//Get Unique Name

    $all_types = explode(",",strtolower($types));
    if($types) {
        if(in_array($ext,$all_types));
        else {
            $result = "'".$_FILES[$file_id]['name']."' is not a valid file."; //Show error if any.
            return array('',$result);
        }
    }

    //Where the file must be uploaded to
    $uploadfile = $folder . $file_name;

    $result = '';
    //Move the file from the stored location to the new location
    if (!move_uploaded_file($_FILES[$file_id]['tmp_name'], $uploadfile)) {
        $result = "Cannot upload the file '".$_FILES[$file_id]['name']."'"; //Show error if any.
        if(!file_exists($folder)) {
            $result .= " : Folder don't exist.";
        } elseif(!is_writable($folder)) {
            $result .= " : Folder not writable.";
        } elseif(!is_writable($uploadfile)) {
            $result .= " : File not writable.";
        }
        $file_name = '';
        
    } else {
        if(!$_FILES[$file_id]['size']) { //Check if the file is made
            @unlink($uploadfile);//Delete the Empty file
            $file_name = '';
            $result = "Empty file found - please use a valid file."; //Show the error message
        } else {
            chmod($uploadfile,0777);//Make it universally writable.
        }
    }

    return array($file_name,$result);
}

#############################################################
# Copy Folder And Content
#############################################################

function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 

?>


