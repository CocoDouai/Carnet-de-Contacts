<?php

namespace Carnet\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CarnetUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
