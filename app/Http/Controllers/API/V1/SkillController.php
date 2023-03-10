<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use App\Http\Resources\V1\SkillResource;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() {
        return new SkillCollection(Skill::all());
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

    public function destroy(Skill $skill) {
        $skill->delete();
        return response()->json("Skill Delete Successfully");
    }
    
}
