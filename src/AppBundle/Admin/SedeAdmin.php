<?php
// src/AppBundle/Admin/PostAdmin.php
    
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