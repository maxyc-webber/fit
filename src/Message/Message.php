<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

use Stringable;

abstract class Message implements Stringable
{
    public $values = [];

    public function __construct(private string $name, private int $number)
    {
    }

    /**
     * Gets the message number, which must correspond
     * to one value defined in MessageInterface
     *
     * @return integer
     */
    public function getMessageNumber(): int {
        return $this->number;
    }

    /**
     * Gets the name of the message.
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    public function __toString() {
        $mapped = [];

        foreach ($this->values as $key => $fieldValue) {
            $mapped[] = $fieldValue['name'];
            if (is_array($fieldValue['value'])) {
                $singleValues = [];
                foreach ($fieldValue['value'] as $singeValue) {
                    $singleValues[] = $fieldValue['type']['invalid_value'] !== $singeValue ? $singeValue : '';
                }
                $mapped[] = sprintf('[%s]', join(",", $singleValues));
            }
            else {
                $mapped[] = $fieldValue['type']['invalid_value'] !== $fieldValue['value'] ? $fieldValue['value'] : '';
            }

            // $mapped[] = is_array($value) ? join("", $value) : $value;
        }
        return sprintf('%s: %s', $this->name, join(",", $mapped));
    }
}