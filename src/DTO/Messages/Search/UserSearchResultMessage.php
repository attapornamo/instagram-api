<?php

namespace Instagram\SDK\DTO\Messages\Search;

use Instagram\SDK\DTO\General\User;

/**
 * Class UserSearchResultMessage
 *
 * @package Instagram\SDK\DTO\Messages\Search
 */
class UserSearchResultMessage extends SearchResultMessage
{

    /**
     * @var int
     * @name num_results
     */
    protected $numResults;

    /**
     * @var \Instagram\SDK\DTO\General\User[]
     */
    protected $users;

    /**
     * @return int
     */
    public function getNumResults(): int
    {
        return $this->numResults;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}