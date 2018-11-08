<?php

namespace App\Messenger\User;

use App\Repository\UserRepository;
use App\Repository\TeamRepository;

class SelectTeamCommandHandler{
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var TeamRepository
     */
    private $teamRepository;

    public function __construct(UserRepository $userRepository, TeamRepository $teamRepository){
        $this->userRepository = $userRepository;
        $this->teamRepository = $teamRepository;
    }

    public function __invoke(SelectTeamCommand $command):void {
        $user = $this->userRepository->find($command->getUser());
        $team = $this->teamRepository->find($command->getTeamName());

        $user->setTeam($team);
        $team->addPlayer($user);
    }
}