<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\createfromrequest;
use App\Models\c;
use Illuminate\Http\Request;
use App\Http\Services\Menu\Menuservice;
use App\Models\ProductCategory;
use Illuminate\Foundation\Http\FormRequest;

class Menucontroller extends Controller

{
    protected $menuService;
    public function __construct(Menuservice $menuService)
    {
        $this->menuService = $menuService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= ProductCategory::orderBy('id','ASC')->search()->paginate(10);
        return view('admin.categories.list',compact('data'),[
                'title'=>'Categories List',
                // 'products_categories'=>$this->menuService->getAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.add',[
            'title'=>'Add a new categories'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createfromrequest $request)
    {
        // nhan repest
        // dd($request->input());
        $this->menuService->create($request);
        return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $menu)
    {
        return view('admin.categories.edit',[
            'title'=>'edit categories' . $menu->name,
            'menu'=>$menu
        ]

        );
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategory $menu,createfromrequest $request)
    {
        $this->menuService->update($request,$menu);
        return redirect('admin/menu/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $result = $this->menuService->destroy($request);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
