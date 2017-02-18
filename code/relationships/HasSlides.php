<?php
namespace Modular\Relationships;

class HasSlides extends HasMany {
	const Name    = 'Slides';
	const Schema    = 'Modular\Models\Slide';
	const GridFieldConfigName = 'Modular\GridField\GridFieldConfig';
}