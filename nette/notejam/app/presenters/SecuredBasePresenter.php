<?php

namespace App\Presenters;


class SecuredBasePresenter extends BasePresenter
{

	/**
	 * {@inheritdoc}
	 */
	protected function startup()
	{
		parent::startup();
		if (!$this->user->isLoggedIn()) {
			$this->redirect('Sign:in', ['backlink' => $this->storeRequest()]);
		}
	}

}
