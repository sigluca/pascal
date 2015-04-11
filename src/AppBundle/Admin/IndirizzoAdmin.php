<?php
// src/AppBundle/Admin/IndirizzoAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
  
class IndirizzoAdmin extends Admin
{
    protected $baseRouteName = 'indirizzoadmin';

    protected $baseRoutePattern = 'Indirizzo-Admin';        
    // Fields to be shown on create/edit forms
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

             ->with('Scheda dell\'indirizzo di studi')    
            ->add('denominazione',null,array('label' => 'Nome dell\'indirizzo'))
            ->add('durata',null,array('label' => 'Durata in anni'))
            ->add('scuola',null,array('route' => array('name' => 'show'), 'label' => 'Scuola'))
            ->end()
             ;
                
                
    }       
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Scheda dell\'indirizzo di studi')    
            ->add('denominazione',null,array('label' => 'Nome dell\'indirizzo'))
            ->add('durata',null,array('label' => 'Durata in anni'))
            ->add('scuola',null,array('label' => 'Scuola'))
            ->end()    
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
             ->add('denominazione',null,array('label' => 'Nome dell\'indirizzo'))
            ->add('durata',null,array('label' => 'Durata in anni'))
             ->add('scuola',null,array('label' => 'Scuola'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
             ->add('denominazione',null,array('label' => 'Nome dell\'indirizzo'))
            ->add('durata',null,array('label' => 'Durata in anni'))
            ->add('scuola',null,array('route' => array('name' => 'show'), 'label' => 'Scuola'))                
           ->add('_action', 'actions', array('label' => 'Azioni possibili',
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))                
        ;
    }
}