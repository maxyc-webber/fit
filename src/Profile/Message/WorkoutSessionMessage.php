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
 * WorkoutSessionMessage message
 */
final class WorkoutSessionMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

    #[Field('NumValidSteps', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $numValidSteps;

    #[Field('FirstStepIndex', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $firstStepIndex;

    #[Field('PoolLength', 4, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $poolLength;

    #[Field('PoolLengthUnit', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $poolLengthUnit;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WorkoutSession", MessageNumber::WorkoutSession);
    }
}
