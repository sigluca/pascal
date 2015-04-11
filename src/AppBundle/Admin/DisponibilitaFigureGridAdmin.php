<?php
// src/AppBundle/Admin/DisponibilitaFigureGridAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class DisponibilitaFigureGridAdmin extends Admin
{
    protected $baseRouteName = 'disponibilitafiguregridadmin';

    protected $baseRoutePattern = 'Disponibilita-Figure-Grid-Admin';            
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
             ->add('indirizzo',null,array('label' => 'Indirizzo scolastico dell\'allievo','property' => 'labelcomposta'),
                    array('admin_code' => 'sonata.admin.indirizzo'))     
                
            ->add('mansioniallievo',null,array('label' => 'Mansioni'))
                
            //->add('richiestaconoscenza', 'sonata_type_collection', 
            //    array('label'=>'Conoscenze richieste', 'by_reference' => false, 'type_options' => array('delete' => false),
            //       'btn_add' => false, ), 
            //    array('edit' => 'inline', 'inline' => 'table', 'admin_code' => 'sonata.admin.richiestaconoscenzagrid'))

            ->add('tempopermanenza',null,array('label' => 'Tempo'))
            ->add('disponibilegennaio','checkbox',array('required'=>false, 'label' => 'GEN'))               
            ->add('disponibilefebbraio','checkbox',array('required'=>false, 'label' => 'FEB'))                
            ->add('disponibilemarzo','checkbox',array('required'=>false, 'label' => 'MAR'))                
            ->add('disponibileaprile','checkbox',array('required'=>false, 'label' => 'APR'))                
            ->add('disponibilemaggio','checkbox',array('required'=>false, 'label' => 'MAG'))                
            ->add('disponibilegiugno','checkbox',array('required'=>false, 'label' => 'GIU'))                
            ->add('disponibileluglio','checkbox',array('required'=>false, 'label' => 'LUG'))                
            ->add('disponibileagosto','checkbox',array('required'=>false, 'label' => 'AGO'))                
            ->add('disponibilesettembre','checkbox',array('required'=>false, 'label' => 'SET'))                
            ->add('disponibileottobre','checkbox',array('required'=>false, 'label' => 'OTT'))                
            ->add('disponibilenovembre','checkbox',array('required'=>false, 'label' => 'NOV'))                
            ->add('disponibiledicembre','checkbox',array('required'=>false, 'label' => 'DIC'))                
                    
            ;
                    
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            // ->add('id')                
             ->add('mansioniallievo',null,array('label' => 'Mansioni dell\'allievo'))
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
            ->add('tempopermanenza',null,array('label' => 'Tempo di permanenza'))
            
                                 
               
            
                    
                    
            ;
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
             ->addIdentifier('mansioniallievo',null,array('label' => 'Mansioni dell\'allievo'))
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
            ->add('tempopermanenza',null,array('label' => 'Tempo di permanenza'))
            
                                 
            
        ;
    }
}