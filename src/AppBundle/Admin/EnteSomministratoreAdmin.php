<?php
// src/AppBundle/Admin/EnteSomministratoreAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
  
class EnteSomministratoreAdmin extends Admin
{
    protected $baseRouteName = 'entesomministratoreadmin';
    protected $baseRoutePattern = 'Ente-Somministratore-Admin';        

    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

            ->with('Anagrafica ente somministratore')       
            ->add('nome',null,array('label' => 'Nome dell\'ente'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
            ->add('tipo.descrizione',null,array('label' => 'Tipo ente'))
            ->end();
                
                
    }     
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Anagrafica ente somministratore')
            ->add('nome',null,array('label' => 'Nome dell\'ente'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
            ->add('tipo',null,array('label' => 'Tipo ente'))
            ->end()
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nome',null,array('label' => 'Nome dell\'ente'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
                
            ->add('tipo',null,array('label' => 'Tipo ente'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->add('nome',null,array('label' => 'Nome dell\'ente'))
            ->add('tipo.descrizione',null,array('label' => 'Tipo ente'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('email',null,array('label' => 'E-mail'))                
                
            ->add('_action', 'actions', array('label' => 'Azioni possibili',
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))                
        ;
    }
}