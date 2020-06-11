<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Service\HandleXlsx;
use App\Service\RecCsv;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class ReportingController extends AbstractController
{
    /**
     * @Route("/", name="reporting")
     */
    public function index(HandleXlsx $xlsx, RecCsv $recorder)
    {
        if (file_exists("orders-test.xlsx")) {
            $dataFile =  $xlsx->xlsxConvert("orders-test.xlsx");
            $recorder->rec($dataFile);
        }
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository(Commande::class)->countNumberClient();
        $command = $em->getRepository(Commande::class)->countNumberCommand();
        $click_collect = $em->getRepository(Commande::class)->countNumberClickAndClollect();
        $liv_commerçant = $em->getRepository(Commande::class)->countNumberLivraisonCommerçant();
        $liv_la_poste = $em->getRepository(Commande::class)->countNumberLivraisonLaPoste();

        return $this->render('reporting/index.html.twig', [
            'client' => $client[0]["uniqCommand"] ?? 0,
            'command' => $command[0]["nbre_com"] ?? 0,
            'click' => $click_collect[0]["nbre_click"] ?? 0,
            'livraison' => $liv_commerçant[0]['livraison'] ?? 0,
            'laposte' => $liv_la_poste[0]['liv_laposte']  ?? 0

        ]);
    }
}
