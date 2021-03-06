<?php

namespace ClassCentral\SiteBundle\Command\Network;

use ClassCentral\SiteBundle\Command\Network\NetworkAbstractInterface;
use ClassCentral\SiteBundle\Entity\Offering;

class HTMLNetwork extends NetworkAbstractInterface
{
    public function outInitiative( $stream , $offeringCount)
    {

          $name   = $stream->getName();
          $url = "https://www.class-central.com/stream/". $stream->getSlug();


        $this->output->writeln("<h1><a href='$url'>$name ($offeringCount)</a></h1>");
    }

    public function beforeOffering()
    {
        return;
    }

    public function outOffering(Offering $offering)
    {
        $formatter = $this->container->get('course_formatter');
        echo $formatter->blogFormat( $offering->getCourse() );
    }
}
