<?php
use Intervention\Image\ImageManagerStatic as Imagic;
class SlidersController extends \BaseController {

	/**
	 * Display a listing of sliders
	 *
	 * @return Response
	 */
	public function index()
	{
		$sliders = Slider::all();
		return View::make('admin.sliders.index', compact('sliders'))
            ->with('page','لیست تصاویر اسلاید');
	}
	/**
	 * Show the form for creating a new slider
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.sliders.create')
            ->with('page','ایجاد تصویر اسلاید');
	}

	/**
	 * Store a newly created slider in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Slider::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        if(Input::hasFile('image')){
            $imagefile = Input::file('image');
            $filename = $imagefile->getClientOriginalName();
            $path ="admin_assets/images/sliders/".$filename;
            $path_thumb ="admin_assets/images/sliders/thumb/".$filename;
            $width = Imagic::make($imagefile)->width();
            $height = Imagic::make($imagefile)->height();
            $image = Imagic::make($imagefile);
            if(($width < 1400) and ($height < 900)){
                return Redirect::back()->with('img','اندازه تصویر مناسب نیست');
            }else{
                $thumb_image = Imagic::make($imagefile);
                $thumb_image->resize($width / 3, $height / 3);
                $thumb_image->save(public_path($path_thumb));
                $slider = new Slider();
                $slider->image = $path;
                $slider->thumbnail = $path_thumb;
                $slider->title = Input::get('title');
                $image->save(public_path($path));
                $slider->save();
                return Redirect::route('admin.sliders.index')
                    ->with('success','new image saved successfully');
            }
        }
        else{
            return Redirect::back()->with('image','image is required');
        }
	}

	/**
	 * Display the specified slider.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$slider = Slider::findOrFail($id);

		return View::make('admin.sliders.show', compact('slider'));
	}

	/**
	 * Show the form for editing the specified slider.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$slider = Slider::find($id);

		return View::make('admin.sliders.edit', compact('slider'));
	}

	/**
	 * Update the specified slider in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$slider = Slider::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Slider::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$slider->update($data);

		return Redirect::route('admin.sliders.index');
	}

	/**
	 * Remove the specified slider from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Slider::destroy($id);

		return Redirect::route('admin.sliders.index');
	}

}
