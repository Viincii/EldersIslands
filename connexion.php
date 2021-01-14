<?php

class Connexion
{
	protected static $bdd;

	public static function initConnexion()
	{
		self::$bdd = new PDO("mysql:host=localhost;dbname=elder's island", "root", "");
		return self::$bdd;
	}
	/* dutinfopw20165
		vuhedadu
	*/
}
?>

