<?php
// src/AppBundle/Admin/DisponibilitaFigureAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DisponibilitaFigureAdmin extends Admin
{
    protected $baseRouteName = 'disponibilitafigureadmin';

    protected $baseRoutePattern = 'Disponibilita-Figure-Admin';            
    // Fields to be shown on create/edit forms
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper


            ->with('Profilo della figura professionale richiesta')    
             ->add('indirizzo.labelcomposta',null,array('label' => 'Indirizzo scolastico dell\'allievo','property' => 'labelcomposta', 'admin_code' => 'sonata.admin.indirizzo'))
                  
                
            ->add('mansioniallievo',null,array('label' => 'Mansioni dell\'allievo'))
            ->add('richiestaconoscenza', 'sonata_type_collection', 
                array('label'=>'Conoscenze richieste','route' => array('name' => 'show'),))

            ->end()
                
            ->with('Azienda disponibile')                
            ->add('azienda',null,array('route' => array('name' => 'show'),'label' => 'Azienda'))                
            ->end()                
                
            ->with('Periodi di disponibilità')
            ->add('tempopermanenza.descrizione',null,array('label' => 'Tempo di permanenza'))
            ->add('disponibilegennaio','boolean',array('required'=>false, 'label' => 'Gennaio'))               
            ->add('disponibilefebbraio','boolean',array('required'=>false, 'label' => 'Febbraio'))                
            ->add('disponibilemarzo','boolean',array('required'=>false, 'label' => 'Marzo'))                
            ->add('disponibileaprile','boolean',array('required'=>false, 'label' => 'Aprile'))                
            ->add('disponibilemaggio','boolean',array('required'=>false, 'label' => 'Maggio'))                
            ->add('disponibilegiugno','boolean',array('required'=>false, 'label' => 'Giugno'))                
            ->add('disponibileluglio','boolean',array('required'=>false, 'label' => 'Luglio'))                
            ->add('disponibileagosto','boolean',array('required'=>false, 'label' => 'Agosto'))                
            ->add('disponibilesettembre','boolean',array('required'=>false, 'label' => 'Settembre'))                
            ->add('disponibileottobre','boolean',array('required'=>false, 'label' => 'Ottobre'))                
            ->add('disponibilenovembre','boolean',array('required'=>false, 'label' => 'Novembre'))                
            ->add('disponibiledicembre','boolean',array('required'=>false, 'label' => 'Dicembre'))                
            ->end()    
               
                   
                    
            ;
                
    }  
    
    
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Azienda richiedente')                
            ->add('azienda',null,array('label' => 'Azienda'))                
            ->end()
            ->with('Profilo della figura professionale richiesta')    
             ->add('indirizzo',null,array('label' => 'Indirizzo scolastico dell\'allievo','property' => 'labelcomposta'),
                    array('admin_code' => 'sonata.admin.indirizzo'))     
                
            ->add('mansioniallievo',null,array('label' => 'Mansioni dell\'allievo'))
            ->add('richiestaconoscenza', 'sonata_type_collection', 
                array('label'=>'Conoscenze richieste', 'by_reference' => false, 'type_options' => array('delete' => false),
                   'btn_add' => 'Aggiungi richiesta di conoscenza', ), 
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.richiestaconoscenzagrid'))

            ->end()
                
            ->with('Periodi di disponibilità')
            ->add('tempopermanenza',null,array('label' => 'Tempo di permanenza'))
            ->add('disponibilegennaio','checkbox',array('required'=>false, 'label' => 'Gennaio'))               
            ->add('disponibilefebbraio','checkbox',array('required'=>false, 'label' => 'Febbraio'))                
            ->add('disponibilemarzo','checkbox',array('required'=>false, 'label' => 'Marzo'))                
            ->add('disponibileaprile','checkbox',array('required'=>false, 'label' => 'Aprile'))                
            ->add('disponibilemaggio','checkbox',array('required'=>false, 'label' => 'Maggio'))                
            ->add('disponibilegiugno','checkbox',array('required'=>false, 'label' => 'Giugno'))                
            ->add('disponibileluglio','checkbox',array('required'=>false, 'label' => 'Luglio'))                
            ->add('disponibileagosto','checkbox',array('required'=>false, 'label' => 'Agosto'))                
            ->add('disponibilesettembre','checkbox',array('required'=>false, 'label' => 'Settembre'))                
            ->add('disponibileottobre','checkbox',array('required'=>false, 'label' => 'Ottobre'))                
            ->add('disponibilenovembre','checkbox',array('required'=>false, 'label' => 'Novembre'))                
            ->add('disponibiledicembre','checkbox',array('required'=>false, 'label' => 'Dicembre'))                
            ->end()    
               
                   
                    
            ;
                    
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            // ->add('id')    
            ->add('azienda',null,array('label' => 'Azienda'))                
            ->add('mansioniallievo',null,array('label' => 'Mansioni dell\'allievo'))
            ->add('indirizzo.scuola',null,array('label' => 'Scuola'))                
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('tempopermanenza',null,array('label' => 'Tempo di permanenza'))                
            ->add('disponibilegennaio',null,array('label' => 'Gennaio'))               
            ->add('disponibilefebbraio',null,array('label' => 'Febbraio'))                
            ->add('disponibilemarzo',null,array('label' => 'Marzo'))                
            ->add('disponibileaprile',null,array('label' => 'Aprile'))                
            ->add('disponibilemaggio',null,array('label' => 'Maggio'))                
            ->add('disponibilegiugno',null,array('label' => 'Giugno'))                
            ->add('disponibileluglio',null,array('label' => 'Luglio'))                
            ->add('disponibileagosto',null,array('label' => 'Agosto'))                
            ->add('disponibilesettembre',null,array('label' => 'Settembre'))                
            ->add('disponibileottobre',null,array('label' => 'Ottobre'))                
            ->add('disponibilenovembre',null,array('label' => 'Novembre'))                
            ->add('disponibiledicembre',null,array('label' => 'Dicembre'))                        
            
            
                                 
               
            
                    
                    
            ;
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->add('azienda',null,array('route' => array('name' => 'show'), 'label' => 'Azienda'))                
            ->add('mansioniallievo',null,array('label' => 'Mansioni dell\'allievo'))
            ->add('indirizzo.scuola',null,array('route' => array('name' => 'show'), 'label' => 'Scuola'))                
            ->add('indirizzo.denominazione',null,array('label' => 'Indirizzo'))
            ->add('disponibilegennaio',null,array('label' => 'Gen'))               
            ->add('disponibilefebbraio',null,array('label' => 'Feb'))                
            ->add('disponibilemarzo',null,array('label' => 'Mar'))                
            ->add('disponibileaprile',null,array('label' => 'Apr'))                
            ->add('disponibilemaggio',null,array('label' => 'Mag'))                
            ->add('disponibilegiugno',null,array('label' => 'Giu'))                
            ->add('disponibileluglio',null,array('label' => 'Lug'))                
            ->add('disponibileagosto',null,array('label' => 'Ago'))                
            ->add('disponibilesettembre',null,array('label' => 'Set'))                
            ->add('disponibileottobre',null,array('label' => 'Ott'))                
            ->add('disponibilenovembre',null,array('label' => 'Nov'))                
            ->add('disponibiledicembre',null,array('label' => 'Dic'))         
            ->add('tempopermanenza.descrizione',null,array('label' => 'Tempo di permanenza'))
           ->add('_action', 'actions', array('label' => 'Azioni possibili',
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))            
                                 
            
        ;
    }
}