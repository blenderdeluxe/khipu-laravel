<?php namespace BlenderDeluxe\LaravelKhipu\Facades;

use Illuminate\Support\Facades\Facade;

class Khipu extends Facade
{
	protected static function getFacadeAccessor()
	{
		return \BlenderDeluxe\Khipu\Khipu::class;
	}
}