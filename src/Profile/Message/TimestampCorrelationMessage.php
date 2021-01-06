<?php

/**
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace FIT\Profile\Message;

use DateTime;
use FIT\FitBaseType;
use FIT\Profile\Field;
use FIT\Profile\Message;
use FIT\Profile\MessageNumber;
use FIT\Profile\ProfileType;

/**
 * TimestampCorrelationMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('SystemTimestamp', 1, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('FractionalSystemTimestamp', 2, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('LocalTimestamp', 3, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::LOCALDATETIME)]
#[Field('TimestampMs', 4, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SystemTimestampMs', 5, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
final class TimestampCorrelationMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('TimestampCorrelation', MessageNumber::TimestampCorrelation);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the fractional timestamp
     */
    public function getFractionalTimestamp(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the system timestamp
     */
    public function getSystemTimestamp(): ?DateTime
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the fractional system timestamp
     */
    public function getFractionalSystemTimestamp(): ?int
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the local timestamp
     */
    public function getLocalTimestamp(): ?DateTime
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): ?int
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the system timestamp ms
     */
    public function getSystemTimestampMs(): ?int
    {
        return $this->getFieldValue(5);
    }
}