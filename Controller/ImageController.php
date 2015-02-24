<?php

namespace Nk\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/admin")
 *
 */
class ImageController extends Controller {

    /**
     * Supprimer l'image (conserve l'image dans le dossier image)
     * @Route("/delete_image/{id}", name="delete_image", requirements={"id" = "\d+"})
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param type $id
     * @return header
     * @throws NotFoundHttpException
     */
    public function deleteImageAction(Request $request, $id) {
        $referer = $request->headers->get('referer');

        $Image = $this->getDoctrine()->getRepository('NkSiteBundle:Image')->findOneById($id);
        if (!$Image) {
            throw new NotFoundHttpException(sprintf("L'image avec l'ID %s n'a pas été trouvé.", $id));
        }

        $Image->setImage(null);
        $em = $this->getDoctrine()->getManager();
        $em->persist($Image);
        $em->flush();

        return $this->redirect($referer);
    }

}
