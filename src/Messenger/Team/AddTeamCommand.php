<?php
namespace App\Messenger\Team;

class AddTeamCommand
{

    /**
     * @var string
     */
    private $name;

  /**
   * @var integer
   */
  private $captainID;


  public function __construct(string $name, int $captainID)
  {
      $this->name = $name;
      $this->captainID = $captainID;
  }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCaptainID(): int
    {
        return $this->captainID;
    }

}