<?php

class PosicionesController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /posiciones
     *
     * @return Response
     */
    public function index()
    {
        $posiciones = Posicion::all();
        return View::make('posicion.index')
        ->with('posiciones',$posiciones);
    }

    /**
     * Show the form for creating a new resource.
     * GET /posiciones/create
     *
     * @return Response
     */
    public function create()
    {
        $totalEquipos = Equipo::count();
        $totalTorneos = Torneo::count();
        if ($totalEquipos > 0) {
            if ($totalTorneos > 0) {
                $equipos = Equipo::where('categoria_id','1')->orderBy('nombre','ASC')->lists('nombre','id');
                $torneos = Torneo::lists('nombre','id');
                return View::make('posicion.create')
                ->with('equipos',$equipos)
                ->with('torneos',$torneos);
            } else {
                return Redirect::to('admin/posicion')
                ->with('alert-warning','No tienes torneos registrados');
            }   
        } else {
            return Redirect::to('admin/posicion')
            ->with('alert-warning','No tienes equipos registrados');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     * POST /posiciones
     *
     * @return Response
     */
    public function store()
    {
        $equipo_id = Input::get('equipo_id');
        $fecha     = Input::get('fecha');
        $goles_f   = Input::get('goles_f');
        $goles_c   = Input::get('goles_c');
        $torneo_id = Input::get('torneo_id');

        $verifica = Posicion::where('fecha','=',$fecha)
        ->where('equipo_id','=',$equipo_id)->where('torneo_id','=',$torneo_id)->count();
        if ($verifica > 0) {
            return Redirect::to('admin/posicion/create')
            ->withInput()->with('alert-danger','Ya se encuentra registrado en esta fecha un resultado');
        } else {
            $favor  = (int)Input::get('goles_f');
            $contra = (int)Input::get('goles_c');
            if ($favor > $contra) {
                $puntos = 3;
            }
            if ($favor < $contra) {
                $puntos = 0;
            }
            if ($favor == $contra) {
                $puntos = 1;
            }
            $posicion = new Posicion();
            $posicion->equipo_id = $equipo_id;
            $posicion->fecha     = $fecha;
            $posicion->goles_f   = $goles_f;
            $posicion->goles_c   = $goles_c;
            $posicion->torneo_id = $torneo_id;
            $posicion->puntos    = $puntos;
            $posicion->save();
            return Redirect::to('admin/posicion')
            ->with('alert-success', 'Se han agregado correctamente los puntos.');
        }
    }

    /**
     * Display the specified resource.
     * GET /posiciones/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Redirect::to('admin/posicion');
    }

    /**
     * Show the form for editing the specified resource.
     * GET /posiciones/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $equipos = Equipo::where('categoria_id','1')->orderBy('nombre','ASC')->lists('nombre','id');
        $torneos = Torneo::lists('nombre','id');
        $posicion = Posicion::find($id);
        return View::make('posicion.edit')
        ->with('equipos',$equipos)
        ->with('torneos',$torneos)
        ->with('posicion',$posicion);
    }

    /**
     * Update the specified resource in storage.
     * PUT /posiciones/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $favor  = (int)Input::get('goles_f');
        $contra = (int)Input::get('goles_c');
        if ($favor > $contra) {
            $puntos = 3;
        }
        if ($favor < $contra) {
            $puntos = 0;
        }
        if ($favor == $contra) {
            $puntos = 1;
        }
        $posicion = Posicion::find($id);
        $posicion->equipo_id = Input::get('equipo_id');
        $posicion->fecha     = Input::get('fecha');
        $posicion->goles_f   = Input::get('goles_f');
        $posicion->goles_c   = Input::get('goles_c');
        $posicion->torneo_id = Input::get('torneo_id');
        $posicion->puntos    = $puntos;
        $posicion->save();
        return Redirect::to('admin/posicion')
        ->with('alert-success', 'Se han editado correctamente los puntos.');
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /posiciones/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $posicion = Posicion::find($id);
        $posicion->delete();
        return Redirect::to('admin/posicion')
        ->with('alert-success', 'Se ha eliminado correctamente el resultado.');
    }

}