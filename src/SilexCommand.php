<?php

namespace ETNA\Silex\Provider\Console;

use Symfony\Component\Console\Command\Command as BaseCommand;

class SilexCommand extends BaseCommand
{
    public function getSilexApplication()
    {
        return $this->getApplication()->getSilexApplication();
    }
}
