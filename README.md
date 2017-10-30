A Symfony project created on March 8, 2017, 10:29 am.
1)composer install
2)generate database
3) php bin/console doctrine:schema:update --force
//for create user//
php bin/console fos:user:create admin admin@example.com admin --super-admin
php bin/console doctrine:fixtures:load --fixtures=src/Aww/BackendBundle/DataFixtures/ORM --append

php bin/console doctrine:generate:entities BackendBundle


$media = $mediaManager->findOneBy(array('id' => $id));
$provider = $this->get($media->getProviderName());
$provider->removeThumbnails($media);
$mediaManager->delete($media)

Create the upload directory
```sh
$ mkdir web/uploads
$ mkdir web/uploads/media
$ chmod -R 0777 web/uploads
