<?php
namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\EntityRepository;
// N'oubliez pas ce use
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AdvertRepository extends EntityRepository
{ 
   public function getAdvertWithCategories(array $categoryNames){
       $qb = $this
	->createQueryBuilder('a')
	->innerJoin('a.categories', 'cat')
	->addSelect('cat')
        ->where($qb->expr()->in('cat.name', $categoryNames))
	;

	return $qb
	->getQuery()
	->getResult()
	;      
   }
   
   public function getAdverts($page, $nbPerPage)
  {
    $query = $this->createQueryBuilder('a')
      ->leftJoin('a.categories', 'cat')
      ->addSelect('cat')
      ->leftJoin('a.image', 'pic')
      ->addSelect('pic')
      ->orderBy('a.date', 'DESC')
      ->getQuery()
    ;

    $query
      // On définit l'annonce à partir de laquelle commencer la liste
      ->setFirstResult(($page-1) * $nbPerPage)
      // Ainsi que le nombre d'annonce à afficher sur une page
      ->setMaxResults($nbPerPage)
    ;

    // Enfin, on retourne l'objet Paginator correspondant à la requête construite
    // (n'oubliez pas le use correspondant en début de fichier)
    return new Paginator($query, true);
  }
    
   
}