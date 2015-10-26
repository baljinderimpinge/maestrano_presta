<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

require_once (dirname(__FILE__) . '/init.php'); 	

if (!defined('_PS_VERSION_'))
	exit;
	
class MaestranoIntegration extends Module
{
	protected static $cache_products;
	
	public $maestranoClass  = "Maestrano";
	
	public $maestranoConfig = "maestrano.json";
	
	public function __construct()
	{			
		
		$this->name = 'maestranointegration';
		$this->tab = 'administration';
		$this->version = '1.6.4';
		$this->author = 'PrestaShop';
		$this->need_instance = 0;
		$this->bootstrap = true;
		
		// Check the Maestrano class exit othewise throws error
		if (class_exists($this->maestranoClass)) 
		{		
			$mn = new MaestranoSso();		
		}
		else{
			$this->warning = $this->l($this->maestranoClass." Class doesn't Exist.");			
		}
		
		parent::__construct();

		$this->displayName = $this->l('Maestrano integration');
		$this->description = $this->l('Maestrano SSO integration and data');
		
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
 
		if (!Configuration::get('maestrano'))      
			$this->warning = $this->l('No name provided');
		
	}	
	
	/**
	 * Install the Prestashop Module
	 *
	 * @return flag as true, false
	*/
	 
	public function install()
	{
		if (
				!parent::install() 
				|| !$this->registerHook('actionCustomerAccountAdd') 				
				|| !$this->registerHook('actionObjectCustomerUpdateAfter')	
														
				|| !$this->registerHook('actionObjectTaxUpdateAfter')		
				|| !$this->registerHook('actionObjectTaxAddAfter')		 
				|| !$this->registerHook('actionObjectTaxDeleteAfter')	
					 
				|| !$this->registerHook('actionObjectProductAddAfter')		
				|| !$this->registerHook('actionObjectProductUpdateAfter')		
				|| !$this->registerHook('actionObjectProductDeleteAfter')		
		)
			return false;
		
		return true;
	}	
	
	/**
	 * Uninstall the Prestashop Module
	 *
	 * @return flag as true, false
	*/
	public function uninstall()
	{
		$this->_clearCache('*');

		return parent::uninstall();
	}	
	
	/**
	 * Configuartion page in admin panel for module settings
	 *
	 * @return the html of the form
	*/
	public function getContent()
	{
		if (Tools::isSubmit('btnSubmit'))
		{
			$this->_html .= '<br/>';
		}
		else
			$this->_html .= '<br/>';
		
		return $this->_html;
	}
	
	// Hook for the Add Customer at Maestrano	
	public function hookActionCustomerAccountAdd($parames)
	{		
		$CustomerMapper = new CustomerMapper();		
		$CustomerMapper->processLocalUpdate($parames['newCustomer'] ,true, false);	
	}
	
	// Hook for the Update Customer at Maestrano	
	public function hookActionObjectCustomerUpdateAfter($params) 
	{				
		$CustomerMapper = new CustomerMapper();
		$CustomerMapper->processLocalUpdate($params['object'] ,true, false);	
	}
	
	// Hook for the Update Tax at Maestrano	
	public function hookActionObjectTaxUpdateAfter($params)
	{	
		$TaxMapper = new TaxMapper();
		$TaxMapper->processLocalUpdate($params['object'] ,true, false);
	}
	
	// Hook for the Add Tax at Maestrano
	public function hookActionObjectTaxAddAfter($params)
	{
		$TaxMapper = new TaxMapper();
		$TaxMapper->processLocalUpdate($params['object'] ,true, false);
	}
	
	// Hook for the Delete Tax at Maestrano
	public function hookActionObjectTaxDeleteAfter($params)
	{		
		$TaxMapper = new TaxMapper();
		$TaxMapper->processLocalUpdate($params['object'], false, true);
	}
	
	// Hook for the Add Product at Maestrano
	public function hookActionObjectProductAddAfter($params)
	{
		
		$ProductMapper = new ProductMapper();
		$ProductMapper->processLocalUpdate($params['object'], true, false);
	}
	
	// Hook for the Update Product at Maestrano
	public function hookActionObjectProductUpdateAfter($params)
	{		
		//echo '<pre>'; print_R($params); echo '</pre>'; die();
		$ProductMapper = new ProductMapper();
		$ProductMapper->processLocalUpdate($params['object'], true, false);
	}
		
	// Hook for the Delete Product at Maestrano
	public function hookActionObjectProductDeleteAfter($params)
	{
		$ProductMapper = new ProductMapper();
		$ProductMapper->processLocalUpdate($params['object'], false, true);
	}
	
	
	

}	
