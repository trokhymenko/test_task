<?php

namespace App\Console\Commands;

use App\Models\Trip;
use Illuminate\Console\Command;

class ImportTrips extends Command
{
    const FILE_PATH = '/imports/trips.csv';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-trips';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import trips';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $fileContents = file(database_path(self::FILE_PATH));

        foreach ($fileContents as $key => $line) {
            if ($key === 0) {
                continue;
            }

            $data = str_getcsv($line);

            Trip::create([
                'trip_id' => $data[0],
                'driver_id' => $data[1],
                'pickup' => $data[2],
                'dropoff' => $data[3],
            ]);
        }
    }
}
