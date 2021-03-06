<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\MediaBundle\Provider\BaseProvider;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\Form\Form;

class VideoAdmin extends Admin
{

  protected function configureFormFields(FormMapper $formMapper) {
      $formMapper
        ->add('name', null, array('required' => true, 'label' => 'Nome','help' => 'Titolo viaggio'))
        ->add('video', 'sonata_type_model_list', array('required' => false,'help' => 'Inserisci immagini di 730px x 320px', 'label' => 'Video',), array(
            'link_parameters' => [
                'provider'=>'sonata.media.provider.vimeo',
                'provider'=>'sonata.media.provider.youtube',
                'context'=>'uploads'
            ],
            'required' => false,
        ))
        ->add('image', 'sonata_type_model_list', array('required' => false, 'label' => 'Immagine'), array(
            'link_parameters' => [
                'provider'=>'sonata.media.provider.image',
                'context'=>'uploads'
            ],
            'required' => false,
        ))
        ;}

  protected function configureListFields(ListMapper $listMapper)
  {
      $listMapper
          ->addIdentifier('name', null, array('label' => 'Nome'))
          ->add('image', null, array('label' => 'Immagine'))
          ;
  }

  public function getNewInstance()
  {
      $instance = parent::getNewInstance();
      $instance->setActive(true);

      return $instance;
  }
}
