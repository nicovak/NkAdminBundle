<?php

namespace Nk\AdminBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Nk\AdminBundle\Entity\Image as Image;
use Symfony\Component\Filesystem\Filesystem;
use Doctrine\Common\EventSubscriber;

/**
 * Listener projet
 */
class ImageListener implements EventSubscriber
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getSubscribedEvents()
    {
        return array('prePersist', 'preUpdate');
    }

    public function prePersist(LifeCycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof Image) {
            $this->uploadImage($entity);

            return $entity;
        }
    }

    public function preUpdate(LifeCycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if ($entity instanceof Image) {
            $this->uploadImage($entity);

            return $entity;
        }
    }

    /**
     * Image
     * On verifie si une image est envoyé,
     * Si oui on crée le dossier de réception si ce n'est deja fait
     * $finalPathToPersist est ce qui est persisté en base de donnée
     * $pathToMove est le chemin de destination du fichier
     *
     * @param Nk\SiteBundle\Entity\Image
     */
    public function uploadImage($entity) {
        if ($entity->getFile()) {

            $image = $entity->getFile();

            $pathToMove = $entity->getUploadRootDir();

            if (!is_dir($pathToMove)) {
                mkdir($pathToMove);
            }

            if (file_exists($pathToMove.$image->getClientOriginalName())) {
                $i = 0;
                $pathinfo = pathinfo($image->getClientOriginalName());
                $dest = $pathToMove.$image->getClientOriginalName();
                while (file_exists($dest)) {
                    $i++;
                    $dest = $pathToMove.$pathinfo['filename'].$i.'.'.$pathinfo['extension'];
                }
                $image->move($pathToMove, $dest);
                $pathToPersist = basename($dest);

            } else {
                $image->move($pathToMove, $image->getClientOriginalName());
                $pathToPersist = $image->getClientOriginalName();
            }
            $entity->setImage($pathToPersist);

            return $entity;
        }
    }
}
