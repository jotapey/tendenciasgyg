<?php
class EM_Em0139settings_Block_Adminhtml_System_Config_Form_Field_Option extends Mage_Adminhtml_Block_System_Config_Form_Field
{
	/**
     * Override field method to add js
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return String
     */
	protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element){
		$html = parent::_getElementHtml($element);

		$html .= '<br/><div id="preview_'.$element->getHtmlId().'" style="font-size:20px; margin:0 30px 0 0;width:auto;float:left;padding-top:5x">EM google font review</div>
				<img style="display:none" id="loading_'.$element->getHtmlId().'" src="'.$this->getSkinUrl('em0139settings/images/loader.gif').'" />
		';
         return $html;
    }
}
?>