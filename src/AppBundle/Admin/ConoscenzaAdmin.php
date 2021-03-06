<?php
// src/AppBundle/Admin/ConoscenzaAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
  
class ConoscenzaAdmin extends Admin
{
    protected $baseRouteName = 'conoscenzaadmin';
    protected $baseRoutePattern = 'Conoscenza-Admin';        
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('descrizione',null,array('label' => 'Conoscenza'))
            ->add('tipo',null,array('label' => 'Tipo conoscenza'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('descrizione',null,array('label' => 'Conoscenza'))
            ->add('tipo',null,array('label' => 'Tipo conoscenza'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->addIdentifier('descrizione',null,array('label' => 'Conoscenza'))
            ->add('tipo',null,array('label' => 'Tipo conoscenza'))
        ;
    }
}