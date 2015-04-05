<?php
// src/AppBundle/Admin/SedeGridAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
  
class SedeGridAdmin extends Admin
{
    protected $baseRouteName = 'sedegridadmin';

    protected $baseRoutePattern = 'Sede-Grid-Admin';        
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('denominazione',null,array('label' => 'Nome sede'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
            ->add('comune', 'sonata_type_model',array(
            'property' => 'nome',
            'label' => 'Comune',
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
            ->add('denominazione',null,array('label' => 'Nome sede'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
            ->add('comune',null,array('label' => 'Comune'))
            ->add('azienda', null, array('label' => 'Azienda'))                   
            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->addIdentifier('denominazione',null,array('label' => 'Nome sede'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
            ->add('comune.nome',null,array('label' => 'Comune'))
            ->add('azienda', null, array('label' => 'Azienda'))                   
            
        ;
    }
}