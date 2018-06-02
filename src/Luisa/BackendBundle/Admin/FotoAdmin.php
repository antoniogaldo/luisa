<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FotoAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('name', null, array('required' => true, 'label' => 'Nome'))
            ->add('categoria', 'entity', array(
                'required' => true,
                'class' => 'BackendBundle:FotoCategoria',
                'label' => 'Categoria',
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
            ->addIdentifier('name', null, array('label' => 'Nome'))
            ->add('categoria', null, array('label' => 'Categoria'))
        ;
    }
}
