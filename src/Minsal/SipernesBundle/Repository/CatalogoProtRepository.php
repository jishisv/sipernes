<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfCtlProtocolo;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CatalogoProtRepository extends EntityRepository
{
    public function obtenerProtActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('tprot')
                        ->from('MinsalSipernesBundle:EnfCtlProtocolo', 'tprot')
                        ->where('tprot.estadoProt = true')
                        ;
    }

}