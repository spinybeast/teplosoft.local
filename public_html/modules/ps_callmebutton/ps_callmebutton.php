<?php
/**
* 2017 Tecnoes.com
*
* NOTICE OF LICENSE
*
* Module developed by Tecnoes team.
* You are only allowed to use this module after getting your own free
* or paid copy at tecnoes.com website or other official affiliate sites.
*
*  @author    Tecnoes <hola@tecnoes.com>
*  @copyright 2017 Tecnoes.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class ps_callmebutton extends Module implements WidgetInterface
{

    const FLAG_CM_TIMELINE_SHOW_SMALLHEADER = 'BANK_WIRE_PAYMENT_INVITE';
	
	const FLAG_CM_TIMELINE_SHOW_FACEPILES = 'FB_TIMELINE_SHOW_FACEPILES';
	
	const FLAG_CM_HIDE_COVER = 'FB_TIMELINE_HIDE_COVER';
	
	const FLAG_CM_SHOW_POSTS = 'FB_TIMELINE_SHOW_POSTS';
	

    protected $_html = '';
    protected $_postErrors = array();

    public $details;
    public $owner;
    public $address;
    public $extra_mail_vars;

    public function __construct()
    {
        $this->name = 'ps_callmebutton';
        $this->tab = 'callme_tl';
        $this->version = '1.0.9';
        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
        $this->author = 'Tecnoes';
        $this->controllers = array('payment', 'validation');
        $this->is_eu_compatible = 1;

		$this->templateFile = 'module:ps_callmebutton/ps_callmebutton.tpl';
		
		
        $this->currencies = true;
        $this->currencies_mode = 'checkbox';


        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Call Me Button', array(), 'Modules.Newsrss.Admin');
        $this->description = $this->trans('Shows a call me button in your footer.', array(), 'Modules.Newsrss.Admin');
        $this->confirmUninstall = $this->trans('Are you sure about removing these details?', array(), 'Modules.Newsrss.Admin');
    }

	
	public function install()
    {
		Configuration::updateValue(self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER, true);
		Configuration::updateValue(self::FLAG_CM_TIMELINE_SHOW_FACEPILES, true);
		Configuration::updateValue(self::FLAG_CM_HIDE_COVER, false);
		Configuration::updateValue(self::FLAG_CM_SHOW_POSTS, true);
		Configuration::updateValue('FANPAGE_LINK', 'http://feeds.bbci.co.uk/news/world/rss.xml');
		Configuration::updateValue('DESC_LIMIT', '100');
		Configuration::updateValue('ITEM_LIMIT', '6');		
		Configuration::updateValue('WIDGET_TITLE', '0034666554433');
		
		
		
		Configuration::updateValue('WIDGET_TITLE_COLOR', '#212121');
		Configuration::updateValue('TITLE_COLOR', '#00ff00');
		Configuration::updateValue('DESC_COLOR', '#525151');
		Configuration::updateValue('DATE_COLOR', '#3b3b3b');
		Configuration::updateValue('BACKG_COLOR', '#ffffff');
		Configuration::updateValue('BLOCK_PADDING', '15');
		
		
		
		Configuration::updateValue('WIDGET_TITLE_SIZE', '20');
		Configuration::updateValue('TITLE_SIZE', '20');

		
		//$this->registerJavascript('remote-bootstrap-head', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', ['server' => 'remote', 'position' => 'head', 'priority' => 20]);
		
		//$context = $this->getContext();
		
		
        return (parent::install() &&
            /*$this->registerHook('displayHome') &&*/
			$this->registerHook('displayBeforeBodyClosingTag') &&
            $this->registerHook('actionObjectLanguageAddAfter') &&
            $this->registerHook('header') &&
			//$this->registerHook('displayBeforeBodyClosingTag') &&
            $this->disableDevice(Context::DEVICE_MOBILE));
    }

    public function uninstall()
    {
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('FANPAGE_LINK', $lang['id_lang'])) {
                return false;
            }
        }
				
		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('WIDGET_TITLE', $lang['id_lang'])) {
                return false;
            }
        }
			
		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('DESC_LIMIT', $lang['id_lang'])) {
                return false;
            }
        }
		
		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('ITEM_LIMIT', $lang['id_lang'])) {
                return false;
            }
        }	

		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('BLOCK_PADDING', $lang['id_lang'])) {
                return false;
            }
        }

		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('TITLE_SIZE', $lang['id_lang'])) {
                return false;
            }
        }
		
		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('WIDGET_TITLE_SIZE', $lang['id_lang'])) {
                return false;
            }
        }		
		
		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('DATE_SIZE', $lang['id_lang'])) {
                return false;
            }
        }		
		
		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('DESC_SIZE', $lang['id_lang'])) {
                return false;
            }
        }		
		
	
		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('TITLE_COLOR', $lang['id_lang'])) {
                return false;
            }
        }		

		$languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('WIDGET_TITLE_COLOR', $lang['id_lang'])) {
                return false;
            }
        }		
		

        if (!Configuration::deleteByName('FANPAGE_LINK')
				|| !Configuration::deleteByName(self::FLAG_CM_TIMELINE_SHOW_FACEPILES)
				|| !Configuration::deleteByName(self::FLAG_CM_HIDE_COVER)	
				|| !Configuration::deleteByName(self::FLAG_CM_SHOW_POSTS)	
				|| !Configuration::deleteByName('WIDGET_TITLE')	
				|| !Configuration::deleteByName('WIDGET_TITLE_COLOR')
				|| !Configuration::deleteByName('TITLE_COLOR')
				|| !Configuration::deleteByName('DESC_COLOR')
				|| !Configuration::deleteByName('DATE_COLOR')	
				|| !Configuration::deleteByName('BACKG_COLOR')
                || !Configuration::deleteByName(self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER)
                || !parent::uninstall()) {
            return false;
        }
        return true;
    }
	

	
	
	public function hookHeader($params)
		{
			//BUENA, LO CARGA EN FOOTER AUNQUE LO HOOKEE EN HEADER
			//$this->context->controller->addJS(($this->_path).'views/js/moment.min.js');
			//$this->context->controller->addJS(($this->_path).'views/js/myscript.js');
		}
		

	

    protected function _postValidation()
    {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue(self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER,
                Tools::getValue(self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER));
				
				
			Configuration::updateValue(self::FLAG_CM_TIMELINE_SHOW_FACEPILES,
                Tools::getValue(self::FLAG_CM_TIMELINE_SHOW_FACEPILES));	
				
			Configuration::updateValue(self::FLAG_CM_HIDE_COVER,
                Tools::getValue(self::FLAG_CM_HIDE_COVER));	
				
			Configuration::updateValue(self::FLAG_CM_SHOW_POSTS,
                Tools::getValue(self::FLAG_CM_SHOW_POSTS));					
				
				
        }
    }

    protected function _postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            $custom_text = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('FANPAGE_LINK_'.$lang['id_lang'])) {
                    $custom_text[$lang['id_lang']] = Tools::getValue('FANPAGE_LINK_'.$lang['id_lang']);
                }
            }






			$widget_title = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('WIDGET_TITLE_'.$lang['id_lang'])) {
                    $widget_title[$lang['id_lang']] = Tools::getValue('WIDGET_TITLE_'.$lang['id_lang']);
                }
            }








			
			$desc_limit = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('DESC_LIMIT_'.$lang['id_lang'])) {
                    $desc_limit[$lang['id_lang']] = Tools::getValue('DESC_LIMIT_'.$lang['id_lang']);
                }
            }


			$item_limit = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('ITEM_LIMIT_'.$lang['id_lang'])) {
                    $item_limit[$lang['id_lang']] = Tools::getValue('ITEM_LIMIT_'.$lang['id_lang']);
                }
            }






			
			$block_padding = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('BLOCK_PADDING_'.$lang['id_lang'])) {
                    $block_padding[$lang['id_lang']] = Tools::getValue('BLOCK_PADDING_'.$lang['id_lang']);
                }
            }



			$title_size = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('TITLE_SIZE_'.$lang['id_lang'])) {
                    $title_size[$lang['id_lang']] = Tools::getValue('TITLE_SIZE_'.$lang['id_lang']);
                }
            }

			
			$widget_title_size = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('WIDGET_TITLE_SIZE_'.$lang['id_lang'])) {
                    $widget_title_size[$lang['id_lang']] = Tools::getValue('WIDGET_TITLE_SIZE_'.$lang['id_lang']);
                }
            }			
			
			
			
			
			
			
			
			
			
			$date_size = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('DATE_SIZE_'.$lang['id_lang'])) {
                    $date_size[$lang['id_lang']] = Tools::getValue('DATE_SIZE_'.$lang['id_lang']);
                }
            }			
			

			$desc_size = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('DESC_SIZE_'.$lang['id_lang'])) {
                    $desc_size[$lang['id_lang']] = Tools::getValue('DESC_SIZE_'.$lang['id_lang']);
                }
            }



			
			
            Configuration::updateValue('FANPAGE_LINK', $custom_text);
            Configuration::updateValue('WIDGET_TITLE', $widget_title);			
			
			
			Configuration::updateValue('DESC_LIMIT', $desc_limit);
			Configuration::updateValue('ITEM_LIMIT', $item_limit);
			Configuration::updateValue('BLOCK_PADDING', $block_padding);
			Configuration::updateValue('TITLE_SIZE', $title_size);
			Configuration::updateValue('WIDGET_TITLE_SIZE', $widget_title_size);			
			
			
			
			Configuration::updateValue('DATE_SIZE', $date_size);
			Configuration::updateValue('DESC_SIZE', $desc_size);


			
			$title_color = Tools::getValue('TITLE_COLOR');	
			Configuration::updateValue('TITLE_COLOR', trim($title_color));
			$widget_title_color = Tools::getValue('WIDGET_TITLE_COLOR');	
			Configuration::updateValue('WIDGET_TITLE_COLOR', trim($widget_title_color));			
			
			
			
			
			$desc_color = Tools::getValue('DESC_COLOR');	
			Configuration::updateValue('DESC_COLOR', trim($desc_color));
			$date_color = Tools::getValue('DATE_COLOR');	
			Configuration::updateValue('DATE_COLOR', trim($date_color));			
			$backg_color = Tools::getValue('BACKG_COLOR');	
			Configuration::updateValue('BACKG_COLOR', trim($backg_color));			
			
			
			
			
        }
        $this->_html .= $this->displayConfirmation($this->trans('Settings updated', array(), 'Admin.Global'));
    }

    protected function _displayBankWire()
    {
        return $this->display(__FILE__, 'infos.tpl');
    }

    public function getContent()
    {
        if (Tools::isSubmit('btnSubmit')) {
            $this->_postValidation();
            if (!count($this->_postErrors)) {
                $this->_postProcess();
            } else {
                foreach ($this->_postErrors as $err) {
                    $this->_html .= $this->displayError($err);
                }
            }
        } else {
            $this->_html .= '<br />';
        }

        $this->_html .= $this->renderForm();

        return $this->_html;
    }



    public function renderForm()
    {
        $fields_form_customization = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Customization', array(), 'Modules.Newsrss.Admin'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
					array(
                        'type' => 'text',
                        'label' => $this->trans('Phone Number', array(), 'Modules.Newsrss.Admin'),
                        'name' => 'WIDGET_TITLE',
                        'desc' => $this->trans('Enter your phone number', array(), 'Modules.Newsrss.Admin'),
                        'lang' => true
                    ),
					array(
                        'type' => 'text',
                        'label' => $this->trans('Circle Radius', array(), 'Modules.Newsrss.Admin'),
                        'name' => 'BLOCK_PADDING',
                        'desc' => $this->trans('Decrease radius to convert the icon into a square.', array(), 'Modules.Newsrss.Admin'),
                        'lang' => true
                    ),	




					
					array(
                        'type' => 'text',
                        'label' => $this->trans('Widget Bottom Distance', array(), 'Modules.Newsrss.Admin'),
                        'name' => 'WIDGET_TITLE_SIZE',
                        'desc' => $this->trans('Set widget bottom separation in pixels.', array(), 'Modules.Newsrss.Admin'),
                        'lang' => true
                    ),					
					array(
                        'type' => 'text',
                        'label' => $this->trans('Widget Left or Right Distance', array(), 'Modules.Newsrss.Admin'),
                        'name' => 'TITLE_SIZE',
                        'desc' => $this->trans('Set widget left or right separation in pixels.', array(), 'Modules.Newsrss.Admin'),
                        'lang' => true
                    ),	


				






/*
					
					array(
                        'type' => 'text',
                        'label' => $this->trans('News Date Size', array(), 'Modules.Newsrss.Admin'),
                        'name' => 'DATE_SIZE',
                        'desc' => $this->trans('Set date size in pixels.', array(), 'Modules.Newsrss.Admin'),
                        'lang' => true
                    ),						
					
					array(
                        'type' => 'text',
                        'label' => $this->trans('News Description Size', array(), 'Modules.Newsrss.Admin'),
                        'name' => 'DESC_SIZE',
                        'desc' => $this->trans('Set description size in pixels.', array(), 'Modules.Newsrss.Admin'),
                        'lang' => true
                    ),						
					
				*/	



			
array(
	'type' => 'color',
	'label' => $this->trans('Button Background Color', array(), 'Modules.Newsrss.Admin'),
	'name' => 'WIDGET_TITLE_COLOR',
	'desc' => $this->trans('Set color of button background', array(), 'Modules.Newsrss.Admin'),
    'lang' => true	
),					
					
array(
	'type' => 'color',
	'label' => $this->trans('Phone Color', array(), 'Modules.Newsrss.Admin'),
	'name' => 'TITLE_COLOR',
	'desc' => $this->trans('Set color of phone icon', array(), 'Modules.Newsrss.Admin'),
    'lang' => true	
),



					
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Align Left'),
                        'name' => self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER,
                        'is_bool' => true,
                        'hint' => $this->l('Align button to bottom left or right.'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            )
                        ),
                    ),
					array(
                        'type' => 'switch',
                        'label' => $this->l('Disable in Desktop'),
                        'name' => self::FLAG_CM_TIMELINE_SHOW_FACEPILES,
                        'is_bool' => true,
                        'hint' => $this->l('Disable button in desktop devices.'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            )
                        ),
                    )

                ),
                'submit' => array(
                    'title' => $this->trans('Save'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? : 0;
        $this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='
            .$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

		return $helper->generateForm(array($fields_form_customization));
    }

    public function getConfigFieldsValues()
    {
        $custom_text = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $custom_text[$lang['id_lang']] = Tools::getValue(
                'FANPAGE_LINK_'.$lang['id_lang'],
                Configuration::get('FANPAGE_LINK', $lang['id_lang'])
            );
        }
		




		$widget_title = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $widget_title[$lang['id_lang']] = Tools::getValue(
                'WIDGET_TITLE_'.$lang['id_lang'],
                Configuration::get('WIDGET_TITLE', $lang['id_lang'])
            );
        }





		
		$desc_long = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $desc_long[$lang['id_lang']] = Tools::getValue(
                'DESC_LIMIT_'.$lang['id_lang'],
                Configuration::get('DESC_LIMIT', $lang['id_lang'])
            );
        }



		$item_limit = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $item_limit[$lang['id_lang']] = Tools::getValue(
                'ITEM_LIMIT_'.$lang['id_lang'],
                Configuration::get('ITEM_LIMIT', $lang['id_lang'])
            );
        }


		

		$block_padding = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $block_padding[$lang['id_lang']] = Tools::getValue(
                'BLOCK_PADDING_'.$lang['id_lang'],
                Configuration::get('BLOCK_PADDING', $lang['id_lang'])
            );
        }

		
		
		
		
		$widget_title_size = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $widget_title_size[$lang['id_lang']] = Tools::getValue(
                'WIDGET_TITLE_SIZE_'.$lang['id_lang'],
                Configuration::get('WIDGET_TITLE_SIZE', $lang['id_lang'])
            );
        }		
		
		
		
		
		
		
		

		$title_size = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $title_size[$lang['id_lang']] = Tools::getValue(
                'TITLE_SIZE_'.$lang['id_lang'],
                Configuration::get('TITLE_SIZE', $lang['id_lang'])
            );
        }

		$date_size = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $date_size[$lang['id_lang']] = Tools::getValue(
                'DATE_SIZE_'.$lang['id_lang'],
                Configuration::get('DATE_SIZE', $lang['id_lang'])
            );
        }

		
		
		$desc_size = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $desc_size[$lang['id_lang']] = Tools::getValue(
                'DESC_SIZE_'.$lang['id_lang'],
                Configuration::get('DESC_SIZE', $lang['id_lang'])
            );
        }		
		
		
		
		
		
		
		
		$title_color = Configuration::get('TITLE_COLOR');
		$widget_title_color = Configuration::get('WIDGET_TITLE_COLOR');



		

        return array(
            'FANPAGE_LINK' => $custom_text,
			'DESC_LIMIT' => $desc_long,
			'ITEM_LIMIT' => $item_limit,			
			'WIDGET_TITLE' => $widget_title,
			'BLOCK_PADDING' => $block_padding,
			'WIDGET_TITLE_SIZE' => $widget_title_size,			
			'TITLE_SIZE' => $title_size,
			'DATE_SIZE' => $date_size,
			'DESC_SIZE' => $desc_size,						
			'TITLE_COLOR' => $title_color,
			'WIDGET_TITLE_COLOR' => $widget_title_color,			


			
			self::FLAG_CM_TIMELINE_SHOW_FACEPILES => Tools::getValue(self::FLAG_CM_TIMELINE_SHOW_FACEPILES,
                Configuration::get(self::FLAG_CM_TIMELINE_SHOW_FACEPILES)),
            self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER => Tools::getValue(self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER,
                Configuration::get(self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER)),
			self::FLAG_CM_HIDE_COVER => Tools::getValue(self::FLAG_CM_HIDE_COVER,
                Configuration::get(self::FLAG_CM_HIDE_COVER)),	
			self::FLAG_CM_SHOW_POSTS => Tools::getValue(self::FLAG_CM_SHOW_POSTS,
                Configuration::get(self::FLAG_CM_SHOW_POSTS))				
				
        );
    }

    public function getTemplateVarInfos()
    {
        $cart = $this->context->cart;
        $total = sprintf(
            $this->trans('%1$s (tax incl.)', array(), 'Modules.Newsrss.Shop'),
            Tools::displayPrice($cart->getOrderTotal(true, Cart::BOTH))
        );


        $fanpageURL = Tools::nl2br(Configuration::get('FANPAGE_LINK', $this->context->language->id));
        if (false === $fanpageURL) {
            $fanpageURL = '';
        }
	


        $widget_title = Tools::nl2br(Configuration::get('WIDGET_TITLE', $this->context->language->id));
        if (false === $widget_title) {
            $widget_title = '';
        }



	
		$descLong = Tools::nl2br(Configuration::get('DESC_LIMIT', $this->context->language->id));
        if (false === $descLong) {
            $descLong = '';
        }



		$item_limit = Tools::nl2br(Configuration::get('ITEM_LIMIT', $this->context->language->id));
        if (false === $item_limit) {
            $item_limit = '';
        }


		
		
		
		
		
		$block_padding = Tools::nl2br(Configuration::get('BLOCK_PADDING', $this->context->language->id));
        if (false === $block_padding) {
            $block_padding = '';
        }
		




		$widget_title_size = Tools::nl2br(Configuration::get('WIDGET_TITLE_SIZE', $this->context->language->id));
        if (false === $widget_title_size) {
            $widget_title_size = '';
        }

		

		$title_size = Tools::nl2br(Configuration::get('TITLE_SIZE', $this->context->language->id));
        if (false === $title_size) {
            $title_size = '';
        }

		$date_size = Tools::nl2br(Configuration::get('DATE_SIZE', $this->context->language->id));
        if (false === $date_size) {
            $date_size = '';
        }

		$desc_size = Tools::nl2br(Configuration::get('DESC_SIZE', $this->context->language->id));
        if (false === $desc_size) {
            $desc_size = '';
        }
		
		
		$title_color = Tools::nl2br(Configuration::get('TITLE_COLOR', $this->context->language->id));
        if (false === $title_color) {
            $title_color = '';
        }



		$widget_title_color = Tools::nl2br(Configuration::get('WIDGET_TITLE_COLOR', $this->context->language->id));
        if (false === $widget_title_color) {
            $widget_title_color = '';
        }





		
		
  
		return array(
            'fanpageURL' => $fanpageURL,
			'descLong' => $descLong
        );
    }
	
	
	
	
	
	
	
	public function renderWidget($hookName, array $params)
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('ps_callmebutton'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $params));
        }

        return $this->fetch($this->templateFile, $this->getCacheId('ps_callmebutton'));
    }
	
	
	
	
	
	
	public function getWidgetVariables($hookName, array $params)
    {
		
		
	




	
		/* Convert hexdec color string to rgb(a) string */
		function hex2rgba($color, $opacity = false) {
		 
			$default = 'rgb(0,0,0)';
		 
			//Return default if no color provided
			if(empty($color))
				  return $default; 
		 
			//Sanitize $color if "#" is provided 
				if ($color[0] == '#' ) {
					$color = substr( $color, 1 );
				}
		 
				//Check if color has 6 or 3 characters and get values
				if (strlen($color) == 6) {
						$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
				} elseif ( strlen( $color ) == 3 ) {
						$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
				} else {
						return $default;
				}
		 
				//Convert hexadec to rgb
				$rgb =  array_map('hexdec', $hex);
		 
				//Check if opacity is set(rgba or rgb)
				if($opacity){
					if(abs($opacity) > 1)
						$opacity = 1.0;
					$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
				} else {
					$output = 'rgb('.implode(",",$rgb).')';
				}
		 
				//Return rgb(a) color string
				return $output;
		}
		


		
		$fanpageURL = Tools::nl2br(Configuration::get('FANPAGE_LINK', $this->context->language->id));
        if (false === $fanpageURL) {
            $fanpageURL = '';
        }
		
		
		$widget_title = Tools::nl2br(Configuration::get('WIDGET_TITLE', $this->context->language->id));
        if (false === $widget_title) {
            $widget_title= 'Latest news';
        }
		
		
		
		$descLong = Tools::nl2br(Configuration::get('DESC_LIMIT', $this->context->language->id));
        if (false === $descLong) {
            $descLong = '9999';
        }
		if ("" == $descLong) {
            $descLong = '9999';
        }




		$item_limit = Tools::nl2br(Configuration::get('ITEM_LIMIT', $this->context->language->id));
        if (false === $item_limit) {
            $item_limit = '9999';
        }
		if ("" == $item_limit) {
            $item_limit = '9999';
        }









		

		$block_padding = Tools::nl2br(Configuration::get('BLOCK_PADDING', $this->context->language->id));
        if (false === $block_padding) {
            $block_padding = '15';
        }
		if ("" == $block_padding) {
            $block_padding = '15';
        }



		$title_size = Tools::nl2br(Configuration::get('TITLE_SIZE', $this->context->language->id));
        if (false === $title_size) {
            $title_size = '14';
        }
		if ("" == $title_size) {
            $title_size = '14';
        }


		
		$widget_title_size = Tools::nl2br(Configuration::get('WIDGET_TITLE_SIZE', $this->context->language->id));
        if (false === $widget_title_size) {
            $widget_title_size = '20';
        }
		if ("" == $widget_title_size) {
            $widget_title_size = '20';
        }
		
		
		
		
		
		
		


		$date_size = Tools::nl2br(Configuration::get('DATE_SIZE', $this->context->language->id));
        if (false === $date_size) {
            $date_size = '12';
        }
		if ("" == $date_size) {
            $date_size = '12';
        }

		$desc_size = Tools::nl2br(Configuration::get('DESC_SIZE', $this->context->language->id));
        if (false === $desc_size) {
            $desc_size = '14';
        }
		if ("" == $desc_size) {
            $desc_size = '14';
        }


		
		
		$title_color = Tools::nl2br(Configuration::get('TITLE_COLOR', $this->context->language->id));
        if (false === $title_color) {
            $title_color= '#00ff00';
        }
		


	
		$widget_title_color = Tools::nl2br(Configuration::get('WIDGET_TITLE_COLOR', $this->context->language->id));
        if (false === $widget_title_color) {
            $widget_title_color= '#212121';
        }

	
		if (Configuration::get(self::FLAG_CM_TIMELINE_SHOW_FACEPILES)) $hideinmobile="none";
		else $hideinmobile="block";
		
		if (Configuration::get(self::FLAG_CM_TIMELINE_SHOW_SMALLHEADER)) $showsmallheader="true";
		else $showsmallheader="false";
		
		if (Configuration::get(self::FLAG_CM_HIDE_COVER)) $hidecover="true";
		else $hidecover="false";

		if (Configuration::get(self::FLAG_CM_SHOW_POSTS)) $showposts="true";
		else $showposts="false";		
		
		
		
		if ($showsmallheader=="true") $alignleftorright="left";
		else $alignleftorright="right";


        return array(
			'widgetbottomDISTANCE' => $widget_title_size,			
			'widgetleftrightDISTANCE' => $title_size,	
			'dateSIZE' => $date_size,	
			'descSIZE' => $desc_size,		
			'showhideMOBILE' => $hideinmobile,
			'phoneNUMBER' => $widget_title,			
			'circleCOLOR' => $widget_title_color,
			'circleRADIUS' => $block_padding,	
			'alignLEFTRIGHT' =>  $alignleftorright,
			'titleCOLOR' => $title_color,			
        );
    }

}
