<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("subjects")->insert([
            //Sem 1 subjects
            [
                "semester_number" => "1",
                "subject_code" => "22MCA101",
                "subject_name" => "Data Structures with Algorithms",
            ],
            [
                "semester_number" => "1",
                "subject_code" => "22MCA102",
                "subject_name" => "Advanced Database Systems",
            ],
            [
                "semester_number" => "1",
                "subject_code" => "22MCA103",
                "subject_name" => "Computer Organization and Architecture",
            ],
            [
                "semester_number" => "1",
                "subject_code" => "22MCA104",
                "subject_name" => "Mathematical Foundation for Computer Applications",
            ],
            [
                "semester_number" => "1",
                "subject_code" => "22MCA105",
                "subject_name" => "Software Engineering and Testing",
            ],
            [
                "semester_number" => "1",
                "subject_code" => "22MCA106",
                "subject_name" => "Research Methodology and Publication Ethics",
            ],
            [
                "semester_number" => "1",
                "subject_code" => "22MCA107",
                "subject_name" => "Data Structures with Algorithms Lab",
            ],
            [
                "semester_number" => "1",
                "subject_code" => "22MCA108",
                "subject_name" => "Advanced Database Systems Lab",
            ],
            
            //Sem 2 subjects
            [
                "semester_number" => "2",
                "subject_code" => "22MCA201",
                "subject_name" => "Data Communication and Networks",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA202",
                "subject_name" => "Enterprise Java",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA203",
                "subject_name" => "Operating Systems with UNIX",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA204",
                "subject_name" => "Data Warehousing and Data Mining",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA205",
                "subject_name" => "Professional Communication and Ethics",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA206",
                "subject_name" => "Data Communication and Networks Lab",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA207",
                "subject_name" => "Enterprise Java Lab",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA208",
                "subject_name" => "Operating Systems with Unix Lab",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA209",
                "subject_name" => "Technical Seminar and Report Writing",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA211",
                "subject_name" => "Digital Image Processing and Pattern Recognition",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA213",
                "subject_name" => "Soft Computing",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA222",
                "subject_name" => "Health Care Analytics",
            ],
            [
                "semester_number" => "2",
                "subject_code" => "22MCA225",
                "subject_name" => ".Net Framework and C#",
            ],
        ]);
    }
}
