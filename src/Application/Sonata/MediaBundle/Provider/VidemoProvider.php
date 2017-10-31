<?php
namespace Sonata\MediaBundle\Provider\VimeoProvider;

use Sonata\MediaBundle\Provider\BaseProvider;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\Form\Form;

class VimeoProvider extends BaseProvider
{
  public function buildCreateForm(FormMapper $formMapper)
{
    $formMapper->add('binaryContent', array(), array('type' => 'string'));
}

public function buildEditForm(FormMapper $formMapper)
{
    $formMapper->add('name');
    $formMapper->add('enabled');
    $formMapper->add('authorName');
    $formMapper->add('cdnIsFlushable');
    $formMapper->add('description');
    $formMapper->add('copyright');
    $formMapper->add('binaryContent', array(), array('type' => 'string'));
}
public function getMetadata(MediaInterface $media)
{
    if (!$media->getBinaryContent()) {

        return;
    }

    $url = sprintf('http://vimeo.com/api/oembed.json?url=http://vimeo.com/%s', $media->getBinaryContent());
    $metadata = @file_get_contents($url);

    if (!$metadata) {
        throw new \RuntimeException('Unable to retrieve vimeo video information for :' . $url);
    }

    $metadata = json_decode($metadata, true);

    if (!$metadata) {
        throw new \RuntimeException('Unable to decode vimeo video information for :' . $url);
    }

    return $metadata;
}
}
