<?php
// src/AppBundle/Admin/TipoConoscenzaAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TipoConoscenzaAdmin extends Admin
{
    
    protected $baseRouteName = 'tipoconoscenzaadmin';
    protected $baseRoutePattern = 'Tipo-Conoscenza-Admin';        
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('descrizione', null, array('label' => 'Descrizione'))
           
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('descrizione', null, array('label' => 'Descrizione'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('descrizione', null, array('label' => 'Descrizione'))        ;
    }
}

