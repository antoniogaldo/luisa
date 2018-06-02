<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FotoCategoriaAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('name', null, array('required' => true, 'label' => 'Nome'))
            ->add('active', null, array('required' => false, 'label' => 'Attivo'))
            ->add('vertical', 'choice', array('choices' => array(0 => 'Verticale',1 => 'Orizontale')))
            ->add('image', 'sonata_type_model_list', array('required' => false, 'label' => 'Immagine'), array(
                'link_parameters' => [
                    'provider'=>'sonata.media.provider.image',
                    'context'=>'uploads'
                ],
                'required' => false,
            ))
           ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array('label' => 'Nome'))
            ->add('image', null, array('label' => 'Immagine'))
            ->add('vertical','choice', array('label' => 'Proporzione','editable' => true,'choices' => array(0 => 'Verticale',1 => 'Orizontale')))
        ;
    }

    public function getNewInstance()
    {
        $instance = parent::getNewInstance();
        $instance->setActive(true);

        return $instance;
    }
}
