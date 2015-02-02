<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfCtlFinanciamiento;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CatalogoFinanciamientoRepository extends EntityRepository
{
    public function obtenerFinActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('tfin')
                        ->from('MinsalSipernesBundle:EnfCtlFinanciamiento', 'tfin')
                        ->where('tfin.estadoFinanciamiento = true')
                        ;
    }

}