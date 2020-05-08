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

		foreach ( $track->all() as $car ) {
			$html .= '<div>';
			$html .= '<h2>'.$car->getName().': '.$car->getSpeed().', '. $car->getFuelConsumption().'</h2>';
			$html .= '<img src="'.$car->getImage().'">';
			$html .= '<div>';
        }

        return $html;
    }
}