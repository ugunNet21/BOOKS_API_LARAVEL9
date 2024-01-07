<?php

namespace App\Listeners;

use App\Events\BukuDeleted;
use App\Models\Buku;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ResetBukuIdListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\BukuDeleted  $event
     * @return void
     */
    public function handle(BukuDeleted $event)
    {
        // Reset ID buku
        Buku::query()->update(['id' => \Illuminate\Support\Facades\DB::raw('id - 1')]);
        \Illuminate\Support\Facades\DB::statement('ALTER TABLE bukus AUTO_INCREMENT = 0');
    }
}
