<?php

namespace VendorProjet\imieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use VendorProjet\imieBundle\Entity\TypeOffer;
use VendorProjet\imieBundle\Form\TypeOfferType;

/**
 * TypeOffer controller.
 *
 * @Route("/typeoffer")
 */
class TypeOfferController extends Controller
{

    /**
     * Lists all TypeOffer entities.
     *
     * @Route("/", name="typeoffer")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VendorProjetimieBundle:TypeOffer')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new TypeOffer entity.
     *
     * @Route("/", name="typeoffer_create")
     * @Method("POST")
     * @Template("VendorProjetimieBundle:TypeOffer:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new TypeOffer();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typeoffer_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a TypeOffer entity.
     *
     * @param TypeOffer $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TypeOffer $entity)
    {
        $form = $this->createForm(new TypeOfferType(), $entity, array(
            'action' => $this->generateUrl('typeoffer_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TypeOffer entity.
     *
     * @Route("/new", name="typeoffer_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TypeOffer();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TypeOffer entity.
     *
     * @Route("/{id}", name="typeoffer_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:TypeOffer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeOffer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TypeOffer entity.
     *
     * @Route("/{id}/edit", name="typeoffer_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:TypeOffer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeOffer entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a TypeOffer entity.
    *
    * @param TypeOffer $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TypeOffer $entity)
    {
        $form = $this->createForm(new TypeOfferType(), $entity, array(
            'action' => $this->generateUrl('typeoffer_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TypeOffer entity.
     *
     * @Route("/{id}", name="typeoffer_update")
     * @Method("PUT")
     * @Template("VendorProjetimieBundle:TypeOffer:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:TypeOffer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TypeOffer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('typeoffer_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TypeOffer entity.
     *
     * @Route("/{id}", name="typeoffer_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VendorProjetimieBundle:TypeOffer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TypeOffer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typeoffer'));
    }

    /**
     * Creates a form to delete a TypeOffer entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeoffer_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
