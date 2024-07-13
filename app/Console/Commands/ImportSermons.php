<?php

namespace App\Console\Commands;

use App\Models\Sermon;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use League\Csv\Reader;

class ImportSermons extends Command
{
    protected $signature = 'import:sermons';

    protected $description = 'Import Sermons from CSV';

    public function handle(): void
    {

        $csv = Reader::createFromPath(storage_path('input.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            $sermon = Sermon::create([
                'title' => $record['Title'],
                'slug' => Str::slug($record['Title']),
                'description' => $record['passage'],
                'date' => $record['Date'],
                'speaker_id' => $record['Speaker'],
                'series_id' => $record['Series'] ? $record['Series'] : 7,
                'service_id' => $record['service_type'],
                'mp3' => $record['mp3'],
                'manuscript' => 'n/a',
                // Add more fields as needed
            ]);

            if ($record['book_number'] != 0 && $record['chapter_number'] != 'NaN') {
                $sermon->chapter()->attach($record['chapter_number'], ['book_id' => $record['book_number']]);
            }
        }

        $this->info('Sermons imported successfully!');
    }
}
