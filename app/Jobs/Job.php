<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;

abstract class Job
{
    /*
    |--------------------------------------------------------------------------
    | Queueable Jobs
    |--------------------------------------------------------------------------
    |
    | This job base class provides a central location to place any logic that
    | is shared across all of your jobs. The trait included with the class
<<<<<<< HEAD
    | provides access to the "queueOn" and "delay" queue helper methods.
=======
    | provides access to the "onQueue" and "delay" queue helper methods.
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
    |
    */

    use Queueable;
}
