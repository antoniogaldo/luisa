<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FotoInternalAdmin extends Admin
{
  protected function configureFormFields(FormMapper $formMapper) {
      $formMapper
        ->add('name', null, array('required' => true, 'label' => 'Nome','help' => 'Titolo viaggio'))
        ;}

  protected function configureListFields(ListMapper $listMapper)
  {
      $listMapper
          ->addIdentifier('name', null, array('label' => 'Nome'))
          ;
  }

  public function getNewInstance()
  {
      $instance = parent::getNewInstance();
      $instance->setActive(true);

      return $instance;
  }
}
