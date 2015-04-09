<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Yaml\Yaml;
use AppBundle\Entity\Mountains;
class LoadMountains implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $filename = __DIR__ . '/../../../../data/mountains.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $mountains = new Mountains();
            $mountains->setName($item['name']);
            $mountains->setHeight($item['height']);
            $manager->persist($mountains);
        }
        $manager->flush();
    }
}