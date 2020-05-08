<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Car;
use App\Task1\Track;

class CarTrackHtmlPresenter
{
    public function present(Track $track): string
    {
    	$html = '';

		$html .= $this->renderTitle();
		$html .= '<ul style="display: flex; flex-flow: row wrap; justify-content: space-between; list-style: none;">';

		foreach ( $track->all() as $car ) {
			$html .= '<li>';
			$html .= '<h2>'.$car->getName().': '.$car->getSpeed().', '. $car->getFuelConsumption().'</h2>';
			$html .= '<img src="'.$car->getImage().'">';
			$html .= '</li>';
        }

        $html .= '</ul>';

        return $html;
    }

    private function renderTitle(): string
	{
		return '<h1 style="text-align: center">Cars on the track</h1>';
	}
}