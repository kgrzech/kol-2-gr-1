<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Lamb;

class LoadLamb implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $filename = __DIR__ . '/../../../../data/lamb.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $lamb = new Lamb();
            $lamb->setName($item['name']);
            $lamb->setAge($item['age']);
            $manager->persist($lamb);
        }

        $manager->flush();
    }
}