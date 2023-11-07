<?php

namespace App\Form\Type;

use App\Entity\ServiceImage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ServiceImageType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $builder->add('file', VichImageType::class, [
            'label' => 'Image',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver):void
    {
        $resolver->setDefaults([
            'data_class'=>ServiceImage::class
        ]);
    }
}