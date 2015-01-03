<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfDominio;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class ClaseDiagRepository extends EntityRepository
{
    public function obtenerDomActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('tdom')
                        ->from('MinsalSipernesBundle:EnfDominio', 'tdom')
                        ->where('tdom.estadoDominio = true')
                        ;
    }

}