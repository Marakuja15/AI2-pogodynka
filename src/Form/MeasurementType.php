<?php

namespace App\Form;

use App\Entity\Location;
use App\Entity\Measurement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
class MeasurementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('location', EntityType::class, [
                'class' => Location::class,
                'choice_label' => 'city',
            ])
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'input' => 'datetime_immutable',
            ])
            ->add('temperatureC', NumberType::class)
            ->add('feelsLikeC', NumberType::class, ['required' => false])
            ->add('pressureHpa', IntegerType::class, ['required' => false])
            ->add('humidityPercent', IntegerType::class, ['required' => false])
            ->add('windSpeedMs', NumberType::class, ['required' => false])
            ->add('windDirectionDeg', IntegerType::class, ['required' => false])
            ->add('precipitationMn', NumberType::class, ['required' => false])
            ->add('cloudCoverPercent', IntegerType::class, ['required' => false])
            ->add('description')
            ->add('source');

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Measurement::class,
        ]);
    }
}
