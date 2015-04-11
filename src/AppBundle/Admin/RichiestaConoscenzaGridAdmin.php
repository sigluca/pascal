<?php
// src/AppBundle/Admin/RichiestaConoscenzaGridAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
  
class RichiestaConoscenzaGridAdmin extends Admin
{
    protected $baseRouteName = 'richiestaconoscenzagridadmin';

    protected $baseRoutePattern = 'Richiesta-Conoscenza-Grid-Admin';        
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('conoscenza', null, array('label'=>'Conoscenza','property'=>'labelcomposta'))
            ->add('dettagli', null, array('label'=>'Dettagli')                                
            
        );
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('conoscenza',null,array('label' => 'Conoscenza'))
            ->add('dettagli',null,array('label' => 'Dettagli'))
            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->addIdentifier('conoscenza',null,array('label' => 'Conoscenza'))
            ->add('dettagli',null,array('label' => 'Dettagli'))
                             
            
        ;
    }
}