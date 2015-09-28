<?php

class SlidersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sliders
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders  = Slider::all();
		return View::make('slider.index')
		->with('sliders',$sliders);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sliders/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return Redirect::to('admin/slider');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sliders
	 *
	 * @return Response
	 */
	public function store()
	{
		return Redirect::to('admin/slider');
	}

	/**
	 * Display the specified resource.
	 * GET /sliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$slider = Slider::find($id);
		return View::make('slider.show')
		->with('slider',$slider);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sliders/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$slider = Slider::find($id);
		return View::make('slider.edit')
		->with('slider',$slider);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$destino  = public_path().'/src/slider/';
		if (Input::file('imagen')) {
			$extension = Input::file('imagen')->getClientOriginalExtension();
			if ($extension == "jpg") {
				$imagen    = $id.'s.jpg';
				$file      = Input::file('imagen');
				$img = Image::make($file->getRealPath());
				$img->resize(945, null, function ($constraint) {
				     $constraint->aspectRatio();
				 })->crop(945, 420)->save($destino.$imagen);
				$img->resize(189, null, function ($constraint) {
				     $constraint->aspectRatio();
				 })
				->crop(189, 84)->save($destino.'/miniaturas/'.$imagen);
				$tipo = 'alert-success';
				$mensaje ="La imagen actualizo correctamente";
			} else {
				$tipo = 'alert-danger';
				$mensaje ="La imagen debe de tener la extencion .jpg";
			}
		} else {
			$tipo = 'alert-warning';
			$mensaje ="No seleccionaste ninguna imagen";
		}
		Session::put($tipo, $mensaje);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sliders/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Redirect::to('admin/slider');
	}

}