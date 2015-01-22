<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfEsquemaMic;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CatalogoEsqMicRepository extends EntityRepository
{
    public function obtenerEsqMicActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('tmic')
                        ->from('MinsalSipernesBundle:EnfEsquemaMic', 'tmic')
                        ->where('tmic.estadoMic = true')
                        ;
    }

}