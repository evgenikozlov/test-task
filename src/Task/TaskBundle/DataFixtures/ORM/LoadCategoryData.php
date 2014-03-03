<?php
namespace Task\TaskBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Task\TaskBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		for ($i=0; $i < 5; $i++)
		{
			$category = new Category();
			$category->setName('category'.$i);

			$em->persist($category);
			$this->addReference('category'.$i, $category);
		}
		$em->flush();
	}

	public function getOrder()
	{
		return 1; // the order in which fixtures will be loaded
	}
}