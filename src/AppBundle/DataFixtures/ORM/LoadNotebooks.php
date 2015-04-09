<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Yaml\Yaml;
use AppBundle\Entity\Notebook;
class LoadNotebooks implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $filename = __DIR__ . '/../../../../data/notebooks.yml';
        $yml = Yaml::parse(file_get_contents($filename));
        foreach ($yml as $item) {
            $notebooks = new Notebook();
            $notebooks->setName($item['name']);
            $notebooks->setPrice($item['price']);
            $manager->persist($notebooks);
        }
        $manager->flush();
    }
}