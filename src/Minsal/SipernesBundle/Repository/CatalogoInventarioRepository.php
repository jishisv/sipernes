<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfComponente;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CatalogoInventarioRepository extends EntityRepository
{
    public function obtenerInvActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('tinv')
                        ->from('MinsalSipernesBundle:EnfComponente', 'tinv')
                        ->where('tinv.estadoComponente = false')
                        ;
    }

}