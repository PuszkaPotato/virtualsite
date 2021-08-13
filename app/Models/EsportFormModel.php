<?php namespace App\Models;

use CodeIgniter\Model;

class EsportFormModel extends Model
{
    protected $table = 'forms_esport';

    protected $allowedFields = ['leader_name', 'leader_email', 'leader_uid', 'team_name', 'team_tag', 'team_facebook', 'team_website'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}