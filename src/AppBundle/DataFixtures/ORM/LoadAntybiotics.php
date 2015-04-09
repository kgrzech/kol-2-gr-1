<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Antybiotic;

class LoadAntybiotics implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/antybiotics.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $antybiotic = new Antybiotic();
            $antybiotic->setName($item['name']);
            $antybiotic->setClassification($item['classification']);
            $manager->persist($antybiotic);
        }

        $manager->flush();
    }
}