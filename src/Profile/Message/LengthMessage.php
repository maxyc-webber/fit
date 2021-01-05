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
 * LengthMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
#[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
#[Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TotalElapsedTime', 3, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalTimerTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalStrokes', 5, FitBaseType::UINT16, 1.0, 0.0, 'strokes', false, ProfileType::UINT16)]
#[Field('AvgSpeed', 6, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('SwimStroke', 7, FitBaseType::ENUM, 1.0, 0.0, 'swim_stroke', false, ProfileType::SWIMSTROKE)]
#[Field('AvgSwimmingCadence', 9, FitBaseType::UINT8, 1.0, 0.0, 'strokes/min', false, ProfileType::UINT8)]
#[Field('EventGroup', 10, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('LengthType', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LENGTHTYPE)]
#[Field('PlayerScore', 18, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('OpponentScore', 19, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('StrokeCount', 20, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('ZoneCount', 21, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
final class LengthMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Length', MessageNumber::Length);
    }

    /**
     * Gets the MessageIndex
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the Event
     */
    public function getEvent(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the EventType
     */
    public function getEventType(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the StartTime
     */
    public function getStartTime(): ?DateTime
    {
        return $this->getValue(2);
    }

    /**
     * Gets the TotalElapsedTime
     */
    public function getTotalElapsedTime(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the TotalTimerTime
     */
    public function getTotalTimerTime(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the TotalStrokes
     */
    public function getTotalStrokes(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the AvgSpeed
     */
    public function getAvgSpeed(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the SwimStroke
     */
    public function getSwimStroke(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the AvgSwimmingCadence
     */
    public function getAvgSwimmingCadence(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the EventGroup
     */
    public function getEventGroup(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the TotalCalories
     */
    public function getTotalCalories(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the LengthType
     */
    public function getLengthType(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the PlayerScore
     */
    public function getPlayerScore(): ?int
    {
        return $this->getValue(18);
    }

    /**
     * Gets the OpponentScore
     */
    public function getOpponentScore(): ?int
    {
        return $this->getValue(19);
    }

    /**
     * Gets the StrokeCount
     */
    public function getStrokeCount(): ?int
    {
        return $this->getValue(20);
    }

    /**
     * Gets the ZoneCount
     */
    public function getZoneCount(): ?int
    {
        return $this->getValue(21);
    }
}
