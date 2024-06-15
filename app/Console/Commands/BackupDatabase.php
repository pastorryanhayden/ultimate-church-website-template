<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "This makes a weekly backup of the database and saves it in the website's backups bucket";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Path to the SQLite database
        $databasePath = database_path('database.sqlite');

        // Slugify the Church Name
        $churchname = Str::slug(env('CHURCH_NAME')) . '_';

        // Create a backup file name with the current date
        $backupFileName = 'backup_' . $churchname . Carbon::now()->format('Y_m_d_H_i_s') . '.sqlite';

        // Copy the database to a temporary file
        $tempBackupPath = storage_path('app/' . $backupFileName);
        copy($databasePath, $tempBackupPath);

        // Upload the backup file to S3
        $s3 = Storage::disk('vultr');
        $s3->put('backups/' . $backupFileName, file_get_contents($tempBackupPath));

        // Remove the temporary backup file
        unlink($tempBackupPath);

        $this->info('Database backup was successful and uploaded to Vultr.');
    }
}
