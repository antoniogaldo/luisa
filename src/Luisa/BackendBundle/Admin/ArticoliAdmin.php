<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ArticoliAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('name', null, array('required' => true, 'label' => 'Nome'))
            ->add('descrizione', 'sonata_simple_formatter_type', array('required' => false,'format' => 'richhtml','ckeditor_context' => 'default'))
            ->add('image', 'sonata_type_model_list', array('required' => false, 'label' => 'Immagine'), array(
                'link_parameters' => [
                    'provider'=>'sonata.media.provider.image',
                    'context'=>'uploads'
                ],
                'required' => false,
            ))
           ->add('link', null, array('required' => true, 'label' => 'Link'))
           ;
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array('label' => 'Nome'))
            ->add('link', null, array('label' => 'Link'))
        ;
    }

    public function getNewInstance()
    {
        $instance = parent::getNewInstance();
        return $instance;
    }
}
