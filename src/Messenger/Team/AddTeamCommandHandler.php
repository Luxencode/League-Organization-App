<?php

namespace App\Messenger\Team;

use App\Entity\Team;
use App\Repository\TeamRepository;
use App\Repository\UserRepository;

class AddTeamCommandHandler {

    /**
     * @var TeamRepository
     */
    private $teamRepository;

    /**
     * @var UserRepository
     */
    private $userRepository;


    public function __construct(TeamRepository $teamRepository, UserRepository $userRepository)
    {
        $this->teamRepository = $teamRepository;
        $this->userRepository = $userRepository;
    }

    public function __invoke(AddTeamCommand $command) : Team
    {
        $team = new Team();
        $user = $this->userRepository->find($command->getCaptainID());

        $team->setName($command->getName());
        $team->setCaptain($user);
        $team->addPlayer($user);
        $this->teamRepository->add($team);

        return $team;
    }

}