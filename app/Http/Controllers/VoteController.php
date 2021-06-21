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
            $voteData = [
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'candidate_id' => $request->input('candidate_id')
            ];
            Vote::create($voteData);
            DB::commit();
            return redirect()->back()->with('success','Voto cadastrado com sucesso.');

        }catch(\Exception $exception)
        {
            DB::rollback();
            return redirect()->back()->with('danger','Não foi possível votar no candidato.');
        }
    }
}
