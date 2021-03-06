<?php

namespace Odiseo\SyliusReportPlugin\Form\Type\DataFetcher;

use Odiseo\SyliusReportPlugin\DataFetcher\TimePeriod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class TimePeriodType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start', DateType::class, [
                'label' => 'odiseo_sylius_report.form.time_period.start',
                'years' => range(date('Y') - 100, date('Y')),
            ])
            ->add('end', DateType::class, [
                'label' => 'odiseo_sylius_report.form.time_period.end',
                'years' => range(date('Y') - 100, date('Y')),
            ])
            ->add('period', ChoiceType::class, [
                'choices' => TimePeriod::getPeriodChoices(),
                'multiple' => false,
                'label' => 'odiseo_sylius_report.form.time_period.period',
            ])
            ->add('empty_records', CheckboxType::class, [
                'label' => 'odiseo_sylius_report.form.time_period.empty_records',
                'required' => false,
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'odiseo_sylius_report_data_fetcher_time_period';
    }
}
