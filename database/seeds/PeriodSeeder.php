<?php

use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement(
          "INSERT INTO `periods` (`id`, `start_year`, `end_year`, `name`, `slug`)
          VALUES
              (1,1,1558,'Pre Elizabeth I','pre-elizabeth-i'),
              (2,1558,1603,'Elizabethan','elizabethan'),
              (3,1603,1625,'James I','james-i'),
              (4,1625,1649,'Charles I','charles-i'),
              (5,1649,1660,'Commonwealth','commonwealth'),
              (6,1660,1685,'Charles II','charles-ii'),
              (7,1685,1688,'James II','james-ii'),
              (8,1688,1694,'William & Mary','william-and-mary'),
              (9,1694,1702,'William III','william-iii'),
              (10,1702,1714,'Queen Anne','queen-anne'),
              (11,1714,1727,'George I','george-i'),
              (12,1715,1830,'Georgian','georgian'),
              (13,1727,1760,'George II','george-ii'),
              (14,1760,1820,'George III','george-iii'),
              (15,1810,1820,'Regency','regency'),
              (16,1820,1830,'George IV','george-iv'),
              (17,1830,1837,'William IV','william-iv'),
              (18,1837,1901,'Victorian','victorian'),
              (19,1901,1909,'Edwardian','edwardian'),
              (20,1909,1935,'George V','george-v'),
              (21,1935,1936,'Edward VIII','edward-viii'),
              (22,1936,1952,'George VI','george-vi'),
              (23,1952,2025,'Elizabeth II','elizabeth-ii'),
              (24,1501, 1600, '16th Century', '16th-century'),
              (25,1601, 1700, '17th Century', '17th-century'),
              (26,1701, 1800, '18th Century', '18th-century'),
              (27,1801, 1900, '19th Century', '19th-century'),
              (28,1901, 2000, '20th Century', '20th-century'),
              (29,2001, 2100, '21st Century', '21st-century');"
      );
    }
}
