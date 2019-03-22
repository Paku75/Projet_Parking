<?php

function inscrire($database, $parameters)
{
	$request = $database->prepare('
		INSERT INTO `users` (`email`, `login`, `mdp`, `lvl`) 
		VALUES (:email, :login, :mdp, 0);
	');

	$request->bindValue(':email', $parameters['email'], PDO::PARAM_STR);
	$request->bindValue(':login', $parameters['login'], PDO::PARAM_STR);
	$request->bindValue(':mdp', password_hash($parameters['mdp'], PASSWORD_DEFAULT), PDO::PARAM_STR);

	$request->execute();

	return $database;
}