<?php

namespace App\Service;

use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;

class RecCsv
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function rec($datas)
    {
        foreach ($datas as $key => $data) {
            $commande = new Commande();
            $commande->setRaisonSocial($data['Raison Social']);
            $commande->setAdresseCommerce($data['Adresse commerçant']);
            $commande->setCp($data['CP']);
            $commande->setVille($data['Ville']);
            $commande->setEmailCommerce($data['Email commerçant']);
            $commande->setTelCommerce($data['Tél. commerçant']);
            $commande->setRegatePpdc($data['Regate PPDC']);
            $commande->setAction($data['Action']);
            $commande->setDateDebut($data['Date de debut souhaitee']);
            $commande->setRefBenefiaire($data['Reference Beneficiaire(order_id)']);
            $commande->setNomPrenomRais($data['Nom Prenom ou Raison Social']);
            $commande->setLieuRemise($data['Lieu de remise']);
            $commande->setNumeroCpCouloir($data['Numero ou Boite aux lettres - Couloir-Escalier']);
            $commande->setLibelleVoie($data['Numero et libelle de voie']);
            $commande->setCompCommuneServicepostal($data['Complement commune ou service postal']);
            $commande->setCpCl($data['Code postal']);
            $commande->setLocalite($data['Localite']);
            $commande->setAcceBenefiaire($data['Indication d\'acces au beneficiaire']);
            $commande->setIndicComplementaire($data['indications complementaires']);
            $commande->setFrais($data['Frais']);
            $commande->setPremierNecessite($data['Premiere necessite']);
            $commande->setSec($data['Sec']);
            $commande->setNombreObjet($data['Nombre d\'objet']);
            $commande->setTelCli($data['Numero de telephone']);
            $commande->setEmail($data['Email']);
            $commande->setCommentaires($data['Commentaires']);
            $commande->setTypeLivraison($data['Type livraison']);
          $this->em->persist($commande);
          $this->em->flush();
        }
    }
}
