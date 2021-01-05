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
 * MonitoringMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('DeviceIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
#[Field('Calories', 1, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('Distance', 2, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Cycles', 3, FitBaseType::UINT32, 2.0, 0.0, 'cycles', false, ProfileType::UINT32)]
#[Field('ActiveTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('ActivityType', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
#[Field('ActivitySubtype', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYSUBTYPE)]
#[Field('ActivityLevel', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYLEVEL)]
#[Field('Distance16', 8, FitBaseType::UINT16, 1.0, 0.0, '100 * m', false, ProfileType::UINT16)]
#[Field('Cycles16', 9, FitBaseType::UINT16, 1.0, 0.0, '2 * cycles (steps)', false, ProfileType::UINT16)]
#[Field('ActiveTime16', 10, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('LocalTimestamp', 11, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
#[Field('Temperature', 12, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
#[Field('TemperatureMin', 14, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
#[Field('TemperatureMax', 15, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
#[Field('ActivityTime', 16, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
#[Field('ActiveCalories', 19, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('CurrentActivityTypeIntensity', 24, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('TimestampMin8', 25, FitBaseType::UINT8, 1.0, 0.0, 'min', false, ProfileType::UINT8)]
#[Field('Timestamp16', 26, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('HeartRate', 27, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('Intensity', 28, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DurationMin', 29, FitBaseType::UINT16, 1.0, 0.0, 'min', false, ProfileType::UINT16)]
#[Field('Duration', 30, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('Ascent', 31, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Descent', 32, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('ModerateActivityMinutes', 33, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
#[Field('VigorousActivityMinutes', 34, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
final class MonitoringMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Monitoring', MessageNumber::Monitoring);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the DeviceIndex
     */
    public function getDeviceIndex(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Calories
     */
    public function getCalories(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Distance
     */
    public function getDistance(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the Cycles
     */
    public function getCycles(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the ActiveTime
     */
    public function getActiveTime(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the ActivityType
     */
    public function getActivityType(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the ActivitySubtype
     */
    public function getActivitySubtype(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the ActivityLevel
     */
    public function getActivityLevel(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the Distance16
     */
    public function getDistance16(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the Cycles16
     */
    public function getCycles16(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the ActiveTime16
     */
    public function getActiveTime16(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the LocalTimestamp
     */
    public function getLocalTimestamp(): ?DateTime
    {
        return $this->getValue(11);
    }

    /**
     * Gets the Temperature
     */
    public function getTemperature(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the TemperatureMin
     */
    public function getTemperatureMin(): ?int
    {
        return $this->getValue(14);
    }

    /**
     * Gets the TemperatureMax
     */
    public function getTemperatureMax(): ?int
    {
        return $this->getValue(15);
    }

    /**
     * Gets the ActivityTime
     */
    public function getActivityTime(): ?int
    {
        return $this->getValue(16);
    }

    /**
     * Gets the ActiveCalories
     */
    public function getActiveCalories(): ?int
    {
        return $this->getValue(19);
    }

    /**
     * Gets the CurrentActivityTypeIntensity
     */
    public function getCurrentActivityTypeIntensity(): ?int
    {
        return $this->getValue(24);
    }

    /**
     * Gets the TimestampMin8
     */
    public function getTimestampMin8(): ?int
    {
        return $this->getValue(25);
    }

    /**
     * Gets the Timestamp16
     */
    public function getTimestamp16(): ?int
    {
        return $this->getValue(26);
    }

    /**
     * Gets the HeartRate
     */
    public function getHeartRate(): ?int
    {
        return $this->getValue(27);
    }

    /**
     * Gets the Intensity
     */
    public function getIntensity(): ?int
    {
        return $this->getValue(28);
    }

    /**
     * Gets the DurationMin
     */
    public function getDurationMin(): ?int
    {
        return $this->getValue(29);
    }

    /**
     * Gets the Duration
     */
    public function getDuration(): ?int
    {
        return $this->getValue(30);
    }

    /**
     * Gets the Ascent
     */
    public function getAscent(): ?int
    {
        return $this->getValue(31);
    }

    /**
     * Gets the Descent
     */
    public function getDescent(): ?int
    {
        return $this->getValue(32);
    }

    /**
     * Gets the ModerateActivityMinutes
     */
    public function getModerateActivityMinutes(): ?int
    {
        return $this->getValue(33);
    }

    /**
     * Gets the VigorousActivityMinutes
     */
    public function getVigorousActivityMinutes(): ?int
    {
        return $this->getValue(34);
    }
}
