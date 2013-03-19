<?php

Event::listen('orchestra.done: backend', function()
{
	$menu = Orchestra\Core::menu();
	$position = 'childof:settings';

	Auth::guest() and $position = 'after:home';

	$menu->add('bundocs', $position)
		->title('View Documentation')
		->link(handles('bundocs::orchestra'));
});