<?php
// src/AppBundle/Admin/PersonaleGridAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PersonaleGridAdmin extends Admin
{
    protected $baseRouteName = 'personalegridadmin';

    protected $baseRoutePattern = 'Personale-Grid-Admin';    
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nome',null,array('label' => 'Nome'))
            ->add('cognome',null,array('label' => 'Cognome'))
            ->add('funzione',null,array('label' => 'Funzione'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
            ->add('email',null,array('label' => 'E-mail'))
           ->add('svoltocorso','checkbox',array('required'=>false, 'label' => 'Svolto corsi'))
            ->add('disponibilecorso','checkbox',array('required'=>false, 'label' => 'Disponibile corsi'))
              ->add('tipologia', 'sonata_type_model',array(
            'property' => 'descrizione',
            'label' => 'Tipologia',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'btn_add' => false))
            
                
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            // ->add('id')                
            ->add('nome',null,array('label' => 'Nome'))
            ->add('cognome',null,array('label' => 'Cognome'))
            ->add('funzione',null,array('label' => 'Funzione'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
            ->add('email',null,array('label' => 'E-mail'))
            ->add('svoltocorso',null,array('label' => 'Svolto corsi'))
            ->add('disponibilecorso',null,array('label' => 'Disponibile corsi'))
            ->add('tipologia', null, array('label' => 'Tipologia'))
            ->add('azienda', null, array('label' => 'Azienda'));   

    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
           ->addIdentifier('nome',null,array('label' => 'Nome'))
            ->addIdentifier('cognome',null,array('label' => 'Cognome'))
            ->add('funzione',null,array('label' => 'Funzione'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
            ->add('email',null,array('label' => 'E-mail'))
            ->add('svoltocorso',null,array('label' => 'Svolto corsi'))
            ->add('disponibilecorso',null,array('label' => 'Disponibile corsi'))
            ->add('tipologia.descrizione', null, array('label' => 'Tipologia'))
            ->add('azienda', null, array('label' => 'Azienda'));   

        ;
    }
}
