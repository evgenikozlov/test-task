<?php

namespace Task\TaskBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Task\TaskBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		for ($i=0; $i < 100; $i++)
		{
			$product = new Product();
			$product->setCategory($em->merge($this->getReference('category'.mt_rand(0,4))));
			$product->setName('fr:name'.$i.';'.'en:name'.$i);
			$product->setPrice(mt_rand(50, 1500));

			$em->persist($product);
		}
		$em->flush();
	}

	public function getOrder()
	{
		return 2; // the order in which fixtures will be loaded
	}
}