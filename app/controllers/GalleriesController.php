<?php
use Intervention\Image\ImageManagerStatic as Imagic;
class GalleriesController extends \BaseController {
	/**
	 * Display a listing of galleries
	 *
	 * @return Response
	 */
	public function index()
	{
		$galleries = Gallery::all();
		return View::make('admin.galleries.index', compact('galleries'))
            ->with('page','لیست تصاویر');
	}
	/**
	 * Show the form for creating a new gallery
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.galleries.create')
            ->with('page','ایجاد تصویر');
	}
	/**
	 * Store a newly created gallery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Gallery::$rules);
		if ($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}
        if(Input::hasFile('image')){
            $imagefile = Input::file('image');
            $filename = $imagefile->getClientOriginalName();
            $path ="admin_assets/images/gallery/".$filename;
            $path_thumb ="admin_assets/images/gallery/thumb/".$filename;
            $width = Imagic::make($imagefile)->width();
            $height = Imagic::make($imagefile)->height();
            $image = Imagic::make($imagefile);
            $thumb_image = Imagic::make($imagefile);
            $thumb_image->resize($width / 3, $height / 3);
            $thumb_image->save(public_path($path_thumb));
            $gallery = new Gallery();
            $gallery->image = $path;
            $gallery->thumbnail = $path_thumb;
            $gallery->title = Input::get('title');
            $image->save(public_path($path));
            $gallery->save();
            return Redirect::route('admin.galleries.index')
                ->with('success','new image saved successfully')
                ->with('class_team',"class='open active'");
            }
        else{
            return Redirect::back()->with('image','image is required');
        }
	}
	/**
	 * Display the specified gallery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gallery = Gallery::findOrFail($id);
		return View::make('admin.galleries.show', compact('gallery'));
	}
	/**
	 * Show the form for editing the specified gallery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gallery = Gallery::find($id);
		return View::make('admin.galleries.edit', compact('gallery'));
	}
	/**
	 * Update the specified gallery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = null;
		$gallery = Gallery::findOrFail($id);
		$validator = Validator::make($data = Input::all(), Gallery::$rules);
		if ($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$gallery->update($data);
		return Redirect::route('admin.galleries.index');
	}
	/**
	 * Remove the specified gallery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$gallery = Gallery::find($id);
        if(File::exists($gallery->thumbnail)){
            File::delete(array(public_path($gallery->thumbnail)));
        }
        if(File::exists($gallery->image)){
            File::delete(array(public_path($gallery->image)));
        }
		Gallery::destroy($id);
		return Redirect::route('admin.galleries.index');
	}
}