<?php
// src/AppBundle/Admin/DisponibilitaAreaGridAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
  
class DisponibilitaAreaGridAdmin extends Admin
{
    protected $baseRouteName = 'disponibilitaareagridadmin';

    protected $baseRoutePattern = 'Disponibilita-Area-Grid-Admin';        
    
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
            ->add('note', null, array('label'=>'Note')
        );
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('area',null,array('label' => 'Area professionale'))
            ->add('note',null,array('label' => 'Note'))
            
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->addIdentifier('area',null,array('label' => 'Area professionale'))
            ->add('note',null,array('label' => 'Note'))
                             
            
        ;
    }
}