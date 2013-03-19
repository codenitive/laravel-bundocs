<?php

Event::listen('orchestra.done: backend', function()
{
	$menu = Orchestra\Core::menu();

	$menu->add('bundocs', 'childof:settings')
		->title('View Documentation')
		->link(handles('bundocs::orchestra'));
});