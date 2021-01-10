<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Message;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\ProfileType;

/**
 * MesgCapabilitiesMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('File', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
#[Field('MesgNum', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
#[Field('CountType', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::MESGCOUNT)]
#[Field('Count', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
final class MesgCapabilitiesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MesgCapabilities', MessageNumber::MesgCapabilities);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the file
     */
    public function getFile(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the mesg num
     */
    public function getMesgNum(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the count type
     */
    public function getCountType(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the count
     */
    public function getCount(): int|array|null
    {
        return $this->getFieldValue(3);
    }
}
