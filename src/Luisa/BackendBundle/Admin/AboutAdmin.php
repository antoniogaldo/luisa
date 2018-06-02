<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\MediaBundle\Provider\BaseProvider;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\Form\Form;

class AboutAdmin extends Admin
{

  protected function configureFormFields(FormMapper $formMapper) {
      $formMapper
        ->add('about', 'sonata_simple_formatter_type', array('required' => false,'format' => 'richhtml','ckeditor_context' => 'default'))
        ;}

  protected function configureListFields(ListMapper $listMapper)
  {
      $listMapper
          ->addIdentifier('about', null, array('label' => 'About'))
          ;
  }

  public function getNewInstance()
  {
      $instance = parent::getNewInstance();
      $instance->setActive(true);

      return $instance;
  }
}
