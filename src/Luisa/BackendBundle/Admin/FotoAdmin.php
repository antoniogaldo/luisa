<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FotoAdmin extends Admin
{
  protected function configureFormFields(FormMapper $formMapper) {
      $formMapper
        ->add('name', null, array('required' => true, 'label' => 'Nome','help' => 'Titolo viaggio'))
        ->add('image', 'sonata_type_model_list', array('required' => false,'help' => 'Inserisci immagini di 730px x 320px', 'label' => 'Immagine',), array(
            'link_parameters' => [
                'provider'=>'sonata.media.provider.image',
                'context'=>'uploads'
            ],
            'required' => false,
        ))
        ->add('rotta', null, array('required' => false, 'label' => 'Rotta', 'read_only' => true))
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
