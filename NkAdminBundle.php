<?php

namespace Nk\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NkAdminBundle extends Bundle
{
    public function getParent() {
        return 'SonataAdminBundle';
    }
}
