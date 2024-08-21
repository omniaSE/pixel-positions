<?php

use App\Models\Employer;
use App\Models\Job;

it('belong to an employer', function () {
   $employer = Employer::factory()->create();
   $job = Job::factory()->create([
    'employer_id' => $employer->id
   ]);
   expect($job->employer->is($employer))->toBeTrue();
});

it('has a tag',function(){
    $job = Job::factory()->create();
    $job->tag('frontend');
    expect($job->tags)->toHaveCount(1);
});