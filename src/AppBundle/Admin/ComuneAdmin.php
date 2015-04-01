<?php
// src/AppBundle/Admin/ComuneAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ComuneAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        
        $formMapper
            ->add('nome', 'text', array('label' => 'Nome comune'))
            ->add('provincia', 'sonata_type_model',array(
            'property' => 'nome',
            'label' => 'Provincia',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'btn_add' => false
        ))
           
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('nome',null, array('label' => 'Nome comune'))
            ->add('provincia', null, array('label' => 'Provincia'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->addIdentifier('id')
            ->addIdentifier('nome','text', array('label' => 'Nome comune'))
            ->add('provincia.nome',null,array('label' => 'Provincia'))
        ;
    }
}

