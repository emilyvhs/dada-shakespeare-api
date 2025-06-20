<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\JsonResponse;

class ChapterApiController extends Controller
{
    public function all(): JsonResponse
    {
        $chapters = Chapter::all();

        if(!$chapters) {
            return response()->json([
                'message' => 'No chapters found'
            ], 404);
        }

        return response()->json([
            'message' => 'Found all chapters',
            'data' => $chapters,
        ]);
    }

    public function find(Chapter $chapter): JsonResponse
    {
        return response()->json([
            'message' => 'Found single chapter',
            'data' => $chapter,
        ]);
    }
}
