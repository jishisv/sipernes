<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfCtlActividad;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CatalogoActividadRepository extends EntityRepository
{
    public function obtenerActivActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('tact')
                        ->from('MinsalSipernesBundle:EnfCtlActividad', 'tact')
                        ->where('tact.estadoAct = true')
                        ;
    }

}