<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PersonalAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('name', null, array('required' => true, 'label' => 'Nome'))
            ->add('categoria', 'entity', array(
                'required' => true,
                'class' => 'BackendBundle:PersonalCategoria',
                'label' => 'Categoria',
            ))
            ->add('image', 'sonata_type_model_list', array('required' => false, 'label' => 'Immagine',), array(
                'link_parameters' => [
                    'provider'=>'sonata.media.provider.image',
                    'context'=>'uploads'
                ],
                'required' => false,
            ))
            ->add('gallery', 'sonata_type_model_list', array('required' => false, 'label' => 'Galleria',), array(
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
            ->add('id', null)
            ->addIdentifier('name', null, array('label' => 'Nome'))
        ;
    }
}
