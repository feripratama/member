<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Demo Config
    |--------------------------------------------------------------------------
    |
    | The following config lines are used for development of package
    | Bantenprov/Member
    |
    */

    'key' => 'value',
    'models' => [
        'user' => 'App\User',
        'project' => 'Bantenprov\Project\Models\Project',
        'staf' => 'Bantenprov\Staf\Models\Staf',
        'member' => 'Bantenprov\Member\Models\Member',
        'task' => 'Bantenprov\Task\Models\Task',
        'tasks' => new Bantenprov\Task\Models\Task,
        'users' => new App\User,
        'stafs' => new Bantenprov\Staf\Models\Staf,
    ]

];
