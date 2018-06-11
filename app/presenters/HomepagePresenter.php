<?php

namespace App\Presenters;

use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
	public function actionTest()
	{
		$this->template->title = 'test';
		$this->template->description = 'test';
	}
}
