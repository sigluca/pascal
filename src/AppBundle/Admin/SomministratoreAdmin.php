<?php
// src/AppBundle/Admin/SomministratoreAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
  
class SomministratoreAdmin extends Admin
{
    protected $baseRouteName = 'somministratoreadmin';
    protected $baseRoutePattern = 'Somministratore-Admin';        

    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

            ->with('Anagrafica somministratore di questionari')       
            ->add('nominativo',null,array('label' => 'Somministratore'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
            ->add('ente',null,array('route' => array('name' => 'show'),'label' => 'Ente'))
            ->end();
                
                
    }                
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Anagrafica somministratore di questionari')
            ->add('nominativo',null,array('label' => 'Somministratore'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
            ->add('ente',null,array('label' => 'Ente'))
            ->end();
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
             ->add('nominativo',null,array('label' => 'Somministratore'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
            ->add('ente',null,array('label' => 'Ente'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->add('nominativo',null,array('label' => 'Somministratore'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
            ->add('ente',null,array('route' => array('name' => 'show'),'label' => 'Ente somministatore'))
            //->add('ente.tipo',null,array('label' => 'Tipo ente'))                
            ->add('_action', 'actions', array('label' => 'Azioni possibili',
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))
        ;
    }
}

