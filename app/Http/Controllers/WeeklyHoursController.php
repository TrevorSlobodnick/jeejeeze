<?php

namespace App\Http\Controllers;

use App\Models\WeeklyHours;
use App\Http\Requests\StoreWeeklyHoursRequest;
use App\Http\Requests\UpdateWeeklyHoursRequest;

class WeeklyHoursController extends Controller
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
     * @param  \App\Http\Requests\StoreWeeklyHoursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeeklyHoursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeeklyHours  $weeklyHours
     * @return \Illuminate\Http\Response
     */
    public function show(WeeklyHours $weeklyHours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeeklyHours  $weeklyHours
     * @return \Illuminate\Http\Response
     */
    public function edit(WeeklyHours $weeklyHours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeeklyHoursRequest  $request
     * @param  \App\Models\WeeklyHours  $weeklyHours
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeeklyHoursRequest $request, WeeklyHours $weeklyHours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeeklyHours  $weeklyHours
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeeklyHours $weeklyHours)
    {
        //
    }
}
