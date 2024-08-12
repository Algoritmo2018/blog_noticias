<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\SlideResource;
use App\Repositories\SlideRepository; 

class SlideController extends Controller
{

    public function __construct(private SlideRepository $slideRepository)
    {}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $slides = $this->slideRepository->getPaginate(
            totalPerPage: $request->total_per_page ?? 15,
            page: $request->page ?? 1,
            filter: $request->get('filter', ''),
        );
        return SlideResource::collection($slides);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!$slide = $this->slideRepository->findById($id)){
            return response()->json(['message' => 'slide not found'], Response::HTTP_NOT_FOUND);
        }
        return new SlideResource($slide);
    }



}
