<?php
// src/AppBundle/Admin/DisponibilitaAreaAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
  
class DisponibilitaAreaAdmin extends Admin
{
    protected $baseRouteName = 'disponibilitaareaadmin';

    protected $baseRoutePattern = 'Disponibilita-Area-Admin';        
    
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

             ->with('Disponibilità per area professionale')    
            ->add('azienda',null,array('route' => array('name' => 'show'), 'label' => 'Azienda che si rende disponibile'))
            ->add('area.descrizione',null,array('label' => 'Area professionale per cui è disponibile'))
            ->add('note',null,array('label' => 'Note'))
            ->end()
                
             ;
                
                
    }
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        
        $formMapper
            ->with('Disponibilità per area professionale')    
            ->add('azienda', 'sonata_type_model',array(
            'property' => 'denominazione',
            'label' => 'Azienda che si rende disponibile',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'btn_add' => false))     
            ->add('area', 'sonata_type_model',array(
            'property' => 'descrizione',
            'label' => 'Area professionale per cui è disponibile',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'btn_add' => false))
            ->add('note', null, array('label'=>'Note'))
            ->end()
               
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('area',null,array('label' => 'Area professionale'))
            ->add('note',null,array('label' => 'Note'))
            ->add('azienda',null,array('label' => 'Azienda'))                
            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->add('area.descrizione',null,array('label' => 'Area professionale'))
            ->add('note',null,array('label' => 'Note'))
            ->add('azienda',null,array('route' => array('name' => 'show'),'label' => 'Azienda disponibile')) 
            ->add('_action', 'actions', array('label' => 'Azioni possibili',
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))
                             
            
        ;
    }
}