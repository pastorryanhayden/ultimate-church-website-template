<?php

namespace App\Console\Commands;

use App\Models\Sermon;
use Illuminate\Console\Command;

class PrefixMp3Urls extends Command
{
    protected $signature = 'sermons:prefix-mp3';

    protected $description = 'Prefix mp3/ to all sermon mp3 URLs';

    public function handle()
    {
        $this->info('Starting to update sermon MP3 URLs...');

        $count = Sermon::count();
        $bar = $this->output->createProgressBar($count);

        Sermon::chunk(100, function ($sermons) use ($bar) {
            foreach ($sermons as $sermon) {
                if ($sermon->mp3 && ! str_starts_with($sermon->mp3, 'mp3/')) {
                    $sermon->mp3 = 'mp3/'.$sermon->mp3;
                    $sermon->save();
                }
                $bar->advance();
            }
        });

        $bar->finish();
        $this->newLine();
        $this->info('All sermon MP3 URLs have been updated successfully!');
    }
}
