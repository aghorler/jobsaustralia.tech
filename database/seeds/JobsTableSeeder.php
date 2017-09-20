<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'id' => '5eddee25-eecb-4091-be1a-6d95efd0fac7',
            'title' => 'Software Developer',
            'description' => 'A dynamic company that delivers an online health and wellness platform to a diverse market, including corporations, health insurers, healthcare provider groups and educational institutions is looking for a developer to join their IT team.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annually',
            'salary' => 70000,
            'startdate' => '2017-10-01',
            'state' => 'vic',
            'city' => 'Melbourne',
            'java' => 1,
            'python' => 1,
            'c' => 1,
            'csharp' => 1,
            'cplus' => 1,
            'php' => 1,
            'html' => 1,
            'css' => 1,
            'javascript' => 1,
            'sql' => 1,
            'unix' => 1,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 1,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 1,
            'batch' => 0,
            'cisco' => 0,
            'office' => 1,
            'r' => 0,
            'go' => 1,
            'ruby' => 1,
            'asp' => 1,
            'scala' => 0,
            'employerid' => 'db930f90-17a8-468a-b094-7416f0c63e99'
        ]);

        DB::table('jobs')->insert([
            'id' => 'd14cd514-863f-4cc0-9008-c51b4076732e',
            'title' => 'Help desk support',
            'description' => 'You will be required to provide an exceptional level of customer service whilst providing level 1 and some level 2 technical support to internal clients. The role will require you to work in a methodical and process driven way to troubleshoot issues, however you should have the aptitude to think outside the box and work autonomously should known procedures not yield results.',
            'term' => 'permanent',
            'hours' => 'parttime',
            'rate' => 'hourly',
            'salary' => 30,
            'startdate' => '2017-10-01',
            'state' => 'nsw',
            'city' => 'Sydney',
            'java' => 1,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 1,
            'winserver' => 1,
            'windesktop' => 1,
            'linuxdesktop' => 1,
            'macosdesktop' => 1,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 1,
            'office' => 1,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'employerid' => '7c8b051d-62d7-4250-b679-4ffffc2d1d5f'
        ]);

        DB::table('jobs')->insert([
            'id' => 'ea5c6d59-8141-45c0-b1b9-98fdb885340d',
            'title' => 'SQL report writer',
            'description' => 'This EXCELLENT role offers the opportunity for a dedicated IT support individual to provide 1st and 2nd end user support in a challenging and fast paced environment. Your experience in dealing directly with business owners and articulating IT issues is paramount as will be your technical understand of wide ranging business management functions.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annualy',
            'salary' => 65000,
            'startdate' => '2017-10-01',
            'state' => 'vic',
            'city' => 'Melbourne',
            'java' => 1,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 1,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 1,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 1,
            'scala' => 0,
            'employerid' => '400fa8b2-f8f9-4c64-9b70-ea6ea2e1fe2d'
        ]);

        DB::table('jobs')->insert([
            'id' => '32488d83-0c92-4a44-a3b9-4febb2aa5465',
            'title' => 'Java Developer',
            'description' => 'This a a fantastic opportunity for a keen technologist interested in the journey as much as the destination. Joining a cross functional team of 6-8 performing rapid prototyping of new features, enhancements to their responsive web, and mobile applications (Android and iOS). You will be working very closely with product management, designers and delivery team members to enhance the well-known suite of flagship products.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annually',
            'salary' => 90000,
            'startdate' => '2017-10-01',
            'state' => 'nsw',
            'city' => 'Wollongong',
            'java' => 1,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'employerid' => '5ed27969-c2cc-4d02-b7f6-c1bf0b19d613'
        ]);

        DB::table('jobs')->insert([
            'id' => '3f53d106-fc19-4ee3-89dd-a3faf14cc9e2',
            'title' => 'Project Manager',
            'description' => 'This role is responsible for engaging stakeholders and developing appropriate plans and strategies leading to stakeholder satisfaction. This will involve forming and leading diverse project teams, ensuring all project tasks are completed to schedule, budget, and customer requirements.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annually',
            'salary' => 100000,
            'startdate' => '2017-10-15',
            'state' => 'wa',
            'city' => 'Broome',
            'java' => 1,
            'python' => 0,
            'c' => 1,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 1,
            'html' => 1,
            'css' => 1,
            'javascript' => 1,
            'sql' => 1,
            'unix' => 0,
            'winserver' => 1,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 1,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'employerid' => '593e4d9f-e71e-468f-b38a-572afd5ba2f7'
        ]);

        DB::table('jobs')->insert([
            'id' => '4eecd43c-882e-4b39-b62a-a812d934f73e',
            'title' => 'System Administrator',
            'description' => 'This role is responsible for managing Windows and Linux systems at the Desktop and Server level. Experience in Bash, and Active Directory are required. No graduates.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annually',
            'salary' => 150000,
            'startdate' => '2017-10-15',
            'state' => 'vic',
            'city' => 'Melbourne',
            'java' => 0,
            'python' => 1,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 1,
            'html' => 1,
            'css' => 0,
            'javascript' => 1,
            'sql' => 1,
            'unix' => 1,
            'winserver' => 1,
            'windesktop' => 1,
            'linuxdesktop' => 1,
            'macosdesktop' => 1,
            'pearl' => 0,
            'bash' => 1,
            'batch' => 1,
            'cisco' => 1,
            'office' => 1,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'employerid' => '753056e2-8123-4904-8f80-3f9a990e0d8b'
        ]);

        DB::table('jobs')->insert([
            'id' => '97deb57b-4052-41bc-8eee-050329653986',
            'title' => 'Network Engineer',
            'description' => 'You must be able to subnet IPv6.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annually',
            'salary' => 98000,
            'startdate' => '2017-10-15',
            'state' => 'sa',
            'city' => 'Adelaide',
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 1,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'employerid' => '5f721744-eac8-42e6-8e1b-b7a9d9e1a61d'
        ]);

        DB::table('jobs')->insert([
            'id' => '662219cd-3d8b-40d5-88cd-60e6178dc4bb',
            'title' => 'Go Programmer',
            'description' => 'This role will consist solely of Go programming. Significant experience and knowledge in Go is therefore required.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annually',
            'salary' => 200000,
            'startdate' => '2017-10-15',
            'state' => 'vic',
            'city' => 'Melbourne',
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 1,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 1,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'employerid' => '3d7fb46d-489c-402e-b995-db4d3d158eb5'
        ]);

        DB::table('jobs')->insert([
            'id' => '0d92b9ee-a5ee-4843-bdd8-994031584142',
            'title' => 'Electronic Entomologist specialising in C++',
            'description' => 'This is a research role where you will study the link between circuits and insects, and be required in write unrelated software in C++. Applicants will need 20 years experience in Windows 10, and will benefit from being able to speak Swahili.',
            'term' => 'permanent',
            'hours' => 'fulltime',
            'rate' => 'annually',
            'salary' => 56000,
            'startdate' => '2017-10-15',
            'state' => 'qld',
            'city' => 'Brisbane',
            'java' => 0,
            'python' => 1,
            'c' => 1,
            'csharp' => 0,
            'cplus' => 1,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 1,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'pearl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 1,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'employerid' => '3d7fb46d-489c-402e-b995-db4d3d158eb5'
        ]);
    }
}