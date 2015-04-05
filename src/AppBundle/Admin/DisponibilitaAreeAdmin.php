<?php
// src/AppBundle/Admin/DisponibilitaAreeAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
  
class DisponibilitaAreeAdmin extends Admin
{
    protected $baseRouteName = 'disponibilitaareeadmin';

    protected $baseRoutePattern = 'Disponibilita-Aree-Admin';        
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('area', 'sonata_type_model',array(
            'property' => 'descrizione',
            'label' => 'Area professionale',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'btn_add' => false))
            ->add('note', null, array('label'=>'Note'))
            ->add('azienda', 'sonata_type_model',array(
            'property' => 'denominazione',
            'label' => 'Azienda',
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
            ->add('area',null,array('label' => 'Area professionale'))
            ->add('note',null,array('label' => 'Note'))
            ->add('azienda',null,array('label' => 'Azienda'))                
            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->addIdentifier('area',null,array('label' => 'Area professionale'))
            ->add('note',null,array('label' => 'Note'))
            ->add('azienda',null,array('label' => 'Azienda'))                                
                             
            
        ;
    }
}