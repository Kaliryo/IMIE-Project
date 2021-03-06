<?php

namespace VendorProjet\imieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use VendorProjet\imieBundle\Entity\CV;
use VendorProjet\imieBundle\Form\CVType;

/**
 * CV controller.
 *
 * @Route("/cv")
 */
class CVController extends Controller
{

    /**
     * Lists all CV entities.
     *
     * @Route("/", name="cv")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VendorProjetimieBundle:CV')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new CV entity.
     *
     * @Route("/", name="cv_create")
     * @Method("POST")
     * @Template("VendorProjetimieBundle:CV:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new CV();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cv_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a CV entity.
     *
     * @param CV $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CV $entity)
    {
        $form = $this->createForm(new CVType(), $entity, array(
            'action' => $this->generateUrl('cv_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CV entity.
     *
     * @Route("/new", name="cv_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new CV();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a CV entity.
     *
     * @Route("/{id}", name="cv_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:CV')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CV entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing CV entity.
     *
     * @Route("/{id}/edit", name="cv_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:CV')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CV entity.');
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
    * Creates a form to edit a CV entity.
    *
    * @param CV $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CV $entity)
    {
        $form = $this->createForm(new CVType(), $entity, array(
            'action' => $this->generateUrl('cv_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CV entity.
     *
     * @Route("/{id}", name="cv_update")
     * @Method("PUT")
     * @Template("VendorProjetimieBundle:CV:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:CV')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CV entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cv_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a CV entity.
     *
     * @Route("/{id}", name="cv_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VendorProjetimieBundle:CV')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CV entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cv'));
    }

    /**
     * Creates a form to delete a CV entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cv_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
