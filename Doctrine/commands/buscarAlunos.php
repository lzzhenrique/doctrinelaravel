<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';
	
	$entityManagerFactory = new EntityManagerFactory();
	$entityManager = $entityManagerFactory->getEntityManager();
	
	$alunosRepository = $entityManager->getRepository( Aluno::class);

/**
 * @var Aluno[] $xabalaia
 */
	$alunos = $alunosRepository->findAll();
	
	foreach ($alunos as $aluno) {
		echo  "{$aluno->getId()}:  {$aluno->getNome()} \n\n ";
	}
