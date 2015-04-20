<?php

namespace VendorProjet\imieBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use VendorProjet\imieBundle\Entity\SkillType;
use VendorProjet\imieBundle\Form\SkillTypeType;

/**
 * SkillType controller.
 *
 * @Route("/skilltype")
 */
class SkillTypeController extends Controller
{

    /**
     * Lists all SkillType entities.
     *
     * @Route("/", name="skilltype")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VendorProjetimieBundle:SkillType')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new SkillType entity.
     *
     * @Route("/", name="skilltype_create")
     * @Method("POST")
     * @Template("VendorProjetimieBundle:SkillType:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new SkillType();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('skilltype_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a SkillType entity.
     *
     * @param SkillType $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SkillType $entity)
    {
        $form = $this->createForm(new SkillTypeType(), $entity, array(
            'action' => $this->generateUrl('skilltype_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SkillType entity.
     *
     * @Route("/new", name="skilltype_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SkillType();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a SkillType entity.
     *
     * @Route("/{id}", name="skilltype_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:SkillType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SkillType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing SkillType entity.
     *
     * @Route("/{id}/edit", name="skilltype_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:SkillType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SkillType entity.');
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
    * Creates a form to edit a SkillType entity.
    *
    * @param SkillType $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SkillType $entity)
    {
        $form = $this->createForm(new SkillTypeType(), $entity, array(
            'action' => $this->generateUrl('skilltype_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SkillType entity.
     *
     * @Route("/{id}", name="skilltype_update")
     * @Method("PUT")
     * @Template("VendorProjetimieBundle:SkillType:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VendorProjetimieBundle:SkillType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SkillType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('skilltype_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a SkillType entity.
     *
     * @Route("/{id}", name="skilltype_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VendorProjetimieBundle:SkillType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SkillType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('skilltype'));
    }

    /**
     * Creates a form to delete a SkillType entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('skilltype_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
