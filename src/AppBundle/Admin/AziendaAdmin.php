<?php
// src/AppBundle/Admin/AziendaAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AziendaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        $showMapper

             ->with('Anagrafica azienda')    
            ->add('denominazione',null,array('label' => 'Nome dell\'azienda'))
            ->add('partitaiva',null,array('label' => 'Partita IVA'))
            ->add('codicefiscale',null,array('label' => 'Codice fiscale'))
            ->add('numerodirigenti',null,array('label' => 'Numero di dirigenti'))
            ->add('numeroimpiegati',null,array('label' => 'Numero di impiegati'))
            ->add('numerooperai',null,array('label' => 'Numero di operai'))
            ->add('numeroaltridipendenti',null,array('label' => 'Numero di altri dipendenti'))
            ->add('sito',null,array('label' => 'Sito dell\'azienda'))
            ->end()
            ->with('Sedi dell\'azienda')
            //->add('sede','collection',array('label' => 'Sedi', 'admin_code' => 'sonata.admin.sedegrid'),
            //         array('edit' => 'inline', 'inline' => 'table'))

            ->add('sede', 'sonata_type_collection', ['route' => array('name' => 'show'), 'label' => 'Sedi',  'admin_code' => 'sonata.admin.sede'])
                
               
                // 'route' => array('name' => 'show'),
                
            ->end()
        
            ->with('Personale dell\'azienda')
            ->add('personale','sonata_type_collection',array('route' => array('name' => 'show'), 'label' => 'Personale', 'admin_code' => 'sonata.admin.personale'),
                     array('edit' => 'inline', 'inline' => 'table'))
            ->end()
                
            ->with('Disponibilità per aree e figure professionali')  
                    
            ->add('disponibilitaarea', 'sonata_type_collection', 
                array('route' => array('name' => 'show'),'label'=>'Aree professionali per cui si rende disponibile'
                   , 'admin_code' => 'sonata.admin.disponibilitaareagrid'))

  
           
            ->add('disponibilitafigure', 'sonata_type_collection', 
                array('route' => array('name' => 'show'), 'label'=>'Figure professionali per cui si rende disponibile', 'admin_code' => 'sonata.admin.disponibilitafiguregrid') 
                    
                )
            ->end()
                
                
                
            ->with('Informazioni alternanza Scuola-Lavoro')    
            ->add('disponibile','boolean',array('required'=>false, 'label' => 'Disponibile ad attivare percorsi di alternanza Scuola-Lavoro?'
                ))

            ->add('Q8a','boolean',array('required'=>false, 'label' => 'Ci sono opportunità di stage per soggetti disabili? '))
            ->add('Q8b',null,array('required'=>false, 'label' => 'Eventuali caratteristiche stage per disabili:'
                ,))
            
            ->add('Q9a','boolean',array('required'=>false, 'label' => 'Coinvonta in passato in uno Stage formativo'))
            ->add('Q9b','boolean',array('required'=>false, 'label' => 'Coinvonta in passato in una Visita aziendale'))              
            ->add('Q9c','boolean',array('required'=>false, 'label' => 'Coinvonta in passato in una Testimonianza aziendale'))                                
            ->add('Q9d',null,array('required'=>false, 'label' => 'Coinvonta in passato in altre attivita di alternanza:'))                                                
                
            ->add('Q10',null,array('required'=>false, 'label' => 'Segnalazioni relative a migliorie dell\'organizzazione dell\'alternanza in base alle esperienze passate'))                                
                
            ->add('Q11','boolean',array('required'=>false, 'label' => 'Disponibile a condividere l\'esperienza attraverso Testimonianze aziendali'
                ))                                
                
            ->add('Q12a','boolean',array('required'=>false, 'label' => 'Possibilità di conoscere giovani da poter inserire in azienda'))    
            ->add('Q12b','boolean',array('required'=>false, 'label' => 'Possibilità di poter avere un efficace aiuto in azienda'))                        
            ->add('Q12c','boolean',array('required'=>false, 'label' => 'Assunzione di responsabilità sociale rispetto alla formazione dei giovani'))                                      
            ->add('Q12d','boolean',array('required'=>false, 'label' => 'Possibilità di avere punti di vista innovativi'))                                                      
            ->add('Q12e','boolean',array('required'=>false, 'label' => 'Altri punti di forza:',
                    'help' => '<font color="black"><strong><br>[Q13]Punti di debolezza degli Stage/Tirocini</strong></font>'))                                                      
                

            ->add('Q13a',null,array('required'=>false, 'label' => 'Difficoltà a trovare personale per seguire l\'allievo'))    
            ->add('Q13b',null,array('required'=>false, 'label' => 'Costo relativo al personale che segue l\'allievo'))                        
            ->add('Q13c',null,array('required'=>false, 'label' => 'Scarsa motivazione riscontrata negli allievi'))                                      
            ->add('Q13d',null,array('required'=>false, 'label' => 'Scarse capacità tecnico professionali da parte degli allievi'))                                                      
            ->add('Q13e',null,array('required'=>false, 'label' => 'Difficoltà a rispettare tempi, ruoli, disposizioni e procedure da parte degli allievi'))                                                                      
            ->add('Q13f',null,array('required'=>false, 'label' => 'Altri punti di debolezza:',
                    'help' => '<font color="black"><strong><br>[Q14] Come si sono articolate le precedenti esperienze di Stage/Tirocinio</strong></font>'))                                                      
                
            ->add('Q14a',null,array('required'=>false, 'label' => 'Inserimento in un\'unica tipologia di attività'))                                                      
            ->add('Q14b',null,array('required'=>false, 'label' => 'Coinvolgimento su varie tipologie di attività'))                                                                      
            ->add('Q14c',null,array('required'=>false, 'label' => 'Altro:'))
                
            ->add('Q15', 'choice', array('label' => 'La preparazione dello stage da parte del tutor scolastico è stata:', 
                'choices' => array('-' => '-', 'Insufficiente' => 'Insufficiente', 'Appena sufficiente' => 'Appena sufficiente',
                    'Buona' => 'Buona', 'Ottima' => 'Ottima')))
                
            ->add('Q16',null,array('required'=>false, 'label' => 'Quali ulteriori competenze ritiene debbano essere sviluppate nel contesto scolastico:'))                
            ->end()  
                
            ->with('Informazioni sul questionario di raccolta dei dati')
                
            ->add('dataquestionario','date',array('attr'=>array('data-sonata-select2'=>'false'), 'label' => 'Data di somministrazione del questionario di raccolta dati','attr'=>array('data-sonata-select2'=>'false')))  
                
            ->add('somministratore','sonata_type_model',array('label' => 'Somministratore del questionario di raccolta dati', 'btn_add' => 'Aggiungi un nuovo somministratore'))
            //->add('dataquestionario','date',array('field_type' => 'sonata_type_date_range' , 'field_options'=> array('widget' => 'single_text', 'required' => false, 'attr' => array('class' => 'datepicker'))))
            ->end();                
        

    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Anagrafica azienda')    
            ->add('denominazione',null,array('label' => 'Nome dell\'azienda'))
            ->add('partitaiva',null,array('label' => 'Partita IVA'))
            ->add('codicefiscale',null,array('label' => 'Codice fiscale'))
            ->add('numerodirigenti',null,array('label' => 'Numero di dirigenti'))
            ->add('numeroimpiegati',null,array('label' => 'Numero di impiegati'))
            ->add('numerooperai',null,array('label' => 'Numero di operai'))
            ->add('numeroaltridipendenti',null,array('label' => 'Numero di altri dipendenti'))
            ->add('sito',null,array('label' => 'Sito dell\'azienda'))
            ->end()
            ->with('Sedi dell\'azienda')
            ->add('sede', 'sonata_type_collection', 
                array('label'=>'Elenco sedi','by_reference' => false, 'type_options' => array('delete' => false),
                    'btn_add' => 'Aggiungi una sede', ), 
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.sedegrid'))
            ->end()
                
            ->with('Personale dell\'azienda')
            ->add('personale', 'sonata_type_collection', 
                array('label'=>'Elenco personale', 'by_reference' => false, 'type_options' => array('delete' => false),
                   'btn_add' => 'Aggiungi personale', ), 
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.personalegrid'))

            ->end()
                    
            ->with('Disponibilità per aree e figure professionali')  
                    
            ->add('disponibilitaarea', 'sonata_type_collection', 
                array('label'=>'[Q2] Aree professionali per cui si rende disponibile','by_reference' => false, 'type_options' => array('delete' => false),
                   'btn_add' => 'Aggiungi una disponibilità', 
                    'help'=>'<font color="red"><strong><br>ATTENZIONE! <br>Per specificare le conoscenze che devono possedere le figure professionali [Q5] si acceda, dopo averle create, alla sezione "Disponibilità per figure professionali"</strong></font>'), 
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.disponibilitaareagrid'))

  
           
           ->add('disponibilitafigure', 'sonata_type_collection', 
                array('label'=>'[Q3-Q4-Q6-Q7] Figure professionali per cui si rende disponibile','by_reference' => false, 'type_options' => array('delete' => false),
                   'btn_add' => 'Aggiungi una figura professionale'), 
                    
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.disponibilitafiguregrid'))
           
                
            ->end()        
            ->with('Informazioni alternanza Scuola-Lavoro')    
            ->add('disponibile','checkbox',array('required'=>false, 'label' => ' [Q1] Disponibile ad attivare percorsi di alternanza Scuola-Lavoro?'
                ,'help' => '<font color="black"><strong><br>[Q8] Stage per soggetti disabili</strong></font>'))

            ->add('Q8a','checkbox',array('required'=>false, 'label' => 'Ci sono opportunità? '))
            ->add('Q8b',null,array('required'=>false, 'label' => 'Eventuali caratteristiche:'
                ,'help' => '<font color="black"><strong><br>[Q9] In quali delle seguenti attività di alternanza è stata precedentemente coinvolta:</strong></font>'))
            
            ->add('Q9a','checkbox',array('required'=>false, 'label' => 'Stage formativo'))
            ->add('Q9b','checkbox',array('required'=>false, 'label' => 'Visita aziendale'))              
            ->add('Q9c','checkbox',array('required'=>false, 'label' => 'Testimonianza aziendale'))                                
            ->add('Q9d',null,array('required'=>false, 'label' => 'Altro:'))                                                
                
            ->add('Q10',null,array('required'=>false, 'label' => '[Q10] Migliorie segnalate all\'organizzazione dell\'alternanza in base alle esperienze passate'))                                
                
            ->add('Q11',null,array('required'=>false, 'label' => '[Q11] Disponibile a condividere l\'esperienza attraverso Testimonianze aziendali',
                'help' => '<font color="black"><strong><br>[Q12] Punti di forza degli Stage/Tirocini</strong></font>'))                                
                
            ->add('Q12a',null,array('required'=>false, 'label' => 'Possibilità di conoscere giovani da poter inserire in azienda'))    
            ->add('Q12b',null,array('required'=>false, 'label' => 'Possibilità di poter avere un efficace aiuto in azienda'))                        
            ->add('Q12c',null,array('required'=>false, 'label' => 'Assunzione di responsabilità sociale rispetto alla formazione dei giovani'))                                      
            ->add('Q12d',null,array('required'=>false, 'label' => 'Possibilità di avere punti di vista innovativi'))                                                      
            ->add('Q12e',null,array('required'=>false, 'label' => 'Altri punti di forza:',
                    'help' => '<font color="black"><strong><br>[Q13]Punti di debolezza degli Stage/Tirocini</strong></font>'))                                                      
                

            ->add('Q13a',null,array('required'=>false, 'label' => 'Difficoltà a trovare personale per seguire l\'allievo'))    
            ->add('Q13b',null,array('required'=>false, 'label' => 'Costo relativo al personale che segue l\'allievo'))                        
            ->add('Q13c',null,array('required'=>false, 'label' => 'Scarsa motivazione riscontrata negli allievi'))                                      
            ->add('Q13d',null,array('required'=>false, 'label' => 'Scarse capacità tecnico professionali da parte degli allievi'))                                                      
            ->add('Q13e',null,array('required'=>false, 'label' => 'Difficoltà a rispettare tempi, ruoli, disposizioni e procedure da parte degli allievi'))                                                                      
            ->add('Q13f',null,array('required'=>false, 'label' => 'Altri punti di debolezza:',
                    'help' => '<font color="black"><strong><br>[Q14] Come si sono articolate le precedenti esperienze di Stage/Tirocinio</strong></font>'))                                                      
                
            ->add('Q14a',null,array('required'=>false, 'label' => 'Inserimento in un\'unica tipologia di attività'))                                                      
            ->add('Q14b',null,array('required'=>false, 'label' => 'Coinvolgimento su varie tipologie di attività'))                                                                      
            ->add('Q14c',null,array('required'=>false, 'label' => 'Altro:'))
                
            ->add('Q15', 'choice', array('label' => '[Q15] La preparazione dello stage da parte del tutor scolastico è stata:', 
                'choices' => array('-' => '-','Insufficiente' => 'Insufficiente', 'Appena sufficiente' => 'Appena sufficiente',
                    'Buona' => 'Buona', 'Ottima' => 'Ottima')))
                
            ->add('Q16',null,array('required'=>false, 'label' => '[Q16] Quali ulteriori competenze ritiene debbano essere sviluppate nel contesto scolastico:'))                
            ->end()  
                
            ->with('Informazioni sul questionario di raccolta dei dati')
                
            ->add('dataquestionario',null,array('attr'=>array('data-sonata-select2'=>'false'), 'label' => 'Data di somministrazione del questionario di raccolta dati','attr'=>array('data-sonata-select2'=>'false')))  
                
            ->add('somministratore','sonata_type_model',array('label' => 'Somministratore del questionario di raccolta dati', 'btn_add' => 'Aggiungi un nuovo somministratore'))
            //->add('dataquestionario','date',array('field_type' => 'sonata_type_date_range' , 'field_options'=> array('widget' => 'single_text', 'required' => false, 'attr' => array('class' => 'datepicker'))))
            ->end()
        
                    
            ;
                    
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            // ->add('id')                
            ->add('denominazione',null,array('label' => 'Nome azienda:'))
            //->add('partitaiva',null,array('label' => 'Partita IVA'))
            //->add('codicefiscale',null,array('label' => 'Codice fiscale'))
            //->add('numerodirigenti',null,array('label' => 'Numero dirigenti'))
            //->add('numeroimpiegati',null,array('label' => 'Numero impiegati'))
            //->add('numerooperai',null,array('label' => 'Numero operai'))
            //->add('numeroaltridipendenti',null,array('label' => 'Numero altri dipendenti'))
            //->add('sito',null,array('label' => 'Sito azienda'))
            ->add('disponibile',null,array('label' => 'Disponibile:'))
                
            ->add('disponibilitaarea.area', null,  array('label'=>'Disponibile per area professionale:'))                
            ->add('sede.comune',null, array('label'=>'Ha sedi nel comune:'))               
            ->add('sede.comune.provincia',null, array('label'=>'Ha sedi nella provincia:'))                               
            ->add('disponibilitafigure.indirizzo',null, array('label'=>'Disponibile per indirizzo di studi:'))                                               
            ->add('disponibilitafigure.indirizzo.scuola',null, array('label'=>'Disponibile per scuola:'))    
            ->add('disponibilitafigure.tempopermanenza',null,array('label'=>'Disponibile per tempo di permanenza:'))
            //->add('disponibilitafigure.disponibilegennaio',null,array('label'=>'Disponibile per gennaio:'))                
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->add('denominazione',null,array('label' => 'Nome azienda'))
            ->add('partitaiva',null,array('label' => 'Partita IVA'))
            ->add('codicefiscale',null,array('label' => 'Codice fiscale'))
            //->add('numerodirigenti',null,array('label' => 'Numero dirigenti'))
            //->add('numeroimpiegati',null,array('label' => 'Numero impiegati'))
            //->add('numerooperai',null,array('label' => 'Numero operai'))
            //->add('numeroaltridipendenti',null,array('label' => 'Numero altri dipendenti'))
            //->add('sito',null,array('label' => 'Sito azienda'))
            ->add('disponibile',null,array('label' => 'Disponibile'))
            //->add('sede', 'null', ['route' => array('name' => 'show'), 'label' => 'Sedi',  'admin_code' => 'sonata.admin.sede'])
            //->add('disponibilitaarea', null,  array('label'=>'Aree professionali'))  
            ->add('_action', 'actions', array('label' => 'Azioni possibili',
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))
        ;
    }
}