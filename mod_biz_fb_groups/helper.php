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
		$dataShowSocialContext = $params->get('data-show-social-context', 'true');
		$dataHref = $params->get('data-href', '');
		$dataShowMetaData = $params->get('data-show-metadata', 'false');
		$dataWidth = $params->get('data-width', '280');
		$dataSkin = $params->get('data-skin', 'light');
		$autoLog = $params->get('autoLog', 'false');
		$defLoc = $params->get('defLoc', 'en_US');

		if($autoLog == "true") {
		$autoLogAppEvents = "&autoLogAppEvents=1";
		}
		$locales = explode(',', 'af_ZA,ar_AR,as_IN,az_AZ,be_BY,bg_BG,bn_IN,br_FR,bs_BA,ca_ES,cb_IQ,co_FR,cs_CZ,cx_PH,cy_GB,da_DK,de_DE,el_GR,en_GB,en_UD,en_US,es_ES,es_LA,et_EE,eu_ES,fa_IR,ff_NG,fi_FI,fo_FO,fr_CA,fr_FR,fy_NL,ga_IE,gl_ES,gn_PY,gu_IN,ha_NG,he_IL,hi_IN,hr_HR,hu_HU,hy_AM,id_ID,is_IS,it_IT,ja_JP,ja_KS,jv_ID,ka_GE,kk_KZ,km_KH,kn_IN,ko_KR,ku_TR,lt_LT,lv_LV,mg_MG,mk_MK,ml_IN,mn_MN,mr_IN,ms_MY,mt_MT,my_MM,nb_NO,ne_NP,nl_BE,nl_NL,nn_NO,or_IN,pa_IN,pl_PL,ps_AF,pt_BR,pt_PT,qz_MM,ro_RO,ru_RU,rw_RW,sc_IT,si_LK,sk_SK,sl_SI,so_SO,sq_AL,sr_RS,sv_SE,sw_KE,sz_PL,ta_IN,te_IN,tg_TJ,th_TH,tl_PH,tr_TR,tz_MA,uk_UA,ur_PK,uz_UZ,vi_VN,zh_CN,zh_HK,zh_TW');
		$lang = JFactory::getLanguage();
		$locale = str_replace("-","_",$lang->getTag());
		
		if(!in_Array($locale, $locales)) {
			$locale = $defLoc;
		}

		$document = JFactory::getDocument();
		$document->addScriptDeclaration("
			jQuery(function($){
				(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s);
					js.id = id;
					js.async = true;
					js.src = 'https://connect.facebook.net/".$locale."/sdk.js#xfbml=1&version=v3.2&appId=".$APP_ID."".$autoLogAppEvents."';
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			});
		");


	
		$result = '<div id="fb-root"></div>' . "\n";
		$result = '<div class = "fb-group" ' . "\n\t"; 
		$result.= 'data-href = "'.$dataHref.'" ' . "\n\t"; 
		$result.= 'data-width = "'.$dataWidth.'" ' . "\n\t"; 
		$result.= 'data-show-social-context = "'.$dataShowSocialContext.'" ' . "\n\t"; 
		$result.= 'data-show-metadata = "'.$dataShowMetaData.'" ' . "\n\t";
		$result.= 'data-skin = "'.$dataSkin.'"> ' . "\n";
		$result.= '</div>';
		return $result;
	}
}
?>
