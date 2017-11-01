<?php

namespace Luisa\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ImageAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('id', null, array('required' => true, 'label' => 'Nome','help' => 'Nome'))

            ;}

    protected function configureRoutes(RouteCollection $collection)
    {
    $collection->remove('delete');
    $collection->remove('create');
    $collection->remove('edit');
    }
    public function postRemove($media)
    {

    $path = $this->$mediaManager->get('sonata.media.twig.extension')->path($media, 'reference');
    $media = $path->findOneBy(array('id' => $id));
    $provider = $this->get($media->getProviderName());
    $provider->removeThumbnails($media);
    $path->delete($media);
    }

}
