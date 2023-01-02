<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use App\Http\Resources\V1\SkillResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() {
         return response()->json("Skill Index");
    }

    public function store(StoreSkillRequest $request) {
        Skill::create($request->validated());
        return response()->json("skill Created"); 
    }

    public function update(StoreSkillRequest $request, Skill $skill) {
        $skill->update($request->validated());
        return response()->json("Skill Update");
    }

    public function show(Skill $skill) {
        return new SkillResource($skill);
    }
    
}
