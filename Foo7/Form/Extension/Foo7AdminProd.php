<?php

namespace Plugin\Foo7\Form\Extension;

use Eccube\Form\Type\Admin\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

class Foo7AdminProd extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nickname', TextType::class, [
                'label' => 'ニックネーム',
                'required' => false,
                'attr' => [
                    'maxlength' => 32,
                    'placeholder' => 'アイスマン',
                ],
                'eccube_form_options' => [
                    'auto_render' => true,
                ],
                'constraints' => [
                    new Assert\Length(['max' => 32]),
                ],
        ]);
    }   

    public function getExtendedType()
    {
        return ProductType::class;
    }

}   


