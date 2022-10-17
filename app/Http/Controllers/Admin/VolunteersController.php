<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteersController\UpdateRequest;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteers = Volunteer::orderBy('created_at', 'DESC')->get();
        return view('admin.volunteers.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.volunteers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('volunteers', 'public');
            $data['photo'] = '/storage/' . $path;
        }
        $socials = json_encode([
            'whatsapp' => $request->whatsapp,
            'telegram' => $request->telegram,
            'email' => $request->email
        ]);
        unset($data['whatsapp']);
        unset($data['telegram']);
        unset($data['email']);
        $data['socials'] = $socials;
        Volunteer::create($data);
        return to_route('admin.volunteers.index')->withSuccess('Волонтер успешно добавлен');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::find($id);
        return view('admin.volunteers.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        if($request->hasFile('photo')) {
            $path = $request->file('photo')->store('volunteers', 'public');
            $data['photo'] = '/storage/' . $path;
        }
        $socials = json_encode([
                    'whatsapp' => $request->whatsapp,
                    'telegram' => $request->telegram,
                    'email' => $request->email
                    ]);
        unset($data['whatsapp']);
        unset($data['telegram']);
        unset($data['email']);
        $data['socials'] = $socials;
        Volunteer::find($id)->update($data);
        return to_route('admin.volunteers.index')->withSuccess('Волонтер успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Volunteer::find($id)->delete();
        return to_route('admin.volunteers.index')->withSuccess('Волонтер успешно удален');
    }
}
