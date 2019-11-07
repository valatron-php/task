<?php declare(strict_types=1);

namespace Valatron\Php;

/**
 * Interface RoleInterface
 * @package Valatron\Php
 */
interface RoleInterface
{
    /**
     * Returns role id
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Returns array of users with this role
     *
     * @return array|null
     */
    public function getUsers(): ?array;
}