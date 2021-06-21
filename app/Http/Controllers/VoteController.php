<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;


class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::query()->get();
        return view('main',compact('candidates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $vote_data = [
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'candidate_id' => $request->input('candidate_id')
            ];
            Vote::create($vote_data);
            DB::commit();
            $message = "Voto cadastrado com sucesso!";
            $candidates = Candidate::query()->get();
            return view('main',compact('message','candidates'));

        }catch(\Exception $exception)
        {
            DB::rollback();
            $error = true;
            $candidates = Candidate::query()->get();
            return view('main',compact('error','candidates'));
        }
    }
}
