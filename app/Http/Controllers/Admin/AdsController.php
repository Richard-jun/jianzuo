<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Ads;
use App\Http\Requests\AdsRequest;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取数据
		$ads = Ads::paginate(5);
		//dd($data);
		return view('admin/ads/index',['ads'=>$ads,'request'=>$request]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('admin/ads/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdsRequest $request)
    {

        //
		$req = $request->except('_token','image');
		//dd($req);
		//文件上传
		$req['image'] = '/uploads/1.jpg';
		//dd($req);

		try{

			$rs = Ads::create($req);


			if($rs){

				return redirect('/admin/ads')->with('success','添加成功');
			}
		}catch(\Exception $e){

			return back()->with('error','添加失败');

		}

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ad = Ads::find($id);
		//dd($ad);
        return view('admin/ads/edit',['ad'=>$ad]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //表单验证
		$this->validate($request,[
			'url'=>'required|url',
			'image'=>'image',
		],[
			'url.required'=>'链接地址不能为空',
			'url.url'=>'链接地址不正确',
			'image.image'=>'图片格式不正确',
		]);


		//dd('fjd');

		$req = $request->except('_token','_method','image');
		//dd($req);

		//$rs = Ads::where('id',$id)->update($req);
		//dd($rs);

		try{

			Ads::where('id',$id)->update($req);

		}catch(\Exception $e){

			return back()->with('error','修改失败');
		}

			return redirect('/admin/ads')->with('success','修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		try{

			$rs = Ads::where('id',$id)->delete();


			if($rs){

				return redirect('/admin/ads')->with('success','删除成功');
			}
		}catch(\Exception $e){

			return back()->with('error','删除失败');

		}
    }

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 * DateTime: 2018/9/28 20:32
	 * @todo 注意被锁定的 前台不要查询出来
	 */
	public function lock($id)
	{
		//echo 'lock';

		try{

			$rs = Ads::where('id',$id)->update(['is_lock'=>1]);

			if($rs){

				return redirect('/admin/ads')->with('success','禁用成功');
			}
		}catch(\Exception $e){

			return back()->with('error','禁用失败');

		}
    }

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 * DateTime: 2018/9/29 10:07
	 */
	public function unlock($id)
	{
		//echo 'unlock';

		try{

			$rs = Ads::where('id',$id)->update(['is_lock'=>0]);

			if($rs){

				return redirect('/admin/ads')->with('success','启用成功');
			}
		}catch(\Exception $e){

			return back()->with('error','启用失败');

		}
    }

}
