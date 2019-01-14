<?php
/**

 */
class modBiz_fb_groups
{
    /**
     
     */
    public static function getScript($params)
	{

    	$APP_ID = $params->get('APP_ID', '');
		$dataShowSocialContext = $params->get('data-show-social-context', 'TRUE');
		$dataHref = $params->get('data-href', '');
		$dataShowMetaData = $params->get('data-show-metadata', 'FALSE');
		$dataWidth = $params->get('data-width', '280');
		$dataSkin = $params->get('data-skin', 'light');
    
    	$document = JFactory::getDocument();
		$document->addScriptDeclaration("
    		
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=".$APP_ID."&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));            
            
		");
    
    
    	$result = "<div class='fb-group' \n"; 
        $result.= "\tdata-href='".$dataHref."' \n"; 
        $result.= "\tdata-width='".$dataWidth."' \n"; 
        $result.= "\tdata-show-social-context='".$dataShowSocialContext."' \n"; 
        $result.= "\tdata-show-metadata='".$dataShowMetaData."'> \n";
    	$result.= "</div>";

    
		
		return $result;
    }
}
?>