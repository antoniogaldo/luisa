<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\MediaBundle\Provider\BaseProvider;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\Form\Form;

class VideoHomeAdmin extends Admin
{

  protected function configureFormFields(FormMapper $formMapper) {
      $formMapper
        ->add('name', null, array('required' => true, 'label' => 'Nome','help' => 'Titolo viaggio'))
        ->add('video', 'sonata_type_model_list', array('required' => false,'help' => 'Inserisci immagini di 730px x 320px', 'label' => 'Video',), array(
            'link_parameters' => [
                'provider'=>'sonata.media.provider.vimeo',
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
          ->add('video', null, array('label' => 'Video'))
          ;
  }

  public function getNewInstance()
  {
      $instance = parent::getNewInstance();
      $instance->setActive(true);

      return $instance;
  }
}
