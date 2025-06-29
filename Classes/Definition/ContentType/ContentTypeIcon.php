<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\ContentBlocks\Definition\ContentType;

/**
 * @internal Not part of TYPO3's public API.
 */
final class ContentTypeIcon
{
    public string $iconPath = '';
    public string $iconProvider = '';
    public string $iconIdentifier = '';
    public bool $initialized = false;

    public static function fromArray(array $array): ContentTypeIcon
    {
        $self = new self();
        $self->iconPath = $array['iconPath'] ?? '';
        $self->iconProvider = $array['iconProvider'] ?? '';
        $self->iconIdentifier = $array['iconIdentifier'] ?? '';
        if (($array['initialized'] ?? false) || ($self->iconPath !== '' && $self->iconIdentifier !== '')) {
            $self->initialized = true;
        }
        return $self;
    }

    public function toArray(): array
    {
        return [
            'iconPath' => $this->iconPath,
            'iconProvider' => $this->iconProvider,
            'iconIdentifier' => $this->iconIdentifier,
            'initialized' => $this->initialized,
        ];
    }
}
