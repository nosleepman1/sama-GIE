<?php

namespace App\Events;

use App\Models\Gie;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateGIE
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */

    public gie $gie;

    public function __construct(gie $gie)
    {
        $this->gie = $gie;
    }


}
