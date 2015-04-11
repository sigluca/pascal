<?php
// src/AppBundle/Admin/IndirizzoGridAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
  
class IndirizzoGridAdmin extends Admin
{
    protected $baseRouteName = 'indirizzogridadmin';

    protected $baseRoutePattern = 'Indirizzo-Grid-Admin';        
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('denominazione',null,array('label' => 'Nome indirizzo'))
            ->add('durata',null,array('label' => 'Durata in anni'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
             ->add('denominazione',null,array('label' => 'Nome indirizzo'))
            ->add('durata',null,array('label' => 'Durata in anni'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
             ->addIdentifier('denominazione',null,array('label' => 'Nome indirizzo'))
            ->add('durata',null,array('label' => 'Durata in anni'))
        ;
    }
}