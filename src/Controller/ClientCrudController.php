<?php

namespace App\Controller;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Client::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('firstName'),
            TextField::new('lastName'),
            AssociationField::new('user')

        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // the labels used to refer to this entity in titles, buttons, etc.
            ->setEntityLabelInSingular('Client')
            ->setEntityLabelInPlural('Clients')

            // the Symfony Security permission needed to manage the entity
            // (none by default, so you can manage all instances of the entity)
        //    ->setEntityPermission('ROLE_EDITOR')
            ;
    }

}
