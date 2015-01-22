<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfEsquemaVac;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CatalogoEsqVacRepository extends EntityRepository
{
    public function obtenerEsqVacActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('tvac')
                        ->from('MinsalSipernesBundle:EnfEsquemaVac', 'tvac')
                        ->where('tvac.estadoVac = true')
                        ;
    }

}