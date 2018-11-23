<?php
namespace Omuigix\LaravelUcloudStorage;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;

class UfileServiceProvider extends ServiceProvider {

	public function boot() {
		\Storage::extend(
			'ucloud',
			function ($app, $config) {
				$ufileAdapter = new UcloudUfileAdapter(
					$config['bucket'],
					$config['public_key'],
					$config['secret_key'],
					$config['suffix'],
					$config['prefix'],
                    $config['cdn']
				);
				$fs = new Filesystem($ufileAdapter);
				return $fs;
			}
		);
	}

	public function register() {

	}
}
