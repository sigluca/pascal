<?php
// src/AppBundle/Admin/SedeAdmin.php
    
namespace AppBundle\Admin;
  
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
  
class SedeAdmin extends Admin
{
    protected $baseRouteName = 'sedeadmin';

    protected $baseRoutePattern = 'Sede-Admin';   
    
    
    protected function configureShowFields(ShowMapper $showMapper)
    {
        // Here we set the fields of the ShowMapper variable, $showMapper (but this can be called anything)
        
        
             $showMapper
            ->add('azienda')
            ->add('denominazione',null,array('label' => 'Nome sede'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
        ;

    }
    
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
             ->add('azienda', 'sonata_type_model',array(
            'property' => 'denominazione',
            'label' => 'Azienda',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'btn_add' => false))               
            //->add('comune',null,array('label' => 'Numero impiegati'))
            //->add('azienda',null,array('label' => 'Numero operai'))
            
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
            ->add('azienda',null,array('label' => 'Azienda'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    { 
        $listMapper
            ->add('denominazione',null,array('label' => 'Nome sede'))
            ->add('indirizzo',null,array('label' => 'Indirizzo'))
            ->add('telefono',null,array('label' => 'Telefono'))
            ->add('fax',null,array('label' => 'Fax'))
            ->add('comune.nome',null,array('label' => 'Comune'))
            ->add('azienda.denominazione',null,array('label' => 'Azienda'))
            ->add('_action', 'actions', array(
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array())))
        ;
    }
}