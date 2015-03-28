<?php

namespace Minsal\SipernesBundle\Repository;

use Minsal\SipernesBundle\Entity\EnfCtlTipoComponente;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class CatalogoTipoCompRepository extends EntityRepository
{
    public function obtenerTipoCompActivo() 
    {
        return $this->getEntityManager()
                        ->createQueryBuilder()
                        ->select('ttcomp')
                        ->from('MinsalSipernesBundle:EnfCtlTipoComponente', 'ttcomp')
                        ->where('ttcomp.estadoTclTComp = true')
                        ;
    }

}