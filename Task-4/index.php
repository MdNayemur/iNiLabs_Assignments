<?php

abstract class Animal
{
	abstract public function sound();
}


class Bird extends Animal
{
	public function sound()
	{
		return 'Bird chirps';
	}
}


class Tiger extends Animal
{
	public function sound()
	{
		return 'Tiger roars';
	}
}

function makingsound($snd)
{
	foreach ($snd as $snd) {
		echo $snd->sound() . '<br>';
	}
}

$snd = [
	new Bird(),
	new Tiger()
];

makingsound($snd);