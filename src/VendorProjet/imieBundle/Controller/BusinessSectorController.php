<?php

namespace VendorProjet\imieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use VendorProjet\imieBundle\Entity\BusinessSector;
use VendorProjet\imieBundle\Form\BusinessSectorType;

/**
 * BusinessSector controller.
 *
 * @Route("/businesssector")
 */
class BusinessSectorController extends Controller
{

    /**
     * Lists all BusinessSector entities.
     *
     * @Route("/", name="businesssector")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VendorProjetimieBundle:BusinessSector')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new BusinessSector entity.
     *
     * @Route("/", name="businesssector_create")
     * @Method("POST")
     * @Template("VendorProjetimieBundle:BusinessSector:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new BusinessSector();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('businesssector_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a BusinessSector entity.
     *
     * @param BusinessSector $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BusinessSector $entity)
    {
        $form = $this->createForm(new BusinessSectorType(), $entity, array(
            'action' => $this->generateUrl('businesssector_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BusinessSector entity.
     *
     * @Route("/new", name="businesssector_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new BusinessSector();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a BusinessSector entity.
     *
     * @Route("/{id}", name="businesssector_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:BusinessSector')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BusinessSector entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing BusinessSector entity.
     *
     * @Route("/{id}/edit", name="businesssector_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:BusinessSector')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BusinessSector entity.');
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
    * Creates a form to edit a BusinessSector entity.
    *
    * @param BusinessSector $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BusinessSector $entity)
    {
        $form = $this->createForm(new BusinessSectorType(), $entity, array(
            'action' => $this->generateUrl('businesssector_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BusinessSector entity.
     *
     * @Route("/{id}", name="businesssector_update")
     * @Method("PUT")
     * @Template("VendorProjetimieBundle:BusinessSector:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:BusinessSector')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BusinessSector entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('businesssector_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a BusinessSector entity.
     *
     * @Route("/{id}", name="businesssector_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VendorProjetimieBundle:BusinessSector')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BusinessSector entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('businesssector'));
    }

    /**
     * Creates a form to delete a BusinessSector entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('businesssector_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
