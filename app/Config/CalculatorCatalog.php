<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Presentation metadata only. Add calculator routes and logic separately.
 * Set a card's route to its relative application path once implemented.
 */
class CalculatorCatalog extends BaseConfig
{
    public array $categories = [
        'financial' => ['name' => 'Financial Calculators', 'icon' => '$', 'description' => 'Plan savings, explore interest, and understand borrowing.'],
        'math' => ['name' => 'Math Calculators', 'icon' => '%', 'description' => 'Make everyday numbers, percentages, and fractions simpler.'],
        'health' => ['name' => 'Health Calculators', 'icon' => '+', 'description' => 'Explore common health and wellbeing measurements.'],
        'date-time' => ['name' => 'Date & Time Calculators', 'icon' => '◷', 'description' => 'Work with ages, dates, and the time between events.'],
    ];

    public array $calculators = [
        ['slug' => 'emi', 'name' => 'EMI Calculator', 'description' => 'Estimate monthly loan payments from an amount, rate, and term.', 'category' => 'financial', 'icon' => '$', 'popular' => true, 'recent' => false, 'route' => null],
        ['slug' => 'percentage', 'name' => 'Percentage Calculator', 'description' => 'Find percentages, percentage changes, and everyday proportions.', 'category' => 'math', 'icon' => '%', 'popular' => true, 'recent' => false, 'route' => null],
        ['slug' => 'bmi', 'name' => 'BMI Calculator', 'description' => 'Explore the relationship between height and body weight.', 'category' => 'health', 'icon' => '+', 'popular' => true, 'recent' => false, 'route' => null],
        ['slug' => 'age', 'name' => 'Age Calculator', 'description' => 'Find the time between a birth date and a selected date.', 'category' => 'date-time', 'icon' => '◷', 'popular' => true, 'recent' => false, 'route' => null],
        ['slug' => 'compound-interest', 'name' => 'Compound Interest Calculator', 'description' => 'Explore how savings could grow with interest over time.', 'category' => 'financial', 'icon' => '$', 'popular' => false, 'recent' => true, 'route' => null],
        ['slug' => 'fraction', 'name' => 'Fraction Calculator', 'description' => 'Work with fractions and understand their simplified forms.', 'category' => 'math', 'icon' => '½', 'popular' => false, 'recent' => true, 'route' => null],
        ['slug' => 'date-difference', 'name' => 'Date Difference Calculator', 'description' => 'Count the days between two dates for everyday planning.', 'category' => 'date-time', 'icon' => '◷', 'popular' => false, 'recent' => true, 'route' => null],
        ['slug' => 'bmr', 'name' => 'BMR Calculator', 'description' => 'Explore an estimate of the energy your body uses at rest.', 'category' => 'health', 'icon' => '+', 'popular' => false, 'recent' => false, 'route' => null],
    ];
}

