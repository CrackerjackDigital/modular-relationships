<?php
namespace Modular\Relationships;

use SS_List;

/**
 * @method SS_List Links
 */
class HasLinks extends HasMany {
	const Name = 'Links';
	const Schema = 'Modular\Models\InternalOrExternalLink';
	const GridFieldConfigName = 'Modular\GridField\HasLinksGridFieldConfig';

}