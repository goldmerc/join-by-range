<?php

use Illuminate\Database\Seeder;

class AntiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement(
          "INSERT INTO `antiques` (`id`, `name`, `year`)
          VALUES
              (1,'A Pair of Candlesticks', 1879),
              (2,'A table', 1780),
              (3,'A decanter', 1815),
              (4,'A pair of pheasant models', 1909),
              (5,'A sofa', 1945),
              (6,'A painting of a horse', 1845),
              (7,'A chalice', 1680),
              (8,'A teaset', 1826),
              (9,'A tankard', 1703),
              (10,'A set of glasses', 1901);"
      );
    }
}
