<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RequestsProduct;
use Illuminate\Support\Facades\Input;
use League\Fractal\Resource\Collection;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Manager;
use Response;
use App\Product;
use App\User;
use Auth;
use App\Transformers\ProductTransformer;

class ProductController extends Controller
{
    private $fractal;
    private $productsTransformer;

    function __construct(Manager $fractal, ProductTransformer $productsTransformer)
    {
        $this->fractal = $fractal;
        $this->productTransformer = $productsTransformer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $productsPaginator = Product::paginate(2);
        // $data['product'] = $product->setPath('products');
        // return Response::json($data,200);
        // $data['product'] = Product::all();
        // return view('freelancer.products.index',$data);

        $products = new Collection($productsPaginator->items(), $this->productTransformer);
        $products->setPaginator(new IlluminatePaginatorAdapter($productsPaginator));

        $products = $this->fractal->createData($products);

        return $products->toArray();
    }
    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $product = Product::where('jdl_Pdk','=',$keyword)->paginate();
        $data['product'] = $product->setPath('products');
        return view('products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsProduct $request)
    {
        // $filename = Input::file('foto')->getClientOriginalName();
        // Input::file('foto')->move(public_path().'/upload/',$filename);
        $freelancer = User::find(Auth::user()->id);
        $data = $request->all();
        $data = array(
            'jdl_Pdk'=>Input::get('jdl_Pdk'),
            'freelancer_id' => $freelancer->id,
            'hrg_awal'=>Input::get('hrg_awal'),
            'hrg_promo'=>Input::get('hrg_promo'),
            'category_id'=>Input::get('category_id'),
            'subcategory_id'=>Input::get('subcategory_id'),
            'description'=>Input::get('description')
        );
        
        Product::create($data);
       
 
        return response()->json(['success', $freelancer->id], 200);
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
        $data=Product::find($id);
        if(is_null($data))
        {
            return response()->json("not found",404);
        }
        return fractal()
            ->item($data)
            ->transformWith(new ProductTransformer)
            ->toArray();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['product'] = Product::find($id);
        return Response::json($data,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestsProduct $request, $id)
    {
        //
        $data = $request->all();
        $product = Product::find($id);
        $product->update($data);
        // return redirect('products');
        if(!$success)
        {
            return Response::json("error updating",500);
        }
 
        return Response::json("success",201);
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
        $product = Product::find($id);
        if(is_null($product))
        {
            return Response::json("not found",404);
        }
 
        $success=$product->delete();
 
        if(!$success)
        {
            return Response::json("error deleting",500);
        }
 
        return Response::json("success",200);
    }
}
