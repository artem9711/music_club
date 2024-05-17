<?php

declare(strict_types=1);

namespace App\Enums\Dance;

enum Hand: string
{
    case LEFT = 'left';
    case RIGHT = 'right';
    case BOTH = 'both';
    case BEND = 'bend';
    case CIRCLE = 'circle';
    case SMOOTHNESS = 'smoothness';


    public function getTitle(): string
    {
        return match($this) {
            Hand::LEFT => 'движение левой рукой',
            Hand::RIGHT => 'движение правой рукой',
            Hand::BOTH => 'движение обоими руками',
            Hand::BEND => 'руки согнуты в локтях',
            Hand::CIRCLE => 'Круговые движения руками',
            Hand::SMOOTHNESS => 'Плавные движения руками',
        };
    }
}
