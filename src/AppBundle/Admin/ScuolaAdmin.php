<?php
// src/AppBundle/Admin/ScuolaAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ScuolaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('denominazione', null, array('label' => 'Nome della scuola'))
           ->add('indirizzo', null, array('label' => 'Indirizzo'))                
           ->add('telefono', null, array('label' => 'Telefono'))
           ->add('fax', null, array('label' => 'Fax'))
           ->add('email', null, array('label' => 'E-mail'))                
           
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('denominazione', null, array('label' => 'Nome della scuola'))
           ->add('indirizzo', null, array('label' => 'Indirizzo'))                
           ->add('telefono', null, array('label' => 'Telefono'))
           ->add('fax', null, array('label' => 'Fax'))
           ->add('email', null, array('label' => 'E-mail'))                
                
         ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->addIdentifier('id')
             ->addIdentifier('denominazione', null, array('label' => 'Nome della scuola'))
           ->add('indirizzo', null, array('label' => 'Indirizzo'))                
           ->add('telefono', null, array('label' => 'Telefono'))
           ->add('fax', null, array('label' => 'Fax'))
           ->add('email', null, array('label' => 'E-mail'))                
                
        ;
    }
}

