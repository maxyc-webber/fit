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
 * MonitoringInfoMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('LocalTimestamp', 0, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::LOCALDATETIME)]
#[Field('ActivityType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
#[Field('CyclesToDistance', 3, FitBaseType::UINT16, 5000.0, 0.0, 'm/cycle', false, ProfileType::UINT16)]
#[Field('CyclesToCalories', 4, FitBaseType::UINT16, 5000.0, 0.0, 'kcal/cycle', false, ProfileType::UINT16)]
#[Field('RestingMetabolicRate', 5, FitBaseType::UINT16, 1.0, 0.0, 'kcal / day', false, ProfileType::UINT16)]
final class MonitoringInfoMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MonitoringInfo', MessageNumber::MonitoringInfo);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the LocalTimestamp
     */
    public function getLocalTimestamp(): ?DateTime
    {
        return $this->getValue(0);
    }

    /**
     * Gets the ActivityType
     */
    public function getActivityType(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the CyclesToDistance
     */
    public function getCyclesToDistance(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the CyclesToCalories
     */
    public function getCyclesToCalories(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the RestingMetabolicRate
     */
    public function getRestingMetabolicRate(): ?int
    {
        return $this->getValue(5);
    }
}
