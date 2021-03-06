<?php

class msProfileOperationRemoveProcessor extends modObjectRemoveProcessor {
	public $objectType = 'msCustomerOperation';
	public $classKey = 'msCustomerOperation';
	public $languageTopics = array('msprofile');
	public $permission = 'save';


	/** {@inheritDoc} */
	public function initialize() {
		if (!$this->modx->hasPermission($this->permission)) {
			return $this->modx->lexicon('access_denied');
		}

		return parent::initialize();
	}

}

return 'msProfileOperationRemoveProcessor';