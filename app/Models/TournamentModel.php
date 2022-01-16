<?php namespace App\Models;

use CodeIgniter\Model;

class TournamentModel extends Model
{
    public function __construct() {

    }
    protected $table = 'forms_tournament';

    protected $allowedFields = ['teamName', 'teamTag', 'teamFacebook', 'teamLeader', 'teamLogo', 'teamCoach', 'teamCoachSteam', 'teamPlayers', 'teamPlayersSteam', 'teamPlayersFaceit', 'teamJSON'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}