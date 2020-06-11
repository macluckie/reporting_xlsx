<?php

namespace App\Repository;

use App\Entity\Commande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Commande|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commande|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commande[]    findAll()
 * @method Commande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commande::class);
    }

    public function countNumberClient()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
        SELECT COUNT(DISTINCT(nom_prenom_rais)) as uniqCommand FROM commande as C
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();    
        return $stmt->fetchAll();
    }

    public function countNumberCommand()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT COUNT(*) as nbre_com FROM commande
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    public function countNumberClickAndClollect()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT COUNT(*) as nbre_click FROM commande
            Where type_livraison = "Click & Collect"
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    public function countNumberLivraisonCommerçant()
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT COUNT(*) as livraison FROM commande
            Where type_livraison = "Livraison par le commerçant"
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();    
        return $stmt->fetchAll();
    }


    public function countNumberLivraisonLaPoste()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT COUNT(*) as liv_laposte FROM commande
            Where type_livraison = "Livraison Laposte"
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();    
        return $stmt->fetchAll();
    }


}
