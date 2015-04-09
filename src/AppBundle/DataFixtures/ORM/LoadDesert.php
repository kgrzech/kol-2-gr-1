<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Yaml\Yaml;

use AppBundle\Entity\Desert;

class LoadDesert implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

       $filename = __DIR__ . '/../../../../data/desert.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $desert = new Desert();
            $desert->setName($item['name']);
           $desert->setArea($item['area']);
            $manager->persist($desert);
        }

        $manager->flush();
    }
}
