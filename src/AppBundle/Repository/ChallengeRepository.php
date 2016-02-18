<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * ChallengeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChallengeRepository extends \Doctrine\ORM\EntityRepository {

	public function findByBests(){

		$sql = "Select DISTINCT challenge.id " .
				"From challenge " .
				"LEFT OUTER JOIN user_challenge ON challenge.id = user_challenge.challenge_id " .
				"WHERE challenge.endDate >= NOW() " .
				"ORDER bY (Select count(*) from user_challenge " .
				"where user_challenge.challenge_id = challenge.id) DESC " .
				"LIMIT 9";
			$stmt = $this->getEntityManager()
			->getConnection()
			->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();

			return $result;
		}

		public function findByLowerId($id)
		{
			$sql = "SELECT DISTINCT c.id, c.creator_id, c.activity_id, c.creationDate, c.endDate " .
			"FROM challenge c ".
			"INNER JOIN user ON c.creator_id = user.id " .
			"WHERE c.id < $id " .
			"ORDER BY c.id DESC " .
			"LIMIT 5";
			$stmt = $this->getEntityManager()
			->getConnection()
			->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}

		public function findByEndDate($nbMax){
			$em = $this->getEntityManager();
			$current_date = date("Y-m-d") . "00:00:00";
			$query = $em->createQuery(
			    'SELECT c
			    FROM AppBundle:Challenge c
			    WHERE c.endDate >= :currenDate
			    ORDER BY c.id DESC'
			)->setParameter('currenDate', new \DateTime($current_date));

			return $query->setMaxResults($nbMax)->getResult();
		}

}