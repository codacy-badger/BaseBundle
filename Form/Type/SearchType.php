<?php

namespace Kronhyx\BaseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class SearchType
 * @package Kronhyx\BaseBundle\Form\Type
 */
class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('word', TextType::class, [
                'label' => 'kronhyx.base.search.label',
                'attr' => [
                    'placeholder' => 'kronhyx.base.label.placeholder'
                ]
            ]);
    }


}