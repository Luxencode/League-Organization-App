<?php

namespace App\Messenger\Match;

use App\Repository\MatchDayRepository;
use App\Repository\MatchRepository;
use App\Repository\TeamRepository;

class GenerateMatchesCommandHandler{

    /**
     * @var TeamRepository
     */
    private $teamRepository;
    /**
     * @var MatchRepository
     */
    private $matchRepository;
    /**
     * @var MatchDayRepository
     */
    private $matchDayRepository;

    public function __construct(TeamRepository $teamRepository, MatchRepository $matchRepository, MatchDayRepository $matchDayRepository){
        $this->teamRepository = $teamRepository;
        $this->matchRepository = $matchRepository;
        $this->matchDayRepository = $matchDayRepository;
    }

    public function __invoke(GenerateMatchesCommand $command):void{

    }
}