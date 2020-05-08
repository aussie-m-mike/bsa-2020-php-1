<?php

require __DIR__ . '/../../vendor/autoload.php';

use \App\Task1\Track;
use \App\Task1\Car;

$arena = new Track(6, 55);
$arena->add(new Car(
		1,
		'https://pbs.twimg.com/profile_images/595409436585361408/aFJGRaO6_400x400.jpg',
		'BMW',
		250,
		10,
		5,
		15
	)
);

$arena->add(new Car(
		2,
		'https://i.pinimg.com/originals/e4/15/83/e41583f55444b931f4ba2f0f8bce1970.jpg',
		'Tesla',
		200,
		5,
		5.3,
		18
	)
);

$arena->add(new Car(
		3,
		'https://fordsalomao.com.br/wp-content/uploads/2019/02/1499441577430-1-1024x542-256x256.jpg',
		'Ford',
		220,
		5,
		6.1,
		18.5
	)
);

var_dump($arena->run());