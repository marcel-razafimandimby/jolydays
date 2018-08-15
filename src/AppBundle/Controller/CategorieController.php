<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Categorie controller.
 *
 */
class CategorieController extends Controller
{
    /**
     * Lists all categorie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Categorie')->findAll();

        return $this->render('categorie/index.html.twig', array(
            'categories' => $categories,
        ));
    }

    /**
     * Creates a new categorie entity.
     *
     */
    public function newAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createForm('AppBundle\Form\CategorieType', $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Enregistrement effectuée avec succès');

            return $this->redirectToRoute('annonce_categorie_index', array('id' => $categorie->getId()));
        }

        return $this->render('categorie/new.html.twig', array(
            'categorie' => $categorie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorie entity.
     *
     */
    public function showAction(Categorie $categorie)
    {
        $deleteForm = $this->createDeleteForm($categorie);

        return $this->render('categorie/show.html.twig', array(
            'categorie' => $categorie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorie entity.
     *
     */
    public function editAction(Request $request, Categorie $categorie)
    {
        $deleteForm = $this->createDeleteForm($categorie);
        $editForm = $this->createForm('AppBundle\Form\CategorieType', $categorie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->get('session')->getFlashBag()->add('success', 'Enregistrement effectuée avec succès');

            return $this->redirectToRoute('annonce_categorie_edit', array('id' => $categorie->getId()));
        }

        return $this->render('categorie/edit.html.twig', array(
            'categorie' => $categorie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorie entity.
     *
     */
    public function deleteAction(Request $request, Categorie $categorie)
    {
        $form = $this->createDeleteForm($categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorie);
            $em->flush();
        }

        $this->get('session')->getFlashBag()->add('success', 'Suppression effectuée avec succès');

        return $this->redirectToRoute('annonce_categorie_index');
    }

    /**
     * Creates a form to delete a categorie entity.
     *
     * @param Categorie $categorie The categorie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categorie $categorie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('annonce_categorie_delete', array('id' => $categorie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function deleteElementAction($id){
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository('AppBundle:Categorie')->find($id);

        if(!$categorie){
            throw $this->createNotFoundException('Enable to find categorie');
        }else{
                       
            $em->remove($categorie);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'La suppression est effectuée avec succes!');

            return $this->redirect($this->generateUrl('annonce_categorie_index'));
        }

        return $this->render('categorie/index.html.twig', array(
            'categories' => $em->getRepository('AppBundle:Categorie')->findAll()

        ));
    }
}
