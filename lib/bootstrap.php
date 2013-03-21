<?php
class ClassLoader {

	public static function load($nameSpec) {

		require(static::getClassPath($nameSpec));
	}

	public static function exists($nameSpec) {

		return is_file(static::getClassPath($nameSpec));
	}

	private static function getClassPath($nameSpec) {

		return __DIR__ . '/' . strtr(strtolower($nameSpec),'\\','/') . '.php';
	}
}


function __autoload($nameSpec) {

	ClassLoader::load($nameSpec);
}
