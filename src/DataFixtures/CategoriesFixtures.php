<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $parent = new Categories();
        $parent->setName('informatique');
        $manager->persist($parent);

        $category = new Categories();
        $category->setName('Ordinateurs portables');
        $category->setParent($parent);
        $manager->persist($category);

        $category = new Categories();
        $category->setName('Ecran');
        $category->setParent($parent);
        $manager->persist($category);
        
        $manager->flush();
    }
}
