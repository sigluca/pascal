<?php
// src/AppBundle/Admin/ScuolaAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class ScuolaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

             ->with('Scheda della scuola')    
           ->add('denominazione', null, array('label' => 'Nome della scuola'))
           ->add('indirizzostradale', null, array('label' => 'Indirizzo'))                
           ->add('telefono', null, array('label' => 'Telefono'))
           ->add('fax', null, array('label' => 'Fax'))
           ->add('email', null, array('label' => 'E-mail'))  
                
           ->add('indirizzo',null, array('route' => array('name' => 'show'), 'label'=>'Indirizzi scolastici',  'admin_code' => 'sonata.admin.indirizzo'))
            ->end()
             ;
                
                
    }    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with("Scheda della scuola")
            ->add('denominazione', null, array('label' => 'Nome della scuola'))
           ->add('indirizzostradale', null, array('label' => 'Indirizzo'))                
           ->add('telefono', null, array('label' => 'Telefono'))
           ->add('fax', null, array('label' => 'Fax'))
           ->add('email', null, array('label' => 'E-mail'))  
                
           ->add('indirizzo', 
                 'sonata_type_collection', 
                 array('label'=>'Indirizzi scolastici', 
                      'by_reference' => false,
                      'type_options' => array('delete' => false),
                      'btn_add' => 'Aggiungi un indirizzo'
                      ), 
                 array('edit' => 'inline', 
                      'inline' => 'table', 
                      'admin_code' => 'sonata.admin.indirizzogrid'
                      )
                )
             
              ->end()   
           
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('denominazione', null, array('label' => 'Nome della scuola'))
           ->add('indirizzostradale', null, array('label' => 'Indirizzo'))                
           ->add('telefono', null, array('label' => 'Telefono'))
           ->add('fax', null, array('label' => 'Fax'))
           ->add('email', null, array('label' => 'E-mail'))   
           ->add('indirizzo', null, array('label' => 'Indirizzo scolastico'))     
                
         ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->addIdentifier('id')
             ->add('denominazione', null, array('label' => 'Nome della scuola'))
           ->add('indirizzostradale', null, array('label' => 'Indirizzo'))                
           ->add('telefono', null, array('label' => 'Telefono'))
           ->add('fax', null, array('label' => 'Fax'))
           ->add('email', null, array('label' => 'E-mail'))      
           ->add('_action', 'actions', array('label' => 'Azioni possibili',
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))
                
        ;
    }
}

