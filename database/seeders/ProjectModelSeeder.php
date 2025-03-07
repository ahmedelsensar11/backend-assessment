<?php

namespace Database\Seeders;

use App\Enums\StatusEnum;
use App\Models\Project;
use App\Models\ProjectAttribute;
use App\Services\Project\ProjectService;
use Illuminate\Database\Seeder;

class ProjectModelSeeder extends Seeder
{
    protected ProjectService $projectService;
    public function __construct()
    {
        $this->projectService = app(ProjectService::class);
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //preparing attributes
        $attributes = [
            [
                'name' => 'department',
                'type' => 'select',
            ],
            [
                'name' => 'start_date',
                'type' => 'date',
            ],
            [
                'name' => 'end_date',
                'type' => 'date',
            ],
            [
                'name' => 'type',
                'type' => 'select',
            ],
        ];
        foreach ($attributes as $attribute) {
            ProjectAttribute::firstOrCreate(['name' => $attribute['name']], $attribute);
        }

        //handle all projects data
        $projects = [
          [
              'name' => 'New Website',
              'status' => StatusEnum::PENDING,
              'attributes' => [
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'department'])->first()->id,
                      'value' => 'IT',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'start_date'])->first()->id,
                      'value' => '2025-01-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'end_date'])->first()->id,
                      'value' => '2025-03-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'type'])->first()->id,
                      'value' => 'online',
                  ]
              ]
          ],
          [
              'name' => 'Marketing Plan',
              'status' => StatusEnum::PENDING,
              'attributes' => [
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'department'])->first()->id,
                      'value' => 'Marketing',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'start_date'])->first()->id,
                      'value' => '2025-02-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'end_date'])->first()->id,
                      'value' => '2025-06-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'type'])->first()->id,
                      'value' => 'hybrid',
                  ]
              ]
          ],
          [
              'name' => 'Social Media',
              'status' => StatusEnum::ACTIVE,
              'attributes' => [
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'department'])->first()->id,
                      'value' => 'Marketing',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'start_date'])->first()->id,
                      'value' => '2025-03-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'end_date'])->first()->id,
                      'value' => '2025-04-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'type'])->first()->id,
                      'value' => 'online',
                  ]
              ]
          ],
          [
              'name' => 'Designing',
              'status' => StatusEnum::PENDING,
              'attributes' => [
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'department'])->first()->id,
                      'value' => 'IT',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'start_date'])->first()->id,
                      'value' => '2025-02-15',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'end_date'])->first()->id,
                      'value' => '2025-04-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'type'])->first()->id,
                      'value' => 'online',
                  ]
              ]
          ],
          [
              'name' => 'IOT System',
              'status' => StatusEnum::PENDING,
              'attributes' => [
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'department'])->first()->id,
                      'value' => 'IT',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'start_date'])->first()->id,
                      'value' => '2025-01-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'end_date'])->first()->id,
                      'value' => '2025-09-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'type'])->first()->id,
                      'value' => 'offline',
                  ]
              ]
          ],
          [
              'name' => 'Videography',
              'status' => StatusEnum::ACTIVE,
              'attributes' => [
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'department'])->first()->id,
                      'value' => 'Marketing',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'start_date'])->first()->id,
                      'value' => '2025-03-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'end_date'])->first()->id,
                      'value' => '2025-05-01',
                  ],
                  [
                      'attribute_id' => ProjectAttribute::where(['name' => 'type'])->first()->id,
                      'value' => 'online',
                  ]
              ]
          ],
        ];
        foreach ($projects as $project) {
            $existingProject = Project::where(['name' => $project['name']])->first();
            if ($existingProject) {
                $this->projectService->update($existingProject, $project);
            } else {
                $this->projectService->create($project);
            }
        }
    }
}
