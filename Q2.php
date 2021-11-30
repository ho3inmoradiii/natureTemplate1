<?php




Route::get('/products',function (){
    $products=DB::table('products')
        ->orderBy('name', 'asc')
        ->get();
    return view('products.index',compact('products'));
});

?>
