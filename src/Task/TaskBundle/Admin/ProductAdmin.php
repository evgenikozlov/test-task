<?php
namespace Task\TaskBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
//use Task\TaskBundle\Entity\Product;

class ProductAdmin extends Admin
{
	protected $translationDomain = 'SonataAdminBundle'; // default is 'messages'

	// setup the defaut sort column and order
	protected $datagridValues = array(
		'_sort_order' => 'ASC',
		'_sort_by' => 'id'
	);

	// Fields to be shown on create/edit forms
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('id')
			->add('name')
			->add('category')
			->add('price')
		;
	}

	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('category')
			->add('price')
		;
	}

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->add('id')
			->add('name')
			->add('category')
			->add('price')
		;
	}

	protected function configureShowField(ShowMapper $showMapper)
	{
	}
}