<?php

class NoticiasController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /noticias
     *
     * @return Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return View::make('noticias.index')
        ->with('noticias',$noticias);
    }

    /**
     * Show the form for creating a new resource.
     * GET /noticias/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /noticias
     *
     * @return Response
     */
    public function store()
    {
        $destino  = public_path().'/src/noticias/';
        if (Input::file('imagen')) {
            $extension = Input::file('imagen')->getClientOriginalExtension();
            if ($extension == "jpg") {
                $noticia              = new Noticia();
                $noticia->titulo      = Input::get('titulo');
                $noticia->publicacion = Input::get('publicacion');
                $noticia->contenido   = Input::get('contenido');
                $noticia->save();
                $imagen = 'noticia_'.$noticia->id.'.jpg';
                $noticia->imagen = $imagen;
                $noticia->save();
                $file   = Input::file('imagen');
                $img = Image::make($file->getRealPath());
                $img->resize(540, null, function ($constraint) {
                     $constraint->aspectRatio();
                 })->crop(540, 300)->save($destino.$imagen);
                $img->resize(180, null, function ($constraint) {
                     $constraint->aspectRatio();
                 })->crop(180, 100)->save($destino.'/miniaturas/'.$imagen);
                $tipo = 'alert-success';
                $mensaje ="La noticia se genero correctamente";
            } else {
                $tipo = 'alert-danger';
                $mensaje ="La imagen debe de tener la extencion .jpg";
            }
        }else{
            $imagen               = 'default.jpg';
            $noticia              = new Noticia();
            $noticia->titulo      = Input::get('titulo');
            $noticia->publicacion = Input::get('publicacion');
            $noticia->contenido   = Input::get('contenido');
            $noticia->imagen      = $imagen;
            $noticia->save();
            $tipo = 'alert-success';
            $mensaje ="La noticia se genero correctamente";
        }
        Session::put($tipo, $mensaje);
    }

    /**
     * Display the specified resource.
     * GET /noticias/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return View::make('noticias.show')
        ->with('noticia',$noticia);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /noticias/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
        return View::make('noticias.edit')
        ->with('noticia',$noticia);
    }

    /**
     * Update the specified resource in storage.
     * PUT /noticias/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $destino  = public_path().'/src/noticias/';
        if (Input::file('imagen')) {
            $extension = Input::file('imagen')->getClientOriginalExtension();
            if ($extension == "jpg") {
                $imagen = 'noticia_'.$id.'.jpg';
                $noticia              = Noticia::find($id);
                $noticia->titulo      = Input::get('titulo');
                $noticia->publicacion = Input::get('publicacion');
                $noticia->contenido   = Input::get('contenido');
                $noticia->imagen      = $imagen;
                $noticia->save();
                $file = Input::file('imagen');
                $img  = Image::make($file->getRealPath());
                $img->resize(540, null, function ($constraint) {
                     $constraint->aspectRatio();
                 })->crop(540, 300)->save($destino.$imagen);
                $img->resize(180, null, function ($constraint) {
                     $constraint->aspectRatio();
                 })->crop(180, 100)->save($destino.'/miniaturas/'.$imagen);
                $tipo = 'alert-success';
                $mensaje ="La noticia se genero correctamente";
            } else {
                $tipo = 'alert-danger';
                $mensaje ="La imagen debe de tener la extencion .jpg";
            }
        }else{
            $noticia              = Noticia::find($id);
            $noticia->titulo      = Input::get('titulo');
            $noticia->publicacion = Input::get('publicacion');
            $noticia->contenido   = Input::get('contenido');
            $noticia->save();
            $tipo = 'alert-success';
            $mensaje ="La noticia se edito correctamente";
        }
        return Redirect::to('admin/noticia')
        ->with($tipo, $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /noticias/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();
        return Redirect::to('admin/noticia')
        ->with('alert-danger', 'Se ha eliminado correctamente la noticia.');
    }
}