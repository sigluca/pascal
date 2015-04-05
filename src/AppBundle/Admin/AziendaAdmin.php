<?php
// src/AppBundle/Admin/AziendaAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AziendaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('denominazione',null,array('label' => 'Nome dell\'azienda'))
            ->add('partitaiva',null,array('label' => 'Partita IVA'))
            ->add('codicefiscale',null,array('label' => 'Codice fiscale'))
            ->add('numerodirigenti',null,array('label' => 'Numero di dirigenti'))
            ->add('numeroimpiegati',null,array('label' => 'Numero di impiegati'))
            ->add('numerooperai',null,array('label' => 'Numero di operai'))
            ->add('numeroaltridipendenti',null,array('label' => 'Numero di altri dipendenti'))
            ->add('sito',null,array('label' => 'Sito dell\'azienda'))
            ->add('disponibile','checkbox',array('required'=>false, 'label' => 'Disponibile ad attivare percorsi di alternanza?'))
                
            ->add('personale', 'sonata_type_collection', 
                array('label'=>'Personale dell\'azienda', 'by_reference' => false, 'type_options' => array('delete' => false),
                   'btn_add' => 'Aggiungi personale', ), 
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.personalegrid'))
                    
                    
            ->add('sede', 'sonata_type_collection', 
                array('label'=>'Sedi dell\'azienda','by_reference' => false, 'type_options' => array('delete' => false),
                    'btn_add' => 'Aggiungi una sede', ), 
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.sedegrid'))
            

            ->add('darea', 'sonata_type_collection', 
                array('label'=>'Aree professionali per cui si rende disponibile','by_reference' => false, 'type_options' => array('delete' => false),
                   'btn_add' => 'Aggiungi una disponibilità', ), 
                array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.disponibilitaareegrid')
                    
                    
                    
            );
                    
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            // ->add('id')                
            ->add('denominazione',null,array('label' => 'Nome azienda'))
            ->add('partitaiva',null,array('label' => 'Partita IVA'))
            ->add('codicefiscale',null,array('label' => 'Codice fiscale'))
            ->add('numerodirigenti',null,array('label' => 'Numero dirigenti'))
            ->add('numeroimpiegati',null,array('label' => 'Numero impiegati'))
            ->add('numerooperai',null,array('label' => 'Numero operai'))
            ->add('numeroaltridipendenti',null,array('label' => 'Numero altri dipendenti'))
            ->add('sito',null,array('label' => 'Sito azienda'))
            ->add('disponibile',null,array('label' => 'Disponibile'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->addIdentifier('denominazione',null,array('label' => 'Nome azienda'))
            ->add('partitaiva',null,array('label' => 'Partita IVA'))
            ->add('codicefiscale',null,array('label' => 'Codice fiscale'))
            ->add('numerodirigenti',null,array('label' => 'Numero dirigenti'))
            ->add('numeroimpiegati',null,array('label' => 'Numero impiegati'))
            ->add('numerooperai',null,array('label' => 'Numero operai'))
            ->add('numeroaltridipendenti',null,array('label' => 'Numero altri dipendenti'))
            ->add('sito',null,array('label' => 'Sito azienda'))
            ->add('disponibile',null,array('label' => 'Disponibile'))
        ;
    }
}