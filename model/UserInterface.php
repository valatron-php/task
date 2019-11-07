<?php declare(strict_types=1);

namespace Valatron\Php;

use DateTime;

/**
 * Interface UserInterface
 * @package Valatron\Php
 */
interface UserInterface
{
    /**
     * Returns User id
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Returns DateTime object of when user was created
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime;

    /**
     * Returns user role
     *
     * @return RoleInterface
     */
    public function getRole(): RoleInterface;
}