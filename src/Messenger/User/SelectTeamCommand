<?php
namespace App\Messenger\User;

class SelectTeamCommand{
    /**
     * @var integer
     */
    private $userId;
    /**
     * @var integer
     */
    private $teamId;

    public function __construct(int $userId, int $teamId){
        $this->userId = $userId;
        $this->teamId = $teamId;
    }

    /**
     * @return integer
     */
    public function getUser(): int
    {
        return $this->userId;
    }

    /**
     * @return integer
     */
    public function getTeamName(): int
    {
        return $this->teamId;
    }
}