<?php

namespace App\Http\Controllers;

use App\Models\DailyHours;
use App\Http\Requests\StoreDailyHoursRequest;
use App\Http\Requests\UpdateDailyHoursRequest;

class DailyHoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDailyHoursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDailyHoursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DailyHours  $dailyHours
     * @return \Illuminate\Http\Response
     */
    public function show(DailyHours $dailyHours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailyHours  $dailyHours
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyHours $dailyHours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDailyHoursRequest  $request
     * @param  \App\Models\DailyHours  $dailyHours
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDailyHoursRequest $request, DailyHours $dailyHours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailyHours  $dailyHours
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyHours $dailyHours)
    {
        //
    }
}
